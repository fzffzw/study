<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>11.4 单元格边框：border-collapse属性 :: 第11章：表格</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
h3,
h4 {
clear:both;
border-bottom:1px dashed;
}
table {
line-height:1.5em;
text-align:left;
margin-bottom:5px;
}
td {
background:#FF9;
padding:0;
}
.sample1 {
width:300px;
line-height:2;
border:2px solid #F60;
}
.sample1 td {
border: 2px solid #39F;
}
#border2 {
border-collapse: collapse;
}
#border3 {
width:240px;
padding:10px;
background: #FC3;
border:5px solid #930;
border-spacing:10px;
}
#border3 td{
height:50px;
border:5px solid #6CF;
}
#border4 {
border:2px solid #F90;
background: #CFC;
}
#border4 td{
background:transparent;
border:3px solid #06F;
height:30px;
width:100px;
}
#border4 .spl1 {
background: #F9C;
}
#border4 .spl2 {
empty-cells:hide;
}
.spl3 {
display:none;
}
.sample2 {
border-collapse:collapse;
width:340px;
margin:20px;
}
.sample2 td{
border-style:solid;
border-width:10px;
border-color:#06F #390 #939 #C90;
padding:15px;
}
#border6 td,
#border7 td {
border-width: 10px 16px 16px 10px;
}
#border7 {
border-style:hidden;
}
-->
</style>
</head>
<body id="c_table">
<h1>第11章：表格</h1>
<h2>11.4 单元格边框：border-collapse属性</h2>
<h3>11.4.1 分离的边框模型</h3>
<h4>border-collapse属性</h4>
<table summary="样例表格，表格元素的边框与单元格的边框" id="border1" class="sample1">
  <caption>
  border-collapse : separate
  </caption>
  <tr>
    <td>行1列1</td>
    <td>行1列2</td>
    <td>行1列3</td>
  </tr>
  <tr>
    <td>行2列1</td>
    <td>行2列2</td>
    <td>行2列3</td>
  </tr>
</table>
<table summary="样例表格，表格元素的边框与单元格的边框" id="border2" class="sample1">
  <caption>
  border-collapse : collapse;
  </caption>
  <tr>
    <td>行1列1</td>
    <td>行1列2</td>
    <td>行1列3</td>
  </tr>
  <tr>
    <td>行2列1</td>
    <td>行2列2</td>
    <td>行2列3</td>
  </tr>
</table>
<h3><a name="separate">分离的边框模型，border-collapse : separate</a></h3>
<h4><a name="spacing">单元格的间隙：border-spacing属性</a></h4>
<table summary="样例表格，分离的边框模型，border-collapse : separate，表格的宽度" id="border3">
  <caption>
  表格的宽度
  </caption>
  <tr>
    <td>行1列1</td>
    <td>行1列2</td>
  </tr>
  <tr>
    <td>行2列1</td>
    <td>行2列2</td>
  </tr>
</table>
<h4><a name="emptyCells">空单元格的边框和背景：empty-cells属性</a></h4>
<table summary="样例表格，分离的边框模型，empty-cells属性" id="border4">
  <caption>
  empty-cells属性
  </caption>
  <tr>
    <td>行1列1</td>
    <td>&nbsp;</td>  <!-- &nbsp;表示半角空格 -->
  </tr>
  <tr class="spl1">
    <td></td>
    <td class="spl2">  </td>  <!--空格将被压缩，因此此单元格为空 -->
  </tr>
  <tr>
    <td class="spl2"></td>
    <td class="spl2"></td>
  </tr>
  <tr class="spl3">
    <td></td>
    <td></td>
  </tr>
</table>
<h3><a name="collapse">11.4.2 重合的边框模型，border-collapse : collapse</a></h3>
<table summary="样例表格，重合的边框模型，边框重合原理" id="border5" class="sample2">
  <caption>
  边框颜色不同
  </caption>
  <tr>
    <td>行1列1</td>
    <td>行1列2，内容</td>
    <td>行1列3</td>
  </tr>
  <tr>
    <td>行2列1</td>
    <td class="spl4">行2列2</td>
    <td>行2列3</td>
  </tr>
</table>
<table summary="样例表格，重合的边框模型" id="border6" class="sample2">
  <caption>
  边框宽度不同
  </caption>
  <tr>
    <td>行1列1</td>
    <td>行1列2，内容</td>
    <td>行1列3</td>
  </tr>
  <tr>
    <td>行2列1</td>
    <td class="spl4">行2列2</td>
    <td>行2列3</td>
  </tr>
</table>
<table summary="样例表格，重合的边框模型" id="border7" class="sample2">
  <caption>
  border-style:hidden
  </caption>
  <tr>
    <td>行1列1</td>
    <td>行1列2，内容</td>
    <td>行1列3</td>
  </tr>
  <tr>
    <td>行2列1</td>
    <td class="spl4">行2列2</td>
    <td>行2列3</td>
  </tr>
</table>
<div class="gotoIndex"><a href="../../index.html#chapter11" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
