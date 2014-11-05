<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>4.7.1 更多的属性选择器 :: 4.7 CSS 3新增选择器前瞻 :: 第4章：文档结构与选择器</title>
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
div,p {
margin:5px 0;
}
h4 {
background:#ccc;
}
strong {
color:red;
}
#sample1 div[class^="nav"] {
background: #ff0;
}
#sample2 div[class$="primary"] {
background: #CF9;
}
#sample3 div[class*="content"] {
background: #0CF;
}
-->
</style>
</head>

<body id="c_selector">
  <h1>第4章：文档结构与选择器</h1>
  <h2>4.7 CSS 3新增选择器前瞻</h2>
  <h3>4.7.1 更多的属性选择器</h3>
  <div id="sample1">
    <h4>E[att<strong>^=</strong>&quot;val&quot;]</h4>
    <div class="nav-primary">class=&quot;<strong>nav</strong>-primary&quot;</div>
    <div class="content-primary">class=&quot;content-primary&quot;</div>
    <div class="content-secondary">class=&quot;content-secondary&quot;</div>
    <div class="tertiary-content">class=&quot;tertiary-content&quot;</div>
    <div class="nav-secondary">class=&quot;<strong>nav</strong>-secondary&quot;</div>
  </div>
  <div id="sample2">
    <h4>E[att<strong>$=</strong>&quot;val&quot;]</h4>
    <div class="nav-primary">class=&quot;nav-<strong>primary</strong>&quot;</div>
    <div class="content-primary">class=&quot;content-<strong>primary</strong>&quot;</div>
    <div class="content-secondary">class=&quot;content-secondary&quot;</div>
    <div class="tertiary-content">class=&quot;tertiary-content&quot;</div>
    <div class="nav-secondary">class=&quot;nav-secondary&quot;</div>
  </div>
  <div id="sample3">
    <h4>E[att<strong>*=</strong>&quot;val&quot;]</h4>
    <div class="nav-primary">class=&quot;nav-primary&quot;</div>
    <div class="content-primary">class=&quot;<strong>content</strong>-primary&quot;</div>
    <div class="content-secondary">class=&quot;<strong>content</strong>-secondary&quot;</div>
    <div class="tertiary-content">class=&quot;tertiary-<strong>content</strong>&quot;</div>
    <div class="nav-secondary">class=&quot;nav-secondary&quot;</div>
  </div>
  <div class="gotoIndex"><a href="../../index.html#chapter4" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
