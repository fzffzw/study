<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>:first-letter :: 4.3.2 伪元素（Pseudo-Elements） :: 4.3 伪类与伪元素 :: 第4章：文档结构与选择器</title>
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
p:first-letter {
color:red;
font-size: 200%;
}
.p2:first-letter {
float:left;
}
.p2 span {
text-transform: uppercase;
}
-->
</style>
</head>

<body id="c_selector">
  <h1>第4章：文档结构与选择器</h1>
  <h2>4.3 伪类与伪元素</h2>
  <h3>4.3.2 伪元素（Pseudo-Elements）</h3>
  <h4>:first-letter</h4>
  <p>伪元素:first-letter匹配一段文字的第一个中文字或者字母。</p>
  <p class="p2"><span>The first</span> few words of an article in The Economist.</p>
  <p>&quot;类似于英文的引号&quot;这类的标点符号出现在首字母前，也会包含在内。</p>
  <p>67 million dollars is a lot of money.</p>
  <p>“中文”的标点符号则在不同浏览器有不同的处理方式。</p>
  <div class="gotoIndex"><a href="../../index.html#chapter4" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
