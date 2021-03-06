<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>4.7.2 普通兄弟选择器 :: 4.7 CSS 3新增选择器前瞻 :: 第4章：文档结构与选择器</title>
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
div,
p {
margin:5px 0;
}
.test ~ p {
background: #FC0;
}
-->
</style>
</head>

<body id="c_selector">
  <h1>第4章：文档结构与选择器</h1>
  <h2>4.7 CSS 3新增选择器前瞻</h2>
  <h3>4.7.2 普通兄弟选择器 E ~ F</h3>
  <div>
    <div>div 1</div>
    <p>p 1</p>
    <div class="test">div 2, class=&quot;test&quot;</div>
    <p>p 2</p>
    <div>div 3
	  <p>div 3 内的p</p>
	</div>
    <p>p 3</p>
  </div>
  <div class="gotoIndex"><a href="../../index.html#chapter4" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
