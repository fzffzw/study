<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>8.6 最大高度（max-height）和最小高度（min-height） :: 第8章：框模型</title>
<style type="text/css">
<!--
div {
height: 200px;
background: #6C3;
border:1px solid #060;
font-size:small;
}
p {
height: 80%;
float: left;  /* 使p可以横向并排显示*/
width: 130px;
margin: 0 0 0 5px;
padding: 0;
background: #ff9;
white-space: pre;  /* 保持内容的回行 */
}
.sample1 {
max-height: 140px;
}
.sample2 {
height: 80px;
min-height: 100px;
}
.sample3 {
max-height: 80px;
min-height: 140px;
}
-->
</style>
</head>

<body id="c_box">
<h1>第8章：框模型</h1>
<h2>8.6 最大高度（max-height）和最小高度（min-height）</h2>
<div id="height1">
  <p>height
200px*80%=160px</p>
  <p class="sample1">max-height:140px;</p>
  <p class="sample2">height:80px;
min-height:100px;</p>
  <p class="sample3">max-height:80px;
min-height:140px;</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter8" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
