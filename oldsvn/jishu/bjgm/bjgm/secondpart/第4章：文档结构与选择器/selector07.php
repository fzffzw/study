<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>精确值匹配的属性选择器 :: 4.2.8 属性选择器（Attribute Selectors） :: 4.2 选择器 :: 第4章：文档结构与选择器</title>
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
input[type="text"] {
border: 1px solid blue;
}
-->
</style>
</head>

<body id="c_selector">
<h1>第4章：文档结构与选择器</h1>
<h2>4.2 选择器</h2>
<h3>4.2.8 属性选择器（Attribute Selectors）</h3>
<h4>精确值匹配的属性选择器</h4>
<form id="form1" method="post" action="#">
  <fieldset>
    <legend>信息登记</legend>
    <label>昵称：
    <input name="nikename" type="text" size="16" maxlength="30" />
    </label>
    <label>年龄：
    <input name="age" type="text" size="6" maxlength="8" />
    </label>
	<label>密码：
	<input name="password" type="password" id="password" value="" size="16" />
	</label>
    <label>
    <input type="radio" name="sex" value="male" />
    男</label>
    <label>
    <input type="radio" name="sex" value="female" />
    女</label>
  </fieldset>
</form>
<div class="gotoIndex"><a href="../../index.html#chapter4" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
