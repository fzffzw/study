<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>9.3.5 堆叠顺序：z-index属性 :: 9.3 定位 :: 第9章：浮动、定位与视觉格式化模型</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.gotoIndex {
height:auto;
}

div {
position:relative;
height:60px;
}
.sample1 {
position: absolute;
border:2px solid #F90;
top:10px;
left:10px;
}
.sample2 {
position: absolute;
border:2px solid #06C;
background: #CFF;
top:5px;
left:30px;
}
#z_index2 .sample1 {
z-index:1;
}
strong {
position:relative;
background: #FC3;
}
.sample1 strong {
color:#f00;
border:2px solid;
}
#z_index4 .sample1 strong {
z-index: 10;
}
#z_index5 .sample2 {
z-index: 1;
}
#z_index6 {
z-index:0;
}
#z_index6 .sample2 {
z-index: -1;
left: -20px;
}
#z_index7 .sample2 {
background:none;
}
-->
</style>
</head>

<body id="c_visual">
<h1>浮动、定位与视觉格式化模型</h1>
<h2>定位</h2>
<h3>z-index[层叠顺序]</h3>
<div id="z_index1">
  <p class="sample1">绝对定位的sample1</p>
  <p class="sample2">绝对定位的sample2</p>
  <p>静态的内容</p>
</div>
<div id="z_index2">
  <p class="sample1">绝对定位的sample1</p>
  <p class="sample2">绝对定位的sample2</p>
  <p>静态的内容</p>
</div>
<h4>z-index的“auto”值</h4>
<div id="z_index3">
  <p class="sample1">绝对定位的sample1<strong>sample1内的strong</strong></p>
  <p class="sample2">绝对定位的sample2<strong>sample2内的strong</strong></p>
  <p>静态的内容</p>
</div>
<div id="z_index4">
  <p class="sample1">绝对定位的sample1<strong>sample1内的strong</strong></p>
  <p class="sample2">绝对定位的sample2<strong>sample2内的strong</strong></p>
  <p>静态的内容</p>
</div>
<h4>z-index的整数值</h4>
<div id="z_index5">
  <p class="sample1">绝对定位的sample1<strong>sample1内的strong</strong></p>
  <p class="sample2">绝对定位的sample2<strong>sample2内的strong</strong></p>
  <p>静态的内容</p>
</div>
<div id="z_index6">
  <p class="sample1">绝对定位的sample1<strong>sample1内的strong</strong></p>
  <p class="sample2">绝对定位的sample2<strong>sample2内的strong</strong></p>
  <p>静态的内容</p>
</div>
<div id="z_index7">
  <p class="sample1">绝对定位的sample1<strong>sample1内的strong</strong></p>
  <p class="sample2">绝对定位的sample2<strong>sample2内的strong</strong></p>
  <p>静态的内容</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter9" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
