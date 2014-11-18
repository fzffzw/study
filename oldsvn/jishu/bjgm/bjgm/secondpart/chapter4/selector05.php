<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>4.2.7 相邻兄弟选择器（Adjacent Sibling Selectors） :: 4.2 选择器 :: 第4章：文档结构与选择器</title>
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
div + p {
color: red;
}
-->
</style>
</head>

<body id="c_selector">
  <h1>第4章：文档结构与选择器</h1>
  <h2>4.2 选择器</h2>
  <h3>4.2.7 相邻兄弟选择器（Adjacent Sibling Selectors）</h3>
  <p>与div相邻的上一个p</p>
  <div>
    <p>div中的p</p>
  </div>
  <p>与div相邻的下一个p</p>
  <p>不与div相邻的p</p>
  <div class="gotoIndex"><a href="../../index.html#chapter4" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>