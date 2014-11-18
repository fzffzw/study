<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>9.4.5 应用：3行3列布局设计 :: 9.4 浮动与清除 :: 第9章：浮动、定位与视觉格式化模型</title>
<style type="text/css">
<!--
* {
margin:0;
padding:0;
}
body {
font: small/1.5 "宋体", serif;
background:#fff;
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

/* 以下是正式示例代码 */
li {
list-style:none;
padding-left: 15px;
}
#wrap {
width: 770px;
margin:auto;
padding:3px;
border:2px solid #999;
background: #FFC;
}
#header {
line-height:50px;
background:#c6c;
margin-bottom:5px;
height:50px;
}
#menu {
width:200px;
float:left;
margin-right:5px;
background:#9f9;
}
#content {
width:390px;
float:left;
margin-right:5px;
margin-bottom:5px;
background:#9cf;
}
#other {
width:170px;
float:left;
background:#fc6;
}
#footer {
line-height:50px;
background:#c6c;
clear:both;
height:50px;
}
-->
</style>
</head>

<body id="c_visual">
<div id="wrap">
  <div id="header">这里是#header</div>
  <div id="menu">
    <ul>
	  <li>菜单项目1</li>
	  <li>菜单项目2</li>
	  <li>菜单项目3</li>
	  <li>菜单项目4</li>
	  <li>菜单项目5</li>
	  <li>菜单项目6</li>
	  <li>菜单项目7</li>
	  <li>菜单项目8</li>
	  <li>菜单项目9</li>
	  <li>菜单项目10</li>
	</ul>
  </div>
  <div id="content">
    <p>主要的内容。</p>
    <p>主要的内容。</p>
    <p>主要的内容。</p>
    <p>主要的内容。</p>
    <p>主要的内容。</p>
    <p>主要的内容。</p>
    <p>主要的内容。</p>
    <p>主要的内容。</p>
    <p>主要的内容。</p>
    <p>主要的内容。</p>
    <p>主要的内容。</p>
    <p>主要的内容。</p>
    <p>主要的内容。</p>
    <p>主要的内容。</p>
    <p>主要的内容。</p>
    <p>主要的内容。</p>
  </div>
  <div id="other">
    <ul>
	  <li>其他内容</li>
	  <li>其他内容</li>
	  <li>其他内容</li>
	  <li>其他内容</li>
	  <li>其他内容</li>
	  <li>其他内容</li>
	  <li>其他内容</li>
	  <li>其他内容</li>
	  <li>其他内容</li>
	  <li>其他内容</li>
	  <li>其他内容</li>
	  <li>其他内容</li>
	  <li>其他内容</li>
	</ul>
  </div>
  <div id="footer">这里是#footer</div>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter9" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>