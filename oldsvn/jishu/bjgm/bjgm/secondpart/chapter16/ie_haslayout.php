<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>16.2.1 hasLayout属性 :: 16.2 Windows IE :: 第16章：浏览器与Hack</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#float1 {
width:400px;
}
.sample1 {
float:left;
background:#FC6;
+display:inline;  /* 解决 IE 6 双倍边距Bug */
}
#float1 .sample1 {
width:200px;
height:60px;
}
#float2 p {
width:440px;
}
#float3 .sample1 {
margin: 0;
padding:0;
}
#float3 .sample2 {
height: 100%;
padding:0;
line-height:30px;
}
.sample3 {
position:relative;
left: 20px;
}
#float5 .sample3 {
height:100%;
}
#float6 .sample1 strong{
display:block;
height:100%;
}
.sample2 strong {
clear:left;
display:block;
}
#clear2 .sample2 {
height:100%;
}
ol {
margin:5px;
border:2px solid #FC3;
}
li {
background: #CFF;
margin:5px 5px 5px 30px;
}
#list1 li {
width:300px;
}
#list2 ol{
height:100%;
}
#list2 li {
width:300px;
float:left;
}
#list3 a {
display:block;
background:#FC3;
}
#table1 table {
background:#FFC;
border:1px solid #F90;
table-layout:fixed;
}
#table1 td {
background:#FC6;
}
#margin1 p {
margin:10px;
height:60px;
padding:0;
}
#margin1 p strong {
display:block;
background:#FC6;
margin:30px;
}
-->
</style>
</head>

<body id="c_Hack">
<h1>第16章：浏览器与Hack</h1>
<h2>16.2 Windows IE</h2>
<h3>16.2.1 hasLayout属性</h3>
<h4><a name="float1">自动扩展宽度和高度</a></h4>
<div id="float1">
  <p class="sample1">浮动的p</p>
  <p>不浮动的p</p>
</div>
<div id="float2">
  <p>width : 440px</p>
</div>
<h4><a name="float2">浮动元素旁边的元素</a></h4>
<div id="float3">
  <p class="sample1">浮动的p</p>
  <p class="sample2">不浮动的p，不浮动的p，不浮动的p，不浮动的p，不浮动的p，不浮动的p，不浮动的p，不浮动的p.</p>
</div>
<div id="float4">
  <p class="sample1">浮动的p</p>
  <p class="sample3">不浮动的p，不浮动的p，不浮动的p，不浮动的p，不浮动的p，不浮动的p，不浮动的p，不浮动的p.</p>
</div>
<div id="float5">
  <p class="sample1">浮动的p</p>
  <p class="sample3">不浮动的p，不浮动的p，不浮动的p，不浮动的p，不浮动的p，不浮动的p，不浮动的p，不浮动的p.</p>
</div>
<h4><a name="float3">未定义宽度的浮动元素</a></h4>
<div id="float6">
  <p class="sample1">浮动的p</p>
  <p class="sample1">浮动的p<strong>子元素具有Layout</strong></p>
  <p class="clearFloat"></p>
</div>
<h4><a name="clear">清除浮动</a></h4>
<div id="clear1">
  <p class="sample1">浮动的p</p>
  <p class="sample2"><strong>子元素1</strong><strong>子元素2</strong></p>
</div>
<div id="clear2">
  <p class="sample1">浮动的p</p>
  <p class="sample2"><strong>子元素1</strong><strong>子元素2</strong></p>
</div>
<h4><a name="list">列表项</a></h4>
<div id="list1">
  <ol>
    <li><a href="#">列表项1</a></li>
    <li><a href="#">列表项2</a></li>
    <li><a href="#">列表项3</a></li>	
  </ol>
</div>
<div id="list2">
  <ol>
    <li><a href="#">列表项1</a></li>
    <li><a href="#">列表项2</a></li>
    <li><a href="#">列表项3</a></li>	
  </ol>
</div>
<h4><a name="table">表格</a></h4>
<div id="table1">
<table summary="样例表格，table-layout : fixed，没有设定宽度的表格。">
  <caption>
  固定布局
  </caption>
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
</div>
<h5><a name="margin">边距重叠</a></h5>
<div id="margin1">
  <p><strong>p内的子元素。</strong></p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter16" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
