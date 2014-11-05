#!/bin/bash
dos2unix /var/www/CFF/cff
a=$(awk '{print NR}' /var/www/CFF/cff | wc -l)
for((i=1;i<=$a;i++))
do
str=""$i"p"
b=`sed -n $str /var/www/CFF/cff`
n=$(echo $b|awk -F " " '{print $2}')
m=$(echo $b|awk -F " " '{print $1}')
#svn --help
/usr/bin/svn up -r $n http://192.168.1.16/svn/CFF$m /var/www/CFF/CFF$m --username lmhuang --password lm3366sz
RSYNCACCOUNT=sfc@rsync
PASSWDFILE=/etc/rsyncd/rsync.pass
RSYNC=/usr/bin/rsync
for r in "192.168.1.13"
do
$RSYNC -vuIzrtopg  /var/www/CFF/CFF$m "$RSYNCACCOUNT"@$r::CFF-code$m --password-file=$PASSWDFILE
done
done
