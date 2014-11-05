<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>简易属性匹的属性选择器 :: 4.2.8 属性选择器（Attribute Selectors） :: 4.2 选择器 :: 第4章：文档结构与选择器</title>
<style type="text/css">
<!--
body {
font: normal "宋体", serif;
background:#FFF;
}
.gotoIndex {
margin-top:30px;
background:#ccc;
font-size:12px;
text-align:center;
padding:4px;
clear:both;
}

/*以下是正式示例代码*/
div[class] {
color: red;
}
a[title][class] {
color: green;
}
-->
</style>
</head>

<body id="c_selector">
  <h1>第4章：文档结构与选择器</h1>
  <h2>4.2 选择器</h2>
  <h3>4.2.8 属性选择器（Attribute Selectors）</h3>
  <h4>简易属性匹的属性选择器</h4>
  <div class="box1">具有class=&quot;box1&quot;属性的div</div>
  <p class="box1">具有class=&quot;box1&quot;属性的p</p>
  <div class="box2">具有class=&quot;box2&quot;属性的div</div>
  <div id="main">具有id=&quot;main&quot;属性的div</div>
  <ul>
    <li><a href="#" title="带有title属性的链接">只有title属性的链接</a></li>
    <li><a href="#" class="new">只有class属性的链接</a></li>
    <li><a href="#" title="带有title属性的链接，有class属性的链" class="new">既有title属性，也有class属性的链接</a></li>
  </ul>
  <div class="gotoIndex"><a href="../../index.html#chapter4" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
