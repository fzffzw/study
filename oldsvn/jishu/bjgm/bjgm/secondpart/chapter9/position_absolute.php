<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>9.3.4 绝对定位 :: 9.3 定位 :: 第9章：浮动、定位与视觉格式化模型</title>
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
text-align: center;
border-bottom:1px dotted #999;
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
.sample1 {
border:2px solid #fc3;
height:30px;
position: absolute;
top:10px;
left:10px;
}
.sample2 {
border:2px solid #fc3;
height:30px;
position: absolute;
top:-10px;
left:-10px;
}

#position2 {
width:350px;
position:static;
line-height:40px;
}
#position2 p {
margin:5px;
}
#position2 em {
background: #FC3;
border:2px solid #06C;
}
.p1,
.s1 {
position:relative;
}
.e1 {
position: absolute;
top: 20px;
left: 35px;
}
#position2 img {
position:absolute;
top: 20px;
left: 35px;
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
<h3>9.3.4 绝对定位</h3>
<h4><a name="block">块级元素</a></h4>
<div id="position1">
  <p class="sample1">绝对定位的sample1</p>
  <p>普通段落文字</p>
</div>
<div>
  <p class="sample2">绝对定位的sample2</p>
  <p>普通段落文字</p>
</div>
<h4><a name="inline">行内元素</a></h4>
<div id="position2">
  <p>段落内包含<strong>strong元素，strong元素内包含<em>em元素</em>，不同的包含块对于绝对定位的元素影响不同</strong>。在不同浏览器内显示也不同。</p>
  <p class="p1">段落内包含<strong>strong元素，strong元素内包含<em class="e1">em元素</em>，不同的包含块对于绝对定位的元素影响不同</strong>。在不同浏览器内显示也不同。</p>
  <p>段落内包含<strong class="s1">strong元素，strong元素内包含<em class="e1">em元素</em>，不同的包含块对于绝对定位的元素影响不同</strong>。在不同浏览器内显示也不同。</p>
  <p class="p1">段落内包含<strong>strong元素，strong元素内包含<img src="../../img/ddcat_anim.gif" title="示例图片" alt="图片" />，不同的包含块对于绝对定位的元素影响不同</strong>。</p>
  <p>段落内包含<strong class="s1">strong元素，strong元素内包含<img src="../../img/ddcat_anim.gif" title="示例图片" alt="图片" />，不同的包含块对于绝对定位的元素影响不同</strong>。</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter9" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
