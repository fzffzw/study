<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>9.4 浮动与清除 :: 第9章：浮动、定位与视觉格式化模型</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
p{
padding:0;
}
#float1 img {
float:left;
margin-right:5px;
}
#float2 img {
float:right;
margin-left:5px;
}
#float3 p {
float:left;
border:2px solid #06C;
}
#float3 p img {
display:block;
}

#float4 .sample1 {
background:#6cf;
float:left;
width:300px;
}
#float4 strong {
float:left;
height:50px;
background:#FC6;
}
#float5 {
padding:0;
border:0;
}
#float5 p {
padding:0;
margin:20px;
}
#float5 .sample1 {
background:#6cf;
float:left;
margin:20px;
}
#float5 .sample1 strong {
display:block;  /* 块级元素才具有上下边距和width属性 */
background:#FC3;
width:100px;
margin:10px;
}
.sample2 {
float:left;
width:100px;
border:2px solid #06C;
background: #CFF;
margin:0 20px;
}
.sample3 {
float:left;
border:2px solid #06C;
background: #CFF;
margin:5px;
width:100px;
}
.sample4 {
float:right;
width:100px;
border:2px solid #F60;
background: #FC6;
margin:5px;
}
.w1 {
width:200px;
}
.w2 {
width:300px;
}
.h1 {
height:40px;
}
#float12 .sample3,
#float12 .sample4 {
margin:0 5px;
}
.sample5 strong {
float:left;
background: #FCC;
border:2px solid #C6C;
width:5em;
margin:2px;
display:inline;
}
#float14 .sample5 {
margin-left: 130px;
}
-->
</style>
</head>

<body id="c_visual">
<h1>第9章：浮动、定位与视觉格式化模型</h1>
<h2>9.4 浮动与清除</h2>
<h3>9.4.1 设定浮动：float属性</h3>
<h4><a name="float">图片不浮动</a></h4>
<div>
  <p><img src="../../img/ddcat_ad2.gif" title="浮动的图片" alt="示例图片" />图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。</p>
</div>
<h4>图片左浮动</h4>
<div id="float1">
  <p><img src="../../img/ddcat_ad2.gif" title="浮动的图片" alt="示例图片" />图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。</p>
</div>
<h4>图片右浮动</h4>
<div id="float2">
  <p><img src="../../img/ddcat_ad2.gif" title="浮动的图片" alt="示例图片" />图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。图片旁边的文字。</p>
</div>
<h3><a name="format">9.4.2 浮动元素的视觉格式化内容</a></h3>
<h4>浮动框width属性为“auto”则被压缩</h4>
<div id="float3">
  <p>元素1</p>
  <p>元素2的内容元素2的内容元素2的内容</p>
  <p><img src="../../img/btn1.gif" alt="示例图片" />元素3</p>
</div>
<h4>浮动框heigth属性为“auto”则适应其内容高度</h4>
<div id="float4">
  <p class="sample1"><strong>浮动元素内的浮动子元素</strong>浮动段落的内容。</p>
  <p>段落2</p>
</div>
<h4>浮动框垂直边距不重叠</h4>
<div id="float5">
  <p class="sample1"><strong>strong1</strong></p>
  <p>段落2</p>
</div>
<h4><a name="format2">浮动框与行框</a></h4>
<div id="float6">
  <p class="sample2">段落1段落1段落1段落1</p>
  <p>段落2</p>
  <p>段落3</p>
  <p>段落4</p>
</div>
<div id="float7">
  <p>strong元素前面的文字。strong元素前面的文字。strong元素前面的文字。<strong>strong元素。</strong>strong元素后面的文字。strong元素后面的文字。</p>
  <p>strong元素前面的文字。strong元素前面的文字。strong元素前面的文字。<strong class="sample2">strong元素。</strong>strong元素后面的文字。strong元素后面的文字。</p>
</div>
<div id="float8">
  <p><strong class="sample2">strong元素。</strong>111111111111111111111111111111111111111111111111111111</p>
  <p>111111111111111111111111111111111111111111111111111111<strong class="sample2">strong元素。</strong></p>
</div>
<h4><a name="format3">多个浮动框</a></h4>
<div id="float9">
  <p class="sample3 h1">段落1段落1</p>
  <p class="sample3">段落2段落2</p>
  <p class="sample3 w1">段落3段落3</p>
  <p>段落4段落4段落4段落4段落4段落4段落4段落4段落4</p>
</div>
<div id="float10">
  <p class="sample3 h1">段落1段落1</p>
  <p class="sample3">段落2段落2</p>
  <p class="sample3 w2">段落3段落3</p>
  <p>段落4段落4段落4段落4段落4段落4段落4段落4段落4</p>
</div>
<div id="float11">
  <p class="sample4">段落1</p>
  <p class="sample4">段落2</p>
  <p>段落3段落3段落3段落3段落3段落3</p>
</div>
<div id="float12">
  <p class="sample4">段落1，右浮动</p>
  <p>段落2段落2段落2段落2段落2段落2段落2</p>
  <p class="sample3">段落3，左浮动</p>
  <p class="sample4">段落4，右浮动</p>
  <p class="sample3">段落5，左浮动</p>
  <p>段落6段落6</p>
</div>
<h4><a name="format4">包含块与浮动元素</a></h4>
<div id="float13">
  <p class="sample3">段落1</p>
  <p class="sample5"><strong>子元素1</strong><strong>子元素2</strong>段落2</p>
  <p class="sample3">段落3，左浮动</p>
  <p>段落4段落4</p>
</div>
<div id="float14">
  <p class="sample3">段落1</p>
  <p class="sample5"><strong>子元素1</strong><strong>子元素2</strong>段落2</p>
  <p class="sample3">段落3，左浮动</p>
  <p>段落4段落4</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter9" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>