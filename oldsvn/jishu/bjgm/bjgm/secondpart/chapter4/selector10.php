<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>特殊匹配的属性选择器 :: CSS选择器 :: 第4章：文档结构与选择器</title>
</head>

<body id="c_selector">
<h1>第4章：文档结构与选择器</h1>
<h2>CSS选择器</h2>
<div id="test">
  <p>段落1，<strong>段落1内的strong1 </strong></p>
  <ul>
    <li class="first">列表项1，<strong>列表项1内的strong2</strong>。</li>
    <li>列表项2。</li>
    <li>
	  <ol>
	    <li>列表项3，<strong>列表项3内的strong3</strong>。</li>
	    <li>列表项4。</li>
	  </ol>
	</li>
  </ul>
  <div class="sample1">
    <p>段落2，<strong>段落2内的strong4</strong>。</p>
  </div>
</div>
<div id="test2">
  <div class="sample1">
    <p>段落3，<strong>段落3内的strong5</strong>。</p>
  </div>
</div>
</body>
</html>
