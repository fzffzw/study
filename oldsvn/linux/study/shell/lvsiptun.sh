#!/bin/bash
###服务器配置ip tun
###lvs ip配置
function lvsipconfig()
{
	##配置第一块网卡
	###lvs 服务器只有一块网卡
	ifconfig eth0 200.168.10.1
	##停掉eth1
	ifconfig eth1 down
	##删除默认网关
	#route del default
}
##客户机ip
function realserver()
{
	##删除默认网关
        route del default
	##接收输入的ip
	read -p "请输入客户机ip" ip
	ifconfig eth0 $ip
	####以下脚本配置真实服务器的信息
	ifconfig tunl0 200.168.10.10 netmask 255.255.255.255 up
	route add -host 200.168.10.10 dev tunl0
	echo '1' >/proc/sys/net/ipv4/conf/tunl0/arp_ignore
	echo '2' >/proc/sys/net/ipv4/conf/tunl0/arp_announce
	echo '1' >/proc/sys/net/ipv4/conf/all/arp_ignore
	echo '2' >/proc/sys/net/ipv4/conf/all/arp_announce
}
###配置lvs脚本
function lvsScriptconfig()
{
	###配置一个虚拟ip
	ifconfig tunl0 200.168.10.10 netmask 255.255.255.255 up
	##路由器添加200.168.10.10 不然路由器认为它属于200.168.10.0的网段
	route add -host 200.168.10.10 dev tunl0
	ipvsadm -C
	ipvsadm -A -t 200.168.10.10:80 -s -rr
	ipvsadm -a -t 200.168.10.10:80 -r 200.168.10.2 -i
	ipvsadm -a -t 200.168.10.10:80 -r 200.168.10.3 -i
	ipvsadm 
}
##复制 scp xx.sh 200.168.10.3:/root/
if [[ "$1" eq 'lvsconfig' ]]
then
	lvsipconfig
elif [[ "$1" eq 'lvsScriptconfig']]
	lvsScriptconfig
elif [[ "$1" eq 'realserver' ]]
	realserver
fi
