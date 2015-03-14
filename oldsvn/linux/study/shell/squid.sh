#!/bin/bash
function squidinstall()
{
	#安装squid软件包
	yum -y install squid*
	yum -y install squid
	#squid 配置文件修改
	/etc/squid/squid.conf
	#启动squid服务
	service squid start
	#重新加载配置文件
	squid -k reconfig
}
squidinstall
