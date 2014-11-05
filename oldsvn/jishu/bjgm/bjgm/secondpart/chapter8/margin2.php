<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>垂直边距的重叠 :: 8.9 边距：margin属性 :: 第8章：框模型</title>
<style type="text/css">
<!--
* {  /* 清除浏览器样式 */
margin: 0;
padding: 0;
}
body {
background: #6C3;
font: 12px/20px "宋体", serif;
}
h1,
h2,
h3,
h4 {
line-height:2em;
font-size:1em;
color:#030;
text-align:center;
border-bottom:1px dotted;
margin-bottom:5px;
}
h1 {
font-size:1.2em;
}
h2 {
background: #eee;
}

div {
background: #360;
margin: 10px;
}
p {
background:#FF9;
margin:20px;
}
span {
display:block;  /* 将span定义为块级元素 */
background:#FC3;
margin: 30px;
}
#margin1 {
float:left;
}
#margin2 {
clear: both;
height:70px;
overflow: auto;
}
#margin3 {
position:relative;  /* 生成包含块 */
height:100px;
}
#margin3 p {
position:absolute;
margin:15px;
}
#margin3 p span {
margin:10px;
}

#inlineBlock p {
display: inline-block;  /* inline-block元素具有块级元素特性，同时可在一行内显示*/
}
-->
</style>
</head>

<body id="c_box">
<h1>第8章：框模型</h1>
<h2>8.9 边距：margin属性</h2>
<h3>8.9.2 垂直方向的边距：margin-top属性和margin-bottom属性</h3>
<h4>边距的重叠</h4>
<div>
  <p><span>相邻元素不限于兄弟，</span>也包括后代。</p>
  <p>多个相邻的元素的垂直边距<span>都会发生重叠</span></p>
</div>
<div>下一个div</div>
<h4>不重叠的情况</h4>
<div>
  div中有内容
  <p>则垂直边距不重叠</p>
</div>
<div style="border:1px solid #FFF;">
  <p><span>div有1px的边框</span>
  与div相邻的后代元素的垂直边距与div的垂直边距不重叠
  </p>
</div>
<div style="padding: 1px 0 0 0;">
  <p><span>div有1px的上补白</span>
  没有下补白则下边距重叠</p>
</div>
<div>
  <p style="padding: 1px 0 0 0;"><span>p有1px的上补白</span>
  p与div边距压缩，而p与后代span的边距不重叠
  </p>
</div>
<div>
  <p><span style="padding: 1px 0 0 0;">span有1px的上补白</span>
  边距重叠
  </p>
</div>
<div>普通的div</div>
<div id="margin1">
  <p>浮动的div内的p，垂直边距不重叠。</p>
</div>
<div id="margin2">
  <p>div的overflow属性为auto</p>
  <p>div的overflow属性为auto</p>
  <p>div的overflow属性为auto</p>
  <p>div的overflow属性为auto</p>
  <p>div的overflow属性为auto</p>
</div>
<div id="margin3">
  <p><span>绝对定位的p中的span，</span>垂直边距不重叠</p>
</div>
<div>普通的div</div>
<div id="inlineBlock">
  <p>inline-block元素的边距不重叠</p>
  <p>inline-block元素的边距不重叠</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter8" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
