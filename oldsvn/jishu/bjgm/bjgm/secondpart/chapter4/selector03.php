<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>4.2.5 包含选择器（Descendant Selectors） :: 4.2 选择器 :: 第4章：文档结构与选择器</title>
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
div em {
color: blue;
}
#test li {
color: red;
}
#test ul li {
color: blue;
}
-->
</style>
</head>

<body id="c_selector">
<h1>第4章：文档结构与选择器</h1>
<h2>4.2 选择器</h2>
<h3>4.2.5 包含选择器（Descendant Selectors）</h3>
<div>div中的<em>em</em>。
  <p>div中的p中的<em>em</em></p>
</div>
<p>与div同级的p中的<em>em</em>。</p>
<div id="test">
  <ul>
    <li>ul中的li</li>
    <li>ul中的li</li>
  </ul>
  <ol>
    <li>ol中的li</li>
    <li>ol中的li</li>
  </ol>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter4" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
