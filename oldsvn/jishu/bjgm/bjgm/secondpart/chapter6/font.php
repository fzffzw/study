<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>6.6 缩写的字体属性：font属性 :: 第6章：字体</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#font1 p {
font-size:14px;
font-weight:bold;
font-style: italic;
font: 12px "宋体", serif;
}
#font2 p {
font: 12px "宋体", serif;
font-size:14px;
font-weight:bold;
font-style: italic;
}
input {
font: bold medium "黑体", sans-serif;
}
.test1 {
font: message-box;
}
-->
</style>
</head>

<body id="c_font">
<h1>第6章：字体</h1>
<h2>6.6 缩写的字体属性：font属性</h2>
<h3><a name="note">6.6.2 注意</a></h3>
<h4>font 定义依照层叠的原则</h4>
<div id="font1">
  <h5>其它字体属性在前面，font在最后</h5>
  <p>示例文字示例文字示例文字示例文字示例文字示例文字</p>
</div>
<div id="font2">
  <h5>font在前面，其它字体属性在后面</h5>
  <p>示例文字示例文字示例文字示例文字示例文字示例文字</p>
</div>
<h3><a name="system">6.6.3 系统字体</a></h3>
<form id="test_form" method="post" action="#">
  <fieldset>
    <legend>系统字体演示</legend>
    <input type="button" name="test_button1" value="按钮1" />
    <input type="button" name="test_button2" value="按钮2" />
    <input type="button" name="test_button1" value="按钮1" class="test1" />
  </fieldset>
</form>
<div class="gotoIndex"><a href="../../index.html#chapter6" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
