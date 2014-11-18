<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>4.7.3 结构伪类（Structural pseudo-classes） :: 4.7 CSS 3新增选择器前瞻 :: 第4章：文档结构与选择器</title>
<style type="text/css">
<!--
body {
font-family: "宋体", serif;
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
:root {
border:4px solid blue;
}
p:empty {
width:100px;
height:20px;
background:yellow;
}
p:empty:after{
    content: "]]";
}
-->
</style>
</head>

<body id="c_selector">
  <h1>第4章：文档结构与选择器</h1>
  <h2>4.7 CSS 3新增选择器前瞻</h2>
  <h3>4.7.3 结构伪类（Structural pseudo-classes）</h3>
  <div id="sample1">
    <h4>:empty</h4>
    <p></p>
    <p>Text</p>
    <p><em>s</em></p>
  </div>
  <div class="gotoIndex"><a href="../../index.html#chapter4" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>