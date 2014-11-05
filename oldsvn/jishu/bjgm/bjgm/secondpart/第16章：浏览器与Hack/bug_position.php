<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>相对定位元素中的绝对定位 :: 16.4.3 Windows IE浏览器常见Bug :: 16.4 发现与解决问题 :: 第16章：浏览器与Hack</title>
<style type="text/css">
<!--
body {
background:#fff;
color:#000;
font:small "宋体", serif;
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
#wrap {
position:relative;
background:#CFF;
border:2px solid #393;
}
/* 修复方法，注意对Mac IE 5隐藏 */
/*
* html #wrap {
height:1%;
}*/
#menu {
position:absolute;
width:100px;
height:60px;
background:#FC6;
right:0;
bottom:0;
}
-->
</style>
</head>

<body id="c_Hack">
<div id="wrap">
  <div id="menu">绝对定位的div</div>
  <p>静态的p</p>
  <p>静态的p</p>
  <p>静态的p</p>
  <p>静态的p</p>
  <p>静态的p</p>
</div>
<p>静态的p</p>
<p>静态的p</p>
<p>静态的p</p>
<div class="gotoIndex"><a href="../../index.html#chapter16" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
