#!/bin/bash
#Function export user privileges

#!/bin/bash
#Function export user privileges
sock=/linxun/mysqldata/mysql.sock
expgrants()
{
  mysql -B -u'root' -S $sock -N $@ -e "SELECT CONCAT(
    'SHOW GRANTS FOR ''', user, '''@''', host, ''';'
    ) AS query FROM mysql.user" | \
  mysql -u'root' -S $sock $@ | \
  sed 's/\(GRANT .*\)/\1;/;s/^\(Grants for .*\)/-- \1 /;/--/{x;p;x;}'
}
expgrants > ./grants.sql