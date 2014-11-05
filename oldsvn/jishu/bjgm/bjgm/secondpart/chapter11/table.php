<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>11.1表格的标签与属性 :: 第11章：表格</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
h3,
h4 {
clear:both;
border-bottom:1px dashed;
}
table {
text-align:left;
width:300px;
border:1px solid #06C;
margin-bottom:5px;
}
th,
td {
border:1px dotted #3CF;
}
.style1 {
background:#CFC;
}
.style2 {
background: #FF9;
}
-->
</style>
</head>
<body id="c_table">
<h1>第11章：表格</h1>
<h2>11.1表格的标签与属性</h2>
<h3><a name="table1">11.1.1 标签概览</a></h3>
<table summary="样例表格，标示表格组成部分，本表格为4行3列表格。" id="sample1">
  <caption>
  样例表格
  </caption>
  <tr>
    <th scope="col">编号</th>
    <th scope="col">姓名</th>
    <th scope="col">年龄</th>
  </tr>
  <tr>
    <td>1</td>
    <td>张三</td>
    <td>15</td>
  </tr>
  <tr>
    <td>2</td>
    <td>李四</td>
    <td>16</td>
  </tr>
  <tr>
    <td>3</td>
    <td>王五</td>
    <td>14</td>
  </tr>
</table>
<table summary="样例表格2，列组和列。" id="sample2">
  <caption>
  样例表格2：列组和列
  </caption>
  <colgroup span="2" class="style1" />
  <colgroup>
	<col span="2" class="style2" />
	<col />
  </colgroup> 
  <tr>
    <th scope="col">编号</th>
    <th scope="col">姓名</th>
    <th scope="col">年龄</th>
    <th scope="col">籍贯</th>
    <th scope="col">性别</th>
  </tr>
  <tr>
    <td>1</td>
    <td>张三</td>
    <td>15</td>
    <td>山东</td>
    <td>男</td>
  </tr>
  <tr>
    <td>2</td>
    <td>李四</td>
    <td>16</td>
    <td>山东</td>
    <td>女</td>
  </tr>
</table>
<h3><a name="table2">11.1.2 (X)HTML属性</a></h3>
<table summary="样例表格3，rowspan属性。" id="sample3">
  <caption>
    样例表格3：rowspan属性
  </caption>
  <tr>
    <th scope="row">属性</th>
    <th scope="col">float</th>
    <th scope="col">text-aling</th>
  </tr>
  <tr>
    <th scope="col" rowspan="4">值</th>
    <td>left</td>
    <td>left</td>
  </tr>
  <tr>
    <td>right</td>
    <td>center</td>
  </tr>
  <tr>
    <td>none</td>
    <td>right</td>
  </tr>
  <tr>
    <td> </td>
	<td>justify</td>
  </tr>
</table>
<table summary="样例表格4，colspan属性。" id="sample4">
  <caption>
    样例表格4：colspan属性
  </caption>
  <tr>
    <th scope="col">属性</th>
    <th scope="col" colspan="4">值</th>
  </tr>
  <tr>
    <th scope="col">float</th>
    <td>left</td>
    <td>right</td>
    <td>none</td>
    <td> </td>
  </tr>
  <tr>
    <th scope="col">text-aling</th>
    <td>left</td>
    <td>center</td>
    <td>right</td>
	<td>justify</td>
  </tr>
</table>
<table summary="样例表格，abbr属性。" id="sample5">
  <caption>
  样例表格5：abbr属性
  </caption>
  <tr>
    <th scope="col">日期</th>
    <th scope="col">数量</th>
    <th scope="col">价格</th>
  </tr>
  <tr>
    <td abbr="200801">2008年1月</td>
    <td>1000</td>
    <td>1500</td>
  </tr>
  <tr>
    <td abbr="200802">2008年2月</td>
    <td>2000</td>
    <td>3000</td>
  </tr>
</table>
<table summary="样例表格，abbr属性。" id="sample6">
  <caption>
  样例表格6：headers属性
  </caption>
  <tr>
    <th rowspan="2" scope="col">日期</th>
    <th colspan="2" scope="col" id="cn">国内</th>
    <th colspan="2" scope="col" id="int">国际</th>
  </tr>
  <tr>
    <th scope="col" id="cn_type">类型</th>
    <th scope="col" id="cn_amount">数量</th>
    <th scope="col" id="int_type">类型</th>
    <th scope="col" id="int_amount">数量</th>
  </tr>
  <tr>
    <td abbr="200801" id="y200801">2008年1月</td>
    <td headers="cn cn_type y200801">手提包</td>
    <td headers="cn cn_amount y200801">1500</td>
    <td headers="int int_type y200801">手提包</td>
    <td headers="int int_amount y200801">1500</td>
  </tr>
  <tr>
    <td abbr="200802" id="y200802">2008年2月</td>
    <td headers="cn cn_type y200802">旅行箱</td>
    <td headers="cn cn_amount y200802">1000</td>
    <td headers="int int_type y200802">旅行箱</td>
    <td headers="int int_amount y200802">2500</td>
  </tr>
</table>
<div class="gotoIndex"><a href="../../index.html#chapter11" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
