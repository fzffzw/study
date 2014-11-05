#!/bin/bash
# Name mysqldump.sh
# Backup export_wms and import_wms
#
backupdir=/var/mysql/backup/sql
time=`date +%Y%m%d%H`
/opt/mysql/bin/mysqldump --defaults-file=/var/mysql/3306/my.cnf -u root -pcargo#2536 export_wms > $backupdir/export_wms$time.sql
/opt/mysql/bin/mysqldump --defaults-file=/var/mysql/3308/my.cnf -u root -pjinkou#2536 import_wms > $backupdir/import_wms$time.sql
#
find $backupdir -name "*.sql" -type f -mtime +7 -exec rm {} \;
