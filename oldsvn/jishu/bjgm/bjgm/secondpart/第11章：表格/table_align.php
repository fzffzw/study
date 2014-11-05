<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>11.3.7 单元格内容的对齐 :: 11.3 CSS的表格模型 :: 第11章：表格</title>
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
.sample1 {
line-height:2;
font-size:12px;
}
.sample1 td {
width:60px;
}
.sample1 td span {
display:block;
background: #CF6;
}
.a1_r1c1,
.a1_r1c3 {
vertical-align: baseline;
}
#align2 .a1_r1c3 img {
vertical-align:top;
}
.a1_r1c2 {
vertical-align: baseline;
font-size:20px;
}
.a1_r1c4 {
vertical-align: top;
}
.a1_r1c5 {
vertical-align: middle;
}
.a1_r1c6 {
vertical-align: bottom;
}
#align3 .a1_r1c3 img {
vertical-align:top;
}
#align3 td {
height:160px;
}
-->
</style>
</head>
<body id="c_table">
<h1>第11章：表格</h1>
<h2>11.3 CSS的表格模型</h2>
<h3>11.3.7 单元格内容的对齐</h3>
<table summary="样例表格，表格的垂直对齐" id="align1" class="sample1">
  <caption>
  表格单元格的基线与行的基线
  </caption>
  <tr>
    <td class="a1_r1c1">baseline, 行高12px*2=24px</td>
    <td class="a1_r1c2">baseline, 行高20px*2=40px</td>
    <td class="a1_r1c3"><img src="../../img/ddcat_ad2.gif" alt="样例" width="60" height="60" /></td>
    <td class="a1_r1c4"><span>垂直对齐, top</span></td>
    <td class="a1_r1c5"><span>垂直对齐, bottom</span></td>
    <td class="a1_r1c6"><span>垂直对齐, middle</span></td>
  </tr>
</table>
<table summary="样例表格，表格的垂直对齐" id="align2" class="sample1">
  <caption>
  改变图片的对齐方式
  </caption>
  <tr>
    <td class="a1_r1c1">baseline, 行高12px*2=24px</td>
    <td class="a1_r1c2">baseline, 行高20px*2=40px</td>
    <td class="a1_r1c3"><img src="../../img/ddcat_ad2.gif" alt="样例" width="60" height="60" /></td>
    <td class="a1_r1c4"><span>垂直对齐, top</span></td>
    <td class="a1_r1c5"><span>垂直对齐, bottom</span></td>
    <td class="a1_r1c6"><span>垂直对齐, middle</span></td>
  </tr>
</table>
<table summary="样例表格，表格的垂直对齐" id="align3" class="sample1">
  <caption>
  加大单元格高度
  </caption>
  <tr>
    <td class="a1_r1c1">baseline, 行高12px*2=24px</td>
    <td class="a1_r1c2">baseline, 行高20px*2=40px</td>
    <td class="a1_r1c3"><img src="../../img/ddcat_ad2.gif" alt="样例" width="60" height="60" /></td>
    <td class="a1_r1c4"><span>垂直对齐, top</span></td>
    <td class="a1_r1c5"><span>垂直对齐, bottom</span></td>
    <td class="a1_r1c6"><span>垂直对齐, middle</span></td>
  </tr>
</table>
<div class="gotoIndex"><a href="../../index.html#chapter11" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
