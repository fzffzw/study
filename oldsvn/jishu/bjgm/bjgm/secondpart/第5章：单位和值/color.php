<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>5.1.2 RGB颜色 :: 5.1 颜色 :: 第5章：单位和值</title>
<style type="text/css">
<!--
body {
color:#000;
font-family:"宋体", serif;
background:#fff;
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
.test1 {
background-color: rgb(100%, 50.5%, -40%);
}
.test2 {
background-color: rgb(-200, 50, 3000);
color:#fff;
}
.test3 {
background-color: #ccccrr;
}
-->
</style>
</head>

<body id="c_value">
<h1>第5章：单位和值</h1>
<h2>5.1 颜色</h2>
<h3>5.1.2 RGB颜色</h3>
<h4>错误值的处理</h4>
<p class="test1">rgb(100%, 50.5%, -40%) =&gt; rgb(100%, 51%, 0%)</p>
<p class="test2">rgb(-200, 50, 3000) =&gt; rgb(0, 50, 255)</p>
<p class="test3">background-color: #cccc<strong>rr</strong></p>
<div class="gotoIndex"><a href="../../index.html#chapter5" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
