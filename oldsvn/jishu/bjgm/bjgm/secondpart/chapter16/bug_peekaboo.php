<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>IE 6 躲猫猫Bug  :: 16.4.3 Windows IE浏览器常见Bug :: 16.4 发现与解决问题 :: 第16章：浏览器与Hack</title>
<style type="text/css">
<!--
body {
background:#fff;
color:#000;
font:small "宋体", serif;
}
.clearFloat {
clear:both;
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
/* IE 6躲猫猫Bug */
div {
background:#9CF;
border:2px solid #06F;
}
p {
margin:0;
padding:0;
background:#FFC;
border:1px solid  #C60;
}
.sample5 {
background:#FC3;
float:left;
width:100px;
height:100px;
}
#peekaboo2 {
line-height:1;
}
-->
</style>
</head>

<body id="c_Hack">
<h1>浏览器与Hack</h1>
<h2>发现与解决问题</h2>
<h3>浏览器常见Bug</h3>
<h4>IE 6 躲猫猫Bug</h4>
<div id="peekaboo">
  <p class="sample5">浮动的p1，<a href="#">示例链接</a></p>
  <p>不浮动的p2，<a href="#">示例链接</a></p>
  <p>不浮动的p3，<a href="#">示例链接</a></p>
  <p>不浮动的p4，<a href="#">示例链接</a></p>
  <p class="clearFloat">清除浮动</p>
</div>
<h4>line-height:1em</h4>
<div id="peekaboo2">
  <p class="sample5">浮动的p1，<a href="#">示例链接</a></p>
  <p>不浮动的p2，<a href="#">示例链接</a></p>
  <p>不浮动的p3，<a href="#">示例链接</a></p>
  <p>不浮动的p4，<a href="#">示例链接</a></p>
  <p class="clearFloat">清除浮动</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter16" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
