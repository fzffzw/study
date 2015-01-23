#!/bin/bash
#lvs.sh
echo "1" > /proc/sys/net/ipv4/ip_forward
ifconfig eth0 8.8.8.8 netmask 255.255.255.0
ifconfig eth1 192.168.10.1 netmask 255.255.255.0
route add default gw 192.168.10.1
ipvsadm -C
ipvsadm -At 8.8.8.8:80 -s rr
ipvsadm -at 8.8.8.8:80 -r 192.168.10.2:80 -m
ipvsadm -at 8.8.8.8:80 -r 192.168.10.3:80 -m
ipvsadm -L -n

