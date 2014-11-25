#!/bin/bash
###该脚本是理解$*($*把所有的参数看成一个整体)和$@(不过$@把每个参数区分对待)的区别
for i in "$*"
#$*把所有参数看成一个整体，这个for只会循环一次
   do
      echo "The parameters is:$i"
   done
x=1
for y in "$@"
#$@中的每个参数都看成独立的，所以"$@"中有几个参数，就会循环几次
   do
      echo "The parameter$x is:$y"
      x=$(($x+1))
   done	
