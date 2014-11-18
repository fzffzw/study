<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>4.2.4 类选择器（Class Selectors） :: 4.2 选择器 :: 第4章：文档结构与选择器</title>
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
}

/*以下是正式示例代码*/
div.warning {
color: red;
}
p.warning {
color: blue;
}
span.warning {
color: yellow;
}
.menu {
border:1px solid blue;
width:200px;
margin:5px;
}
.main {
background:yellow;
}
.sub {
background:grey;
}
-->
</style>
</head>

<body id="c_selector">
<h1>第4章：文档结构与选择器</h1>
<h2>4.2 选择器</h2>
<h3>4.2.4 类选择器（Class Selectors）</h3>
<div class="warning">注意！</div>
<p class="warning">注意！</p>
<p>这里要<span class="warning">注意！</span></p>
<div class="menu main">class=&quot;menu <strong>main</strong>&quot;</div>
<div class="menu sub">class=&quot;menu <strong>sub</strong>&quot;</div>
<div class="gotoIndex"><a href="../../index.html#chapter4" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>