<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>4.6.5 非CSS的表现类内容 :: 4.6 层叠 :: 第4章：文档结构与选择器</title>
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
p {
background: yellow;
text-align: left;
}
.test { color: green; }
div font { color: red; }
-->
</style>
</head>

<body id="c_selector">
  <h1>第4章：文档结构与选择器</h1>
  <h2>4.6 层叠</h2>
  <h3>4.6.5 非CSS的表现类内容</h3>
  <p align="right">&lt;p align=&quot;right&quot;&gt;，CSS：text-align: left;</p>
  <p class="test">p内的示例<font color="blue">文字</font>。</p>
  <div>div内的示例<font color="blue">文字</font>。</div>
  <div class="gotoIndex"><a href="../../index.html#chapter4" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
