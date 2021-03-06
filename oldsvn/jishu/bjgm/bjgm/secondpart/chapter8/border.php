<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>8.8 边框：border属性 :: 第8章：框模型</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
p {
padding:0;
}
#borderColor .color1{
border-color: transparent;
border-width: 5px;
border-style: solid;
}
#borderColor .color1 em {
background: #FC6;
display: block;
}

#borderStyle {
font-size:small;
}
#borderStyle p {
border-width:10px;
line-height:30px;
}
.style1 {
border-style: dotted;
}
.style2 {
border-style: dashed;
}
.style3 {
border-style: solid;
}
.style4 {
border-style: double;
}
.style5 {
border-style: groove;
}
.style6 {
border-style: ridge;
}
.style7 {
border-style: inset;
}
.style8 {
border-style: outset;
}
#border2 p strong {
border: 2px solid #F90;
line-height:4em;
}
#border2 p span {
border: 2px solid #F90;
padding: 5px;
margin:5px;
}
#border2 p img {
border: 2px dashed #39F;
}
#border3 a {
text-decoration:none;  /* 去除文字链接默认的下划线 */
}
.link1 {
border-bottom: 1px dotted;
}
.link2 {
border-bottom: 2px solid;
}
.link3 {
border-bottom: 3px double;
}
.link4 {
border-bottom:1px solid #f00;
}
.link5 {
padding:3px;
background:#ccc;
border: 2px outset #ccc;
}
.link5:hover {
border-style:inset;  /* 鼠标指向时的效果 */
}
-->
</style>
</head>

<body id="c_box">
<h1>第8章：框模型</h1>
<h2>8.8 边框：border属性</h2>
<h3><a name="color">8.8.1 边框颜色</a></h3>
<div id="borderColor">
  <p>没有边框的p</p>
  <p class="color1"><em>边框颜色为透明，5px宽。</em></p>
</div>
<h3><a name="style">8.8.3 边框样式</a></h3>
<div id="borderStyle">
  <p class="style1">dotted：边框是一系列的点。</p>
  <p class="style2">dashed：边框是一系列的短线条的段。</p>
  <p class="style3">solid：边框是一条单一的线。</p>
  <p class="style4">double：边框有两条实线。</p>
  <p class="style5">groove：边框看上去好象是雕刻在画布之内。</p>
  <p class="style6">ridge：边框看上去好象是从画布中凸出来。</p>
  <p class="style7">inset：整个框看上去好象是嵌在画布中。</p>
  <p class="style8">outset：整个框看上去好象是从画布中凸出来。</p>
</div>
<h3><a name="inline">8.8.6 行内元素的边框</a></h3>
<div id="border2">
  <p><strong>strong元素</strong>，<span>span元素有补白</span>，<img src="../../img/ddcat_96.jpg" align="图片" title="示例图片" width="96" height="96" /></p>
</div>
<h3><a name="sample">8.8.7 应用：文字链接的装饰</a></h3>
<div id="border3">
  <p><a class="link1" href="#" title="链接边框样式示例">点线链接</a>，<a class="link2" href="#" title="链接边框样式示例">粗线链接</a>，<a class="link3" href="#" title="链接边框样式示例">双线链接</a>，<a class="link4" href="#" title="链接边框样式示例">与文字不同颜色的下划线</a></p>
  <p><a class="link5" href="#" title="链接边框样式示例">类似按钮的链接文字</a></p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter8" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
