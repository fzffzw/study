<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>16.4.3 Windows IE浏览器常见Bug :: 16.4 发现与解决问题 :: 第16章：浏览器与Hack</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.clearFloat {
clear:both;
display:block;
}
/* 浮动双倍边距 */
.sample1{
float:left;
width:100px;
padding:0;
margin:5px 10px 5px 30px;
}
.sample2{
float:right;
width:100px;
padding:0;
margin:5px 30px 5px 10px;
}
#doubleMargin2 .sample1,
#doubleMargin2 .sample2 {
display:inline;
}
/* 3px文本偏移 */
.sample3 {
background:#FC3;
height:50px;
float:left;
width:100px;
padding:0;
margin:0;
}
.sample4 {
padding:0;
margin:0 0 0 100px;
}
* html #float3px2 .sample4 {
height:1%;
margin-left:0;
}
* html #float3px2 .sample3 {
margin-right:-3px;
}
/* IE 6复制文字Bug */
#duplicate p{
margin:0;
padding:0;
float:left;
width:100%;
}
/* IE 断头台Bug */
.sample5 {
background:#FFC;
border:2px solid #FC0;
width:150px;
margin:0;
float:left;
}
#guillotine a,
#guillotine2 a {
display:block;
}
#guillotine a:hover,
#guillotine2 a:hover {
background:#FFF;
}
/* IE 浮动元素下边距无效 */
#margin,
#margin2 {
margin-bottom:0;
}
#margin p,
#margin2 p {
float:left;
width:150px;
margin:5px 5px 30px;
display:inline;
}
#margin2 {
padding-bottom: 30px;
}
#margin2 p {
margin-bottom:0;
}
#margin:after,
#margin2:after {
content:".";
display:block;
clear:both;
height:0;
visibility:hidden;
}
/* 多出的空白 */
#displayBlock li,
#displayBlock2 li{
list-style:none;
}
#displayBlock li a,
#displayBlock2 li a {
display:block;
background:#FF9;
}
#displayBlock2 li a {
*height:1%;
}
#image2 img{
vertical-align:top;
}
#lineHeight,
#lineHeight2 {
line-height:50px;
}
#lineHeight img,
#lineHeight2 img{
vertical-align:middle;
}
* html #lineHeight2 {
padding:10px 0;
}
-->
</style>
</head>

<body id="c_Hack">
<h1>第16章：浏览器与Hack</h1>
<h2>16.4 发现与解决问题</h2>
<h3>16.4.3 Windows IE浏览器常见Bug</h3>
<h4><a name="doubleMargin">浮动双倍边距</a></h4>
<h5>未修复</h5>
<div id="doubleMargin">
  <p class="sample1">左浮动1</p>
  <p class="sample1">左浮动2</p>
  <span class="clearFloat"></span>
  <p class="sample2">右浮动1</p>
  <p class="sample2">右浮动2</p>
  <span class="clearFloat"></span>
</div>
<h5>已修复</h5>
<div id="doubleMargin2">
  <p class="sample1">左浮动1</p>
  <p class="sample1">左浮动2</p>
  <span class="clearFloat"></span>
  <p class="sample2">右浮动1</p>
  <p class="sample2">右浮动2</p>
  <span class="clearFloat"></span>
</div>
<h4><a name="three">3px文本偏移</a></h4>
<h5>未修复</h5>
<div id="float3px">
  <p class="sample3">左浮动</p>
  <p class="sample4">不浮动的文字。不浮动的文字。不浮动的文字。不浮动的文字。不浮动的文字。不浮动的文字。不浮动的文字。不浮动的文字。不浮动的文字。不浮动的文字。</p>
</div>
<h5>已修复</h5>
<div id="float3px2">
  <p class="sample3">左浮动</p>
  <p class="sample4">不浮动的文字。不浮动的文字。不浮动的文字。不浮动的文字。不浮动的文字。不浮动的文字。不浮动的文字。不浮动的文字。不浮动的文字。不浮动的文字。</p>
</div>
<h4><a name="duplicate">复制文字Bug</a></h4>
<div id="duplicate">
  <p>浮动的p1</p>
  <p>浮动的p2</p>
  <!-- 注释文字1 -->
  <!-- 注释文字2 -->
  <p>浮动的p3</p>
</div>
<h4><a name="guillotine">断头台Bug</a></h4>
<h5>未修复</h5>
<div id="guillotine">
  <p class="sample5">断头台的名称也很形象，就如同断头台一样，某种条件下，元素会被切断，不过切掉的不是头部而是底部。</p>
  <a href="#" title="示例链接">示例链接1</a>
  <a href="#" title="示例链接">示例链接2</a>
  <a href="#" title="示例链接">示例链接3</a>
</div>
<h5>添加清除元素</h5>
<div id="guillotine2">
  <p class="sample5">断头台的名称也很形象，就如同断头台一样，某种条件下，元素会被切断，不过切掉的不是头部而是底部。</p>
  <a href="#" title="示例链接">示例链接1</a>
  <a href="#" title="示例链接">示例链接2</a>
  <a href="#" title="示例链接">示例链接3</a>
  <span class="clearFloat"></span>
</div>
<h4><a name="marginBtm">浮动元素下边距无效</a></h4>
<h5>未修复</h5>
<div id="margin">
  <p>浮动元素1</p>
  <p>浮动元素2</p>
</div>
<div>后面的div</div>
<h5>改变设定方案</h5>
<div id="margin2">
  <p>浮动元素1</p>
  <p>浮动元素2</p>
</div>
<div>后面的div</div>
<h4><a name="block">“display : block”多出的空白</a></h4>
<h5>未修复</h5>
<div id="displayBlock">
  <ul>
    <li><a href="#" title="示例链接">示例链接1</a></li>
    <li><a href="#" title="示例链接">示例链接2</a></li>
    <li><a href="#" title="示例链接">示例链接3</a></li>
  </ul>
</div>
<h5>已修复</h5>
<div id="displayBlock2">
  <ul>
    <li><a href="#" title="示例链接">示例链接1</a></li>
    <li><a href="#" title="示例链接">示例链接2</a></li>
    <li><a href="#" title="示例链接">示例链接3</a></li>
  </ul>
</div>
<h4><a name="image">图片下的空隙</a></h4>
<h5>未修复</h5>
<div id="image">
  <img src="../../img/ddcat_anim.gif" alt="示例" width="88" height="31" />
</div>
<h5>已修复</h5>
<div id="image2">
  <img src="../../img/ddcat_anim.gif" alt="示例" width="88" height="31" />
</div>
<h4><a name="lineHeight">含有替换元素的行，行高失效</a></h4>
<h5>未修复</h5>
<div id="lineHeight">
  <img src="../../img/ddcat_anim.gif" alt="示例" width="88" height="31" />
</div>
<h5>已修复</h5>
<div id="lineHeight2">
  <img src="../../img/ddcat_anim.gif" alt="示例" width="88" height="31" />
</div>
<div class="gotoIndex"><a href="../../index.html#chapter16" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
