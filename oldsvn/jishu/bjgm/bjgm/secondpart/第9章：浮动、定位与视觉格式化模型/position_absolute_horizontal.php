<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>绝对定位水平格式化 :: 9.3.4  绝对定位 :: 9.3 定位 :: 第9章：浮动、定位与视觉格式化模型</title>
<style type="text/css">
<!--
* {
padding:0;
margin:0;
}
body {
margin:15px;
padding:20px;
border:3px dashed #909;
position:relative;
font: small/2em "宋体", serif;
background:#FFF;
}
.gotoIndex {
width:auto;
height:auto;
margin-top:30px;
background:#ccc;
font-size:12px;
border:none;
text-align:center;
padding:4px;
}
h1,
h2,
h3,
h4,
h5 {
font-size: 1em;
line-height: 2em;
text-align:center;
border-bottom:1px dotted #999;
}
h5 {
font-weight:normal;
border:0;
}

/* 以下是正式示例代码 */
div {
background:#6C3;
margin:10px;
padding:10px;
border:3px solid #060;
position:relative;
}
p {
background:#ff9;
}
.sample3 {
border:2px solid #fc3;
margin:auto;
position: absolute;
}
#horizontal0 .sample3 {
position:static;
}
#horizontal1 {
padding: 5px 40px;
}
#horizontal2 {
direction:rtl;
padding: 5px 40px;
}
#horizontal3,
#horizontal4,
#horizontal5 {
padding:10px;
width: 450px;
}
.sample4 {
border:2px solid #06C;
background: #CFF;
width:300px;
margin:0 auto;
position: absolute;
left:30px;
right:50px;
}
#horizontal4 {
width:280px;
}
#horizontal5 .sample4 {
margin:0 10px 0 auto;
}
#horizontal6 .sample4 {
width:auto;
left:auto;
}
#horizontal7 .sample4 {
left:auto;
right:auto;
width:100px;
}
#horizontal8 .sample4 {
right:auto;
width:auto;
}
#horizontal9 .sample4 {
left:auto;
width:100px;
}
#horizontal10 .sample4 {
width:auto;
}
#horizontal11 .sample4 {
width:100px;
right:auto;
}

/* 替换元素 */
img {
width:180px;
}
.sample5 {
margin: 0 10px 0 20px;
position:absolute;
}
#horizontal12 .sample5 {
position:static;
}
#horizontal14 .sample5 {
margin:auto 10px 0 auto;
right:30px;
}
#horizontal15 .sample5 {
margin:auto 10px 0 auto;
right:30px;
left:40px;
}
-->
</style>
<!--[if lt IE 7]>
<style type="text/css">
div {
height: 1%;
}
</style>
<![endif]--> 
</head>

<body id="c_visual">
<h1>第9章：浮动、定位与视觉格式化模型</h1>
<h2>9.3 定位</h2>
<h3>9.3.4  绝对定位</h3>
<h4>绝对定位水平格式化</h4>
<div id="horizontal0">
  <p class="sample3">绝对定位的sample3，未设定偏移量</p>
  <p>绝对定位元素后面的段落内的文字，绝对定位元素后面的段落内的文字。</p>
</div>
<h4>如果left、width和right属性全为“auto”</h4>
<h5>direction:ltr</h5>
<div id="horizontal1">
  <p class="sample3">绝对定位的sample3，未设定偏移量</p>
  <p>绝对定位元素后面的段落内的文字，绝对定位元素后面的段落内的文字。</p>
</div>
<h5>direction:rtl</h5>
<div id="horizontal2">
  <p class="sample3">绝对定位的sample3，未设定偏移量</p>
  <p>绝对定位元素后面的段落内的文字，绝对定位元素后面的段落内的文字。</p>
</div>
<h4>left、width和right都不是“auto”，而margin为“auto”</h4>
<div id="horizontal3">
  <p class="sample4">sample4，left、width和right都不是“auto”。</p>
  <p>绝对定位元素后面的段落内的文字，绝对定位元素后面的段落内的文字。</p>
</div>
<h4>left、width和right都不是“auto”，而margin为“auto”，等式产生负值</h4>
<div id="horizontal4">
  <p class="sample4">sample4，left、width和right都不是“auto”。</p>
  <p>绝对定位元素后面的段落内的文字，绝对定位元素后面的段落内的文字。</p>
</div>
<h4>left、width、right和margin-right都不是“auto”，而margin-left为“auto”</h4>
<div id="horizontal5">
  <p class="sample4">left、width、right和margin-right都不是“auto”</p>
  <p>绝对定位元素后面的段落内的文字，绝对定位元素后面的段落内的文字。</p>
</div>
<h4>left和width属性是“auto”而right属性不是“auto”</h4>
<div id="horizontal6">
  <p class="sample4">绝对定位元素</p>
  <p>绝对定位元素后面的段落内的文字。</p>
</div>
<h4>left和right是“auto”，而width不是</h4>
<div id="horizontal7">
  <p class="sample4">绝对定位元素</p>
  <p>绝对定位元素后面的段落内的文字。</p>
</div>
<h4>width和right属性是“auto”，而left不是</h4>
<div id="horizontal8">
  <p class="sample4">绝对定位元素</p>
  <p>绝对定位元素后面的段落内的文字。</p>
</div>
<h4>left属性是“auto”，而widht和right属性不是</h4>
<div id="horizontal9">
  <p class="sample4">绝对定位元素</p>
  <p>绝对定位元素后面的段落内的文字。</p>
</div>
<h4>width属性是“auto”而left和right属性不是</h4>
<div id="horizontal10">
  <p class="sample4">绝对定位元素</p>
  <p>绝对定位元素后面的段落内的文字。</p>
</div>
<h4>right属性是“auto”，而left和width属性不是</h4>
<div id="horizontal11">
  <p class="sample4">绝对定位元素</p>
  <p>绝对定位元素后面的段落内的文字。</p>
</div>
<h4>替换元素</h4>
<div id="horizontal12">
  <p>图片绝对定位，<img src="../../img/ddcat_ad.gif" class="sample5" alt="示例图片" />left和right都是auto，left和right都是auto，left和right都是auto。</p>
</div>
<div id="horizontal13">
  <p>图片绝对定位，<img src="../../img/ddcat_ad.gif" alt="示例图片" class="sample5" />left和right都是auto，left和right都是auto，left和right都是auto。</p>
</div>
<div id="horizontal14">
  <p>图片绝对定位，<img src="../../img/ddcat_ad.gif" alt="示例图片" class="sample5" />。margin: auto 10px 10px auto; right:30px; 图片的定位情况 </p>
</div>
<div id="horizontal15">
  <p>图片绝对定位，<img src="../../img/ddcat_ad.gif" alt="示例图片" class="sample5" />。margin: auto 10px 10px auto; right:30px; left: 40px;</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter9" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
