#!/bin/bash
function checkorder()
{
        for ((i=0; i<=9; i++))
        do
                {
                        lockfile='/var/www/html/import/wms/data/log/shipBatchSubmitCheck.lock'
                        lockfile=${lockfile}${i}
                        logfile='/home/william/logs/shipbatchorderCheck'
                        logfile=${logfile}${i}'.log'
                        #echo $lockfile;
                        baskfile='/var/www/html/import/wms/auto/shipBatchSubmitCheck.php';
                        file=${baskfile}" "${i}
                        #echo $file
                        if [[ ! -f "$lockfile" ]];then
                        #echo '不存在'
                        /usr/bin/php /var/www/html/import/wms/auto/shipBatchSubmitCheck.php $i >> $logfile &
                        else
                        ##此处锁定如何处理
                        ##存在lockfile
                        numpid=`ps aux | grep "$file" | grep -v grep | wc -l`
                                if [ "$numpid" -eq 0 ];then
                                        rm -f $lockfile
                                        /usr/bin/php /var/www/html/import/wms/auto/shipBatchSubmitCheck.php $i >> $logfile &
                                fi
                        elstring='how to do this'
                        fi
                }&
        done

}

##检查订单
num=`ps aux | grep  '/var/www/html/import/wms/auto/shipBatchSubmitCheck.php' | grep -v grep | wc -l`
##多进程
if [ "$num" -eq 0 ]; then
        checkorder
elif [ "$num" -gt 0 ] && [ "$num" -lt 10 ]; then
        checkorder
else
        exit 0
fi
exit 0
