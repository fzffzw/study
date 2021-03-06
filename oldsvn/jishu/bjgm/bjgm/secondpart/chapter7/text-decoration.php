<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>7.7 文本装饰：text-decoration属性 :: 第7章：文本</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
p {
line-height:3em;
}
.decoration1,
.decoration6 {
text-decoration:underline;
}
.decoration2 {
text-decoration:overline;
}
.decoration3 {
text-decoration:line-through;
}
.decoration4 {
text-decoration:blink;
}
.decoration5 {
text-decoration:underline overline;
}
.decoration6 strong {
text-decoration:overline;
}
-->
</style>
</head>

<body id="c_text">
<h1>第7章：文本</h1>
<h2>7.7 文本装饰：text-decoration属性</h2>
<div>
  <p class="decoration1">下划线：text-decoration : underline</p>
  <p class="decoration2">上划线：text-decoration : overline</p>
  <p class="decoration3">贯穿线：text-decoration : line-through</p>
  <p class="decoration4">闪烁：text-decoration : blink（IE不支持）</p>
  <p><a href="#">超级链接是下划线</a>&nbsp;<del>&lt;del&gt;元素是贯穿线</del>&nbsp;<ins>&lt;ins&gt;元素是下划线</ins></p>
  <p class="decoration5">文本装饰可以同时设置多个值</p>
  <p class="decoration1">文本装饰不被继承，<strong>子元素下的线是段落的下划线</strong></p>
  <p class="decoration6"><strong>为子元素定义上划线</strong>，段落的下划线依然存在。</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter7" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
