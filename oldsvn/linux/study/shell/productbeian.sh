#!/bin/bash
##检查订单
num=`ps aux | grep  '/home/apache/www/import/wms/auto/productbeian.php' | grep -v grep | wc -l`
#echo $num
if [[ $num -gt 0 ]];then
	#echo '大于0'
	#exit 0
	numstring='num 为'+$num+"大于0"
else
	##删除锁定文件
	#echo '小于0';
	lockfile='/home/apache/www/import/wms/data/log/productbeian.lock'
		if [[ ! -f "$lockfile" ]];then
			#echo '不存在'
			/opt/php/bin/php /home/apache/www/import/wms/auto/productbeian.php >> /home/apache/www/import/wms/data/log/productbeian.log
		else
			#echo '存在锁'
			##存在，删除文件，执行程序
			rm -f $lockfile
			/opt/php/bin/php /home/apache/www/import/wms/auto/productbeian.php >> /home/apache/www/import/wms/data/log/productbeian.log
		fi
fi
exit 0
