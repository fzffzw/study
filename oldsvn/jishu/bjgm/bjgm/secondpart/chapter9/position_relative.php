<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>9.3.3 相对定位 :: 9.3 定位 :: 第9章：浮动、定位与视觉格式化模型</title>
<style type="text/css">
<!--
* {
padding:0;
margin:0;
}
body {
padding:20px;
font: small/2em "宋体", serif;
background:#FFF;
}
.gotoIndex {
width:auto;
margin-top:30px;
background:#ccc;
font-size:12px;
text-align:center;
padding:4px;
}
h1,
h2,
h3 {
font-size:1em;
line-height: 2em;
text-align:center;
}

/* 以下是正式示例代码 */

div {
width:400px;
background: #6C3;
margin-bottom:5px;
padding:10px;
}
.sample1 {
background:#ff9;
border:2px solid #fc3;
height:30px;
}
#position1 .sample1 {
position:relative;
right:15px;
bottom:15px;
}
.sample2 {
background:#fc3;
position:relative;
}
#position2 .sample2 {
right:20px;
}
#position3 p {
background:#fc3;
position:relative;
right:20px;
left: 30px;
}
#position4 p {
background:#fc3;
position:relative;
top: 20px;
bottom: 40px;
}

-->
</style>
</head>

<body id="c_visual">
<h1>第9章：浮动、定位与视觉格式化模型</h1>
<h2>9.3 定位</h2>
<h3>9.3.3 相对定位</h3>
<div>
  <p class="sample1">段落1中的文字</p>
  <p>段落2中的文字</p>
</div>
<div id="position1">
  <p class="sample1">段落1中的文字</p>
  <p>段落2中的文字</p>
</div>
<h3>水平方向</h3>
<div>
  <p class="sample2">left为auto，则left = -right</p>
</div>
<div id="position2">
  <p class="sample2">left为auto，则left = -right</p>
</div>
<div id="position3">
  <p>left: 30px, right强制为-30px</p>
</div>
<h3>垂直方向</h3>
<div id="position4">
  <p>top: 20px, bottom强制为-20px</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter9" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
