<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>8.10 常规流向中的视觉格式化 :: 第8章：框模型</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
div p {
padding: 0;
margin: 0;
}
#blockFormatting1 p {
margin-bottom: 10px;
}
#blockFormatting2 {
width:400px;
}
#blockFormatting2 p {
width:300px;
margin:0 0 5px;
}
#blockFormatting2 .p2 {
padding: 0 20px;
margin: 0 10px;
}
#blockFormatting2 .p2 em {
background: #FC3;
display:block;  /* 使<em>变为块级元素以显示p元素的内容宽度（em会自动充满p的内容宽度） */
}
#blockFormatting3 {
background: #6C3;
border:1px solid #060;
width: 300px;
}
#blockFormatting3 p {
width:300px;
background:#fc0;
margin:10px;
}
#blockFormatting4 p,
#blockFormatting5 p {
margin-bottom:5px;
}

.p1 {
margin: 10px;
border:5px solid #FC3;
}
.p3,
.p4 {
margin: 0 20px 0 0;  /* margin的4个值的顺序为上右下左 */
width: 200px;
}
.p4 {
margin-left: auto;  /* 覆盖前面定义的 “0” */
}
.p5 {
margin:5px 20px;
}
.p6 {
width: auto;
margin: auto;
}
.p7 {
width: 200px;
margin: 5px auto;
}
.p8 {
width: auto;
margin-left: auto;
margin-right: 20px;
}
#blockFormatting5 {
width:400px;
border:1px solid #060;
}
.p9 {
margin-right:-20px;
background: #FC0;
text-align:right;
}
.p10 {
margin:0 20px 0 -20px;
background: #FC0;
border: 5px solid #06C;
}

#blockFormatting6 {
height: 60px;
}
#blockFormatting7 {
height: 40px;
}
#blockFormatting8 {
line-height:30px;
margin-top:30px;
}
#blockFormatting8 span {
line-height:20px;
vertical-align:top;
}
#blockFormatting8 em {
line-height:40px;
vertical-align:bottom;
}

.p11 {
float:left;
height:40px;
background:#FC3;
margin-bottom:5px;
}
#blockFormatting11 {
position: relative;
}
.p12 {
position: absolute;
height: 40px;
background:#3CF;
right: 20px;
}
.p13 {
position: relative;
height:40px;
top: 10px;
left: 20px;
}
</style>
</head>

<body id="c_box">
<h1>第8章：框模型</h1>
<h2>8.10 常规流向中的视觉格式化</h2>
<h3><a name="block1">8.10.1块级元素的水平格式化</a></h3>
<div id="blockFormatting1">
  <p style="width:70%;">宽70%的p</p>
  <p>p内的文字</p>
</div>
<h4>1. 定义了width属性的元素</h4>
<div id="blockFormatting2">
  <p>宽300px</p>
  <p class="p2"><em>左右padding:20px 左右margin:10px</em></p>
</div>
<div id="blockFormatting3">
  <p>div宽300px  p元素宽300px margin:10px</p>
</div>
<h4><a name="block1_2">2. width属性的auto值</a></h4>
<div style="width: 330px;">
  <p>div宽度为330px，未设定边距等的p1</p>
  <p class="p1">p2有10px的边距和5px的边框</p>
</div>
<div style="width: 400px;">
  <p>div宽度为400px，未设定边距等的p1</p>
  <p class="p1">p2有10px的边距和5px的边框</p>
</div>
<div style="width:400px; padding:10px;">
  <p>div宽度为400px，未设定边距等的p1</p>
  <p class="p1">p2有10px的边距和5px的边框</p>
</div>
<h4><a name="block1_3">3. 左右边距的auto值</a></h4>
<div id="blockFormatting4">
  <p class="p3">左边距0,右边距20px</p>
  <p class="p4">左边距auto,右边距20px</p>
  <p class="p5">左右边距20px,宽度auto</p>
  <p class="p7">宽度200px，边距auto</p>
  <p class="p8">宽度和左边距为auto，右边距20px</p>
  <p class="p6">宽度和边距都为 auto</p>
</div>
<h4><a name="block1_4">4. 负值边距</a></h4>
<div id="blockFormatting5">
  <p class="p9">p9, 左边距0,右边距-20px</p>
  <p class="p10">p10, 左边距-20px,右边距20px，边框5px</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter8" title="返回示例代码目录">返回代码目录</a></div>
<h3><a name="block2">块级元素的垂直格式化</a></h3>
<div id="blockFormatting6">
  <p>div高度为60px <img src="../../img/ddcat_anim.gif" width="88" height="31" alt="图片" /></p>
</div>
<div id="blockFormatting7">图片高度大于div的高度<img src="../../img/ddcat_ad.gif" alt="图片" /></div>
<div id="blockFormatting8">div行高30px，<span>span元素的行高20px，顶端对齐</span>div行高30px，div行高30px，<em>em元素行高40px，底端对齐</em>div行高30px</div>
<div id="blockFormatting9">
  <p>段落内的文字</p>
  div内的文字，将生成匿名块框
</div>
<h4>浮动与绝对定位的子元素</h4>
<div id="blockFormatting10">
  <p class="p11">p11左浮动</p>
  <p>本段文字不浮动</p>
</div>
<div id="blockFormatting11">
  <p class="p11">段落1左浮动</p>
  <p class="p12">段落2绝对定位</p>
</div>
<div id="blockFormatting12">
  <p class="p13">段落相对定位</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter8" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
