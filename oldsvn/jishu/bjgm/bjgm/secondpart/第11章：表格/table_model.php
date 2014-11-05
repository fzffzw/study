<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>11.2 CSS的表格模型 :: 第11章：表格</title>
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
#sample2 {
display:table;
}
#sample2 ul {
display:table-row;
}
#sample2 li {
display:table-cell;
border: 1px dotted #fff;
}
#sample3 {
float:left;
width:auto;
background:#9CF;
}
#sample3 table {
margin:20px;
background:#FF9;
}
#sample3 caption {
margin: 15px;
background: #39F;
}
#sample4 caption {
text-align:right;
caption-side:bottom;
margin:5px 0;
background: #39F;
}
#sample6 {
background: #FF9;
border: solid black 1px;
empty-cells: hide;
}
#sample6 .row1 {
background: #FC3;
}
#sample6 .row2 {
background: #9CF;
}
#sample6 td {
border: solid black 1px;
}
-->
</style>
</head>
<body id="c_table">
<h1>第11章：表格</h1>
<h2>11.2 CSS的表格模型</h2>
<h3>11.2.1 表格模型概述</h3>
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
</table>
<h3><a name="display">11.2.2 display属性</a></h3>
<div id="sample2">
  <ul>
    <li>第1项</li>
    <li>第2项</li>
    <li>第3项</li>
  </ul>
</div>
<h3><a name="anonymous">11.2.3匿名表格对象</a></h3>
<table summary="样例表格，匿名表格对象">
  <td>姓名：</td>
  <td><input type="text" id="name" maxlength="20" /></td>
</table>
<h2>11.3 表格的视觉格式化</h2>
<h3><a name="box">匿名框、标题框与表格框</a></h3>
<div id="sample3">
<table summary="样例表格，匿名表格对象、表格标题和表格的关系。">
  <caption>
  标题caption
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
</table>
</div>
<h3><a name="caption">11.3.2 标题&lt;caption&gt;的定位 ：caption-side属性</a></h3>
<table summary="样例表格，演示标题的定位。" id="sample4">
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
  <caption>
  标题caption
  </caption>
</table>
<h3><a name="content">11.3.3 表格内容的视觉布局</a></h3>
<table summary="样例表格，表格内元素与栅格。" id="sample5">
  <tr>
    <td>1</td>
	<td rowspan="2">2</td>
	<td>3</td>
	<td>4</td>
  </tr>
  <tr>
    <td colspan="2">5 </td>
  </tr>
</table>
<h3><a name="transparent">11.3.4 表格的层和透明性</a></h3>
<table summary="样例表格，表格的层和透明性。" id="sample6">
  <tr class="row1">
    <td>1</td>
    <td rowspan="2"> 2</td>
    <td>3</td> 
    <td>4</td>
  </tr>
  <tr class="row2">
    <td>5</td>
    <td></td>
  </tr>
</table>
<div class="gotoIndex"><a href="../../index.html#chapter11" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
