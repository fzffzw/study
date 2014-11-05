<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>16.4.2 常见的非Bug问题 :: 16.4 发现与解决问题 :: 第16章：浏览器与Hack</title>
<style type="text/css">
<!--
body {
background:#fff;
color:#000;
font:small/1.5em "宋体", serif;
}
.gotoIndex {
margin-top:30px;
background:#ccc;
font-size:12px;
text-align:center;
padding:4px;
border:none;
width:auto;
height:auto;
}

/* 以下是正式示例代码 */
#inspect1 {
background:#9CF;
margin:5px;
width:400px;
}
#inspect1 p {
background:#FFC;
margin:10px;
}
#inspect2 {
background:#9CF;
margin:5px;
padding:1px;
width:400px;
}
#inspect2 p {
background:#FFC;
margin:9px;
}
#wrap {
border:1px solid #F60;
width:500px;
}
#header {
background:#9CF;
}
#content {
width:370px;
background:#FFC;
float:left;
}
#menu {
width:130px;
background:#CFC;
float:right;
}
#footer {
background:#9CF;
clear:both;
}
#inspect3 {
clear:both;
}
#inspect3 ul,
#inspect4 ul {
background:#FF9;
border:1px solid #F60;
width:300px;
padding:2px;
}
#inspect3 li,
#inspect4 li {
list-style:none;
float:left;
padding:5px;
background:#FC6;
margin:0 2px 0 0;
}
#inspect3 ul:after {
content: ".";    /* :after必须和content属性一起使用，具体内容无关紧要 */
display: block;   /* 块级元素才可以清除浮动 */
height: 0;  /* 高度为0，以隐藏生成的内容 */
clear: both; 
visibility: hidden;  /* 隐藏生成的内容 */
}
/* Clear Fix */
.clearfix:after {
content : ".";
display : block;
height : 0;
clear : both;
visibility : hidden;
}
.clearfix {
display: inline-block;
}
/* Hides from IE-mac \*/
* html .clearfix {
height: 1%; 
}
/* End hide from IE-mac */
.clearfix {
display: block;
}
/* end of clearfix */
#width {
border:1px solid #F90;
background:#FFC;
}
#width li {
list-style:none;
float:left;
width:24.9%;
background:#9CF;
}
-->
</style>
</head>

<body id="c_Hack">
<h1>第16章：浏览器与Hack</h1>
<h2>16.4 发现与解决问题</h2>
<h3>16.4.2 常见的非Bug问题</h3>
<h4><a name="margin">垂直边距的重叠</a></h4>
<div id="inspect1">
  <p>垂直边距的重叠</p>
</div>
<div id="inspect2">
  <p>垂直边距的重叠</p>
</div>
<h4><a name="height">高度不适应（闭合浮动元素）</a></h4>
<div id="wrap">
  <div id="header">header</div>
  <div id="content">
    <p>content</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
  <div id="menu">
    <p>menu</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
  <div id="footer">footer</div>
</div>
<div id="inspect3">
  <ul>
    <li>列表项1</li>
    <li>列表项2</li>
    <li>列表项3</li>
  </ul>
</div>
<div id="inspect4">
  <ul class="clearfix">
    <li>列表项1</li>
    <li>列表项2</li>
    <li>列表项3</li>
  </ul>
</div>
<h4><a name="width">尺寸是否计算正确</a></h4>
<ul id="width" class="clearfix">
  <li>列表项</li>
  <li>列表项</li>
  <li>列表项</li>
  <li>列表项</li>
  <li>列表项</li>
  <li>列表项</li>
  <li>列表项</li>
  <li>列表项</li>
</ul>
<div class="gotoIndex"><a href="../../index.html#chapter16" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
