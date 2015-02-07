#!bin/bash
function installvsftpd()
{
	logfile='/var/log/ftp.log'
	##安装vsftp服务
	yum -y install vsftpd
	##检测log文件是否存在
	if [ ! -f "$logfile" ];then
		##创建日志文件
		touch $logfile
	fi
	##创建chroot_list_file限定目录
	touch /etc/vsftpd/chroot_list
	echo ftp >> /etc/vsftpd/chroot_list
	#安装Berkeley DB工具，进行认证
	yum install db4 db4-utils
	###创建ftp的用户
	read -p 'ftp用户' ftpuser
	useradd -d /home/ftp -s /sbin/nologin $ftpuser
	read -p 'ftp密码' ftppassword
	##7用户密码保存文件
	userpassfile='/etc/vsftpd/vuser_passwd.txt'	
	if [ ! -f "$userpassfile" ];then
		touch $userpassfile
	fi
	echo $ftpuser >> $userpassfile
	echo $ftppassword >> $userpassfile
	ftpetc='/etc/vsftpd/'
	vuserpasswd='vuser_passwd'
	db_load -T -t hash -f $userpassfile ${ftpetc}${vuserpasswd}'.db'
	setsebool -P ftpd_disable_trans 1
	echo 'auth required pam_userdb.so db=/etc/vsftpd/vuser_passwd' >> /etc/pam.d/vsftpd
	echo 'account required pam_userdb.so db=/etc/vsftpd/vuser_passwd' >> /etc/pam.d/vsftpd
	###ftp的config文件
	###sed -n '/anonymous_enable/p' vsftpd.conf  |  sed 's/anonymous_enable=(YES|NO)/anonymous_enable=NO/g'
	configfile='/etc/vsftpd/vsftpd.conf'
	echo 'anonymous_enable=NO'>>$configfile
	echo 'local_enable=YES'>>$configfile
	echo 'write_enable=YES'>>$configfile
	echo 'local_umask=022'>>$configfile
	echo 'dirmessage_enable=YES'>>$configfile
	echo 'xferlog_enable=YES'>>$configfile
	echo 'connect_from_port_20=YES'>>$configfile
	echo 'xferlog_file='${logfile}>>$configfile
	echo 'xferlog_std_format=YES'>>$configfile
	echo 'ascii_upload_enable=YES'>>$configfile
	echo 'ascii_download_enable=YES'>>$configfile
	echo 'chroot_list_enable=YES'>>$configfile
	echo 'listen=YES'>>$configfile

	echo 'pam_service_name=vsftpd'>>$configfile
	echo 'userlist_enable=YES'>>$configfile
	echo 'tcp_wrappers=YES'>>$configfile
	echo 'guest_enable=YES'>>$configfile
	echo 'guest_username=ftp'>>$configfile
	echo 'pam_service_name=vsftpd'>>$configfile
	echo 'user_config_dir=/etc/vsftpd/vuser_conf'>>$configfile	
	###最后，创建虚拟用户个性RHEL/CentOS FTP服务文件
	mkdir ${ftpetc}'vuser_conf/'
	sed -i '$a local_root=/var/www/html' ${ftpetc}'vuser_conf/'${ftpuse}
	sed -i '$a write_enable=YES' ${ftpetc}'vuser_conf/'${ftpuse}
	sed -i '$a anon_umask=022' ${ftpetc}'vuser_conf/'${ftpuse}
	sed -i '$a anon_world_readable_only=NO' ${ftpetc}'vuser_conf/'${ftpuse}
	sed -i '$a anon_upload_enable=YES' ${ftpetc}'vuser_conf/'${ftpuse}
	sed -i '$a anon_mkdir_write_enable=YES' ${ftpetc}'vuser_conf/'${ftpuse}
	sed -i '$a anon_other_write_enable=YES' ${ftpetc}'vuser_conf/'${ftpuse}
	service vsftpd restart
}
installvsftpd
