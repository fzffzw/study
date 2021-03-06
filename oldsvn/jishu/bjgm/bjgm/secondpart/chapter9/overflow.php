<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>9.6.1 溢出：overflow属性 :: 9.6 溢出和剪切 :: 第9章：浮动、定位与视觉格式化模型</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
div {
padding: 10px;
}
p {
margin:0;
padding:0;
width:450px;
border:2px solid #f90;
}

#overflow1 {
overflow:visible;
height:80px;
}
#overflow2 {
overflow:hidden;
height:80px;
}
#overflow3,
#overflow4 {
overflow:scroll;
height:80px;
}
#overflow4 p {
width:auto;
}
#overflow5 {
overflow:auto;
height:80px;
}
#overflow6 {
overflow:auto;
}
-->
</style>
</head>

<body id="c_visual">
<h1>第9章：浮动、定位与视觉格式化模型</h1>
<h2>9.6 溢出和剪切</h2>
<h3>9.6.1 溢出：overflow属性</h3>
<h4>overflow : visible</h4>
<div id="overflow1">
  <p>段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。</p>
</div>
<div>后面的内容。</div>
<h4>overflow : hidden</h4>
<div id="overflow2">
  <p>段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。</p>
</div>
<h4>overflow : scroll</h4>
<div id="overflow3">
  <p>段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。</p>
</div>
<div id="overflow4">
  <p>滚动条将一直存在。</p>
</div>
<h4>overflow : auto</h4>
<div id="overflow5">
  <p>段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。</p>
</div>
<h4>div未设定高度</h4>
<div id="overflow6">
  <p>段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。段落的内容超出包含块的区域。</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter9" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>