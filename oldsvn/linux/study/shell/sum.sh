#!/bin/bash
#加法计算器
num1=$1
num2=$2
##运算必须在$()之中
sum=$(( $num1 + $num2 ))
echo "sum is:$sum"
echo $*
echo $#
echo $@
