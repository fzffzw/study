<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>9.3.6 IE中的position :: 9.3 定位 :: 第9章：浮动、定位与视觉格式化模型</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
font: small/2em "宋体", serif;
}
div {
position:relative;
width:300px;
}
p{
padding:0;
margin:0;
}
#wrap1,
#wrap1-2 {
text-align:left;
}
#wrap2,
#wrap2-2 {
text-align:center;
}
#wrap3,
#wrap3-2 {
text-align:right;
}
.sample1 {
position: relative;
width:150px;
border:2px solid #06C;
background: #CFF;
}
.sample2 {
position: absolute;
width:150px;
border:2px solid #F60;
background: #FC6;
}
#wrap1-2 .sample1,
#wrap2-2 .sample1,
#wrap3-2 .sample1,
#wrap1-2 .sample2,
#wrap2-2 .sample2,
#wrap3-2 .sample2{
left:30px;
}

/* IE 6的问题*/
#ie6-1,
#ie6-2 {
width:auto;
background:#6C3;
border:10px solid #060;
position:relative;
margin:20px;
padding:10px;
}
.sample3 {
border:2px solid #09F;
background:#CFF;
height:30px;
position: absolute;
top:20px;
left:30px;
}
#ie6-2 {
height: 50px;
}

-->
</style>
</head>

<body id="c_visual">
<h1>第9章：浮动、定位与视觉格式化模型</h1>
<h2>9.3 定位</h2>
<h3>9.3.6 IE中的position</h3>
<h4>position与text-align</h4>
<h5>偏移量为auto</h5>
<h6>div { text-align : left; }</h6>
<div id="wrap1">
  <p>普通段落</p>
  <p class="sample1">相对定位</p>
  <p class="sample2">绝对定位</p>
  <p>普通段落</p> 
</div>
<h6>div { text-align : center; }</h6>
<div id="wrap2">
  <p>普通段落</p>
  <p class="sample1">相对定位</p>
  <p class="sample2">绝对定位</p>
  <p>普通段落</p> 
</div>
<h6>div { text-align : right; }</h6>
<div id="wrap3">
  <p>普通段落</p>
  <p class="sample1">相对定位</p>
  <p class="sample2">绝对定位</p>
  <p>普通段落</p> 
</div>
<h5>left : 30px;</h5>
<h6>div { text-align : left; }</h6>
<div id="wrap1-2">
  <p>普通段落</p>
  <p class="sample1">相对定位</p>
  <p class="sample2">绝对定位</p>
  <p>普通段落</p> 
</div>
<h6>div { text-align : center; }</h6>
<div id="wrap2-2">
  <p>普通段落</p>
  <p class="sample1">相对定位</p>
  <p class="sample2">绝对定位</p>
  <p>普通段落</p> 
</div>
<h6>div { text-align : right; }</h6>
<div id="wrap3-2">
  <p>普通段落</p>
  <p class="sample1">相对定位</p>
  <p class="sample2">绝对定位</p>
  <p>普通段落</p> 
</div>
<h4>IE 6的问题</h4>
<div id="ie6-1">
  <p class="sample3">绝对定位的sample1</p>
  <p>普通段落文字</p>
</div>
<div id="ie6-2">
  <p class="sample3">绝对定位的sample1</p>
  <p>普通段落文字</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter9" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
