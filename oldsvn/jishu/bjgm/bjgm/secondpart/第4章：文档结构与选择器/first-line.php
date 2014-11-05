<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<title>:first-line :: 4.3.2 伪元素（Pseudo-Elements） :: 4.3 伪类与伪元素 :: 第4章：文档结构与选择器</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
p:first-line { color: blue; }
p:first-line a { color: red; }
p { background: #9F9; width:20em; }
.p2 { width:15em; }
li:first-line { color: green; }
-->
</style>
</head>

<body id="c_selector">
  <h1>第4章：文档结构与选择器</h1>
  <h2>4.3 伪类与伪元素</h2>
  <h3>4.3.2 伪元素（Pseudo-Elements）</h3>
  <h4>:first-line</h4>
  <p>选择器“p:first-line”并不匹配任何实际的HTML元素。它匹配由浏览器在每一段开始插入的一个伪元素。</p>
  <p class="p2">选择器“p:first-line“并不匹配任何实际的(X)HTML元素。它匹配由浏览器在每一段开始插入的一个伪元素。</p>
  <ul>
    <li>选择器“p:first-line”并不匹配任何实际的(X)HTML元素。它匹配由浏览器在每一段开始插入的一个伪元素。</li>
  </ul>
  <div class="gotoIndex"><a href="../../index.html#chapter4" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
