<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>9.2 显示类型：display属性 :: 第9章：浮动、定位与视觉格式化模型</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.sample1 {
display: none;
}
.sample1 strong {
display:block;
}
#display1 {
text-align:center;
}
#display1 p {
display: inline-block;
width: 100px;
height: 50px;
}
/*应用*/
#display2 a:hover {
border: 0;
}
#display2 a span {
display: none;
}
#display2 a:hover span {
display: inline;
background: #3CF;
}
-->
</style>
</head>

<body id="c_visual">
<h1>第9章：浮动、定位与视觉格式化模型</h1>
<h2>9.2 显示类型：display属性</h2>
<h3>9.2.1 语法</h3>
<h4><a name="none">none</a></h4>
<div>
  <p>普通的段落文字</p>
  <p class="sample1">这个段落不显示，<strong>包括子元素</strong>。</p>
</div>
<div id="display1">
  <h4><a name="inlineBlock">inline-block</a></h4>
  <p>段落是块级元素</p>
  <p>段落是块级元素</p>
  <span>行内元素</span>
</div>
<h3><a name="sample">9.2.2 应用：显示或隐藏元素</a></h3>
<div id="display2">
  <p><a href="#">指过来看看……<span>隐藏的文字出现啦！</span></a></p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter9" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
