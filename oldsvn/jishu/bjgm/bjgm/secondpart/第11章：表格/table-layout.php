<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>11.3.5 table-layout属性 :: 11.3 CSS的表格模型 :: 第11章：表格</title>
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
background: #FC6;
margin-bottom:5px;
}
td {
background:#FF9;
padding:0;
}
#fixed1 {
width:300px;
table-layout:fixed;
}
.col1 {
width:120px;
}
.cell1 {
width:30px;
}
.cell2 {
width:50px;
}
#fixed2 {
width:200px;
table-layout:fixed;
}
#fixed3 {
table-layout:auto;
}
.col2 {
width:30px;
}
.cell3 {
width:100px;
}
.cell4 {
width:40px;
}
.wrap {
width: 500px;
}
#auto3 {
width: 90%;
}
#auto4 {
width:50px;
}
.col3 {
width:20%;
}
#height1 {
width:300px;
height:100px;
}
.row1 {
height:30px;
}
-->
</style>
</head>
<body id="c_table">
<h1>第11章：表格</h1>
<h2>11.3 CSS的表格模型</h2>
<h3>11.3.5 表格宽度算法：table-layout属性</h3>
<h4><a name="fixed">固定布局算法 table-layout : fixed</a></h4>
<table summary="样例表格，table-layout : fixed，列宽的计算。" id="fixed1">
  <caption>
  固定布局算法1
  </caption>
  <col class="col1" />
  <tr>
    <td>1-1</td>
    <td>1-2</td>
    <td>1-3</td>
    <td class="cell1">1-4</td>
  </tr>
  <tr>
    <td colspan="2">2-1</td>
    <td class="cell2">2-2</td>
    <td>2-3</td>
  </tr>
</table>
<table summary="样例表格，table-layout : fixed，列宽总合大于表格宽度。" id="fixed2">
  <caption>
  固定布局算法2
  </caption>
  <col class="col1" />
  <col class="col1" />
  <tr>
    <td>1-1</td>
    <td>1-2</td>
    <td>1-3</td>
  </tr>
  <tr>
    <td>2-1</td>
    <td>2-2</td>
    <td>2-3</td>
  </tr>
</table>
<h4><a name="auto">自动表格布局 table-layout : auto</a></h4>
<table summary="样例表格，table-layout : auto，列宽的计算。" id="auto1">
  <caption>
  自动布局算法1
  </caption>
  <col class="col2" />
  <tr>
    <td>行1列1</td>
    <td>行1列2</td>
    <td>行1列3</td>
    <td class="cell1">行1列4</td>
    <td>行1列5</td>
  </tr>
  <tr>
    <td colspan="2" class="cell3">行2列1</td>
    <td>行2列3，内容</td>
    <td class="cell2">行2列4</td>
    <td class="cell4">行2列5<img src="../../img/ddcat_ad.gif" alt="样例" width="180" height="60" /></td>
  </tr>
</table>
<h4>百分比宽度</h4>
<div class="wrap">
<table summary="样例表格，table-layout : auto，列宽的计算。" id="auto2">
  <caption>
  表格width:auto
  </caption>
  <col class="col3" />
  <tr>
    <td>行1列1</td>
    <td>行1列2</td>
    <td>行1列3，内容</td>
    <td>行1列4</td>
    <td class="cell3">行1列5</td>
  </tr>
  <tr>
    <td colspan="2">行2列1</td>
    <td>行2列3</td>
    <td>行2列4</td>
    <td>行2列5</td>
  </tr>
</table>
</div>
<div class="wrap">
<table summary="样例表格，table-layout : auto，列宽的计算。" id="auto3">
  <caption>
  表格width:90%
  </caption>
  <col class="col3" />
  <tr>
    <td>行1列1</td>
    <td>行1列2</td>
    <td>行1列3，内容</td>
    <td>行1列4</td>
    <td class="cell3">行1列5</td>
  </tr>
  <tr>
    <td colspan="2">行2列1</td>
    <td>行2列3</td>
    <td>行2列4</td>
    <td>行2列5</td>
  </tr>
</table>
</div>
<div class="wrap">
<table summary="样例表格，table-layout : auto，列宽的计算。" id="auto4">
  <caption>
  表格width:50px
  </caption>
  <col class="col3" />
  <tr>
    <td>行1列1</td>
    <td>行1列2</td>
    <td>行1列3，内容</td>
    <td>行1列4</td>
    <td class="cell3">行1列5</td>
  </tr>
  <tr>
    <td colspan="2">行2列1</td>
    <td>行2列3</td>
    <td>行2列4</td>
    <td>行2列5</td>
  </tr>
</table>
</div>
<h3><a name="height">11.3.6 表格高度</a></h3>
<table summary="样例表格，表格高度的计算。" id="height1">
  <caption>
  表格高度
  </caption>
  <tr class="row1">
    <td>行1列1，内容内容内容内容</td>
    <td>行1列2</td>
    <td>行1列3</td>
  </tr>
  <tr>
    <td>行2列1</td>
    <td>行2列2</td>
    <td>行2列3</td>
  </tr>
</table>
<div class="gotoIndex"><a href="../../index.html#chapter11" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
