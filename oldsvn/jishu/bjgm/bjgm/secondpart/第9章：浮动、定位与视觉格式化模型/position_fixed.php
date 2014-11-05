<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>固定定位 :: 9.3.4 绝对定位 :: 9.3 定位 :: 第9章：浮动、定位与视觉格式化模型</title>
<style type="text/css">
<!--
* {
padding:0;
margin:0;
}
body {
font: small/2em "宋体", serif;
background:#FFF;
}
.gotoIndex {
width:auto;
margin-top:30px;
background:#ccc;
font-size:12px;
border:none;
text-align:center;
padding:4px;
}
h1,
h2,
h3 {
font-size:1em;
line-height:2em;
text-align:center;
border-bottom:1px dotted #999;
}

/* 以下是正式示例代码 */
#position1 {
width:770px;
background:#6C3;
margin:10px auto;
padding:10px;
border:3px solid #060;
}
.sample1 {
background:#ff9;
border:2px solid #fc3;
height:30px;
position: fixed;
top:10px;
left:10px;
}
-->
</style>
<!--[if lte IE 6]>
<style type="text/css">
html{
overflow-y:hidden; /* sample1的绝对位置是相对于HTML元素来说，滚动条是body元素的 */
}
body {
height:100%;
overflow:auto;
}
.sample1 {
position:absolute;
top: 20px;
left: 20px;
}
</style>
<![endif]-->
</head>

<body id="c_visual">
<h1>浮动、定位与视觉格式化模型</h1>
<h2>定位</h2>
<h3>固定定位</h3>
<div id="position1">
  <p class="sample1">固定定位的sample1</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
  <p>静态的内容</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter9" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
