<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>6.7 调整与拉伸 :: 第6章：字体</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#xHeight p{
font-family: Arial, Helvetica, sans-serif;
}
.style1 {
line-height:1em;
font-size:80px;
}
#fontAspect {
font-size:12px;
}
#fontAspect p {
line-height:1.5em;
}
#fontAspect div {
background:none;
width:auto;
border:0;
}
#fontAspect h4 {
font-size:1.1em;
line-height:1.2;
}
.font1 {
font-family:Verdana;
}
.font2 {
font-family: "Times New Roman";
}
.font3 {
font-family: "Courier New";
}
.font4 {
font-family: Arial;
}
.font5 {
font-family: "宋体";
}
.font6 {
font-family: "Kunstler Script";
}
#fontAdjust p {
font:20px "Times New Roman", serif;
font-size-adjust: 0.8;
}
.font7 strong{
font-stretch: wider;
}
-->
</style>
</head>

<body id="c_font">
<h1>第6章：字体</h1>
<h2>6.7 调整与拉伸</h2>
<h3>6.7.1 字体调整：font-size-adjust属性</h3>
<div id="xHeight">
  <h4><a name="xHeight">x-height</a></h4>
  <p class="style1">A e f g x</p>
</div>
<div id="fontAspect">
  <h4><a name="fontFamily">不同字体的易读性</a></h4>
  <div class="font1">
    <h4>Verdana</h4>
    <p>The font size corresponds to the em square, a concept used in typography. Note that certain glyphs may bleed outside their em squares. </p>
  </div>
  <div class="font2">
    <h4>Times New Roman</h4>
    <p>The font size corresponds to the em square, a concept used in typography. Note that certain glyphs may bleed outside their em squares. </p>
  </div>
  <div class="font3">
    <h4>Courier New</h4>
    <p>The font size corresponds to the em square, a concept used in typography. Note that certain glyphs may bleed outside their em squares. </p>
  </div>
  <div class="font4">
    <h4>Arial</h4>
    <p>The font size corresponds to the em square, a concept used in typography. Note that certain glyphs may bleed outside their em squares. </p>
  </div>
  <div class="font5">
    <h4>宋体</h4>
    <p>The font size corresponds to the em square, a concept used in typography. Note that certain glyphs may bleed outside their em squares. </p>
  </div>
  <div class="font6">
    <h4>Kunstler Script</h4>
    <p>The font size corresponds to the em square, a concept used in typography. Note that certain glyphs may bleed outside their em squares. </p>
  </div>
</div>
<div id="fontAdjust">
  <p>The font size corresponds to the em square, a concept used in typography.</p>
</div>
<h3><a name="fontStretch">6.7.2 字体伸展：font-stretch属性</a></h3>
<div>
  <p class="font7"><strong>font-stretch</strong>属性</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter6" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
