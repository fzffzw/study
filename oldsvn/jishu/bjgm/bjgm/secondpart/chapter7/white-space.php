<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>7.8 空白：white-space属性 :: 第7章：文本</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
p,
pre {
line-height:1.5em;
padding:0;
}
pre {
background:#ff9;
margin:5px;
}
div {
width:300px;
}
ul {
background:#ff9;
width:12em;
margin:0 auto;
}
li {
line-height:1.5em;
width:11em;
text-align:left;
overflow:hidden;
white-space:nowrap;
}

-->
</style>
</head>

<body id="c_text">
<h1>第7章：文本</h1>
<h2>7.8 空白：white-space属性</h2>
<div id="whiteSpace">
  <p>对于文本内的空格，html中规定，
     多个空格会被压缩成一个空格。
     再多的空格也不会显示。
     如图所示。</p>
<p style="white-space:pre;">本段落设定<strong>white-space:pre</strong>，	   多个空格会被保持。
       换行也会被保留。</p>
<pre><strong>&lt;pre&gt;</strong>元素的内容会按照原样显示，	   多个空格会被保持。
       换行也会被保留。</pre>
<p style="white-space:nowrap;">本段落设定white-space:nowrap，
       文本将强制在一行内显示。<br />
       遇到<strong>&lt;br&gt;</strong>元素会换行。</p>
<p style="white-space: pre-wrap;">
    本段落设定 white-space   :    pre-wrap，
	   空 格、TAB（制表符）和  换行  将 被保 留， 但是，  段落 也会
	自动       回行。
</p>
<p style="white-space: pre-line;">
    本段落设定 white-space   :    pre-line，
空 格和TAB（制表符）将 被   压缩， 但是， 但是换行将被保留， 段落也会 
	   自动    回行。
</p>
</div>
<!-- 本例没有做美化，只是示范white-space的用法 -->
<div>
  <ul>
    <li><a href="#">出游月历:5月 6月</a></li>
    <li><a href="#">旅游维权，你找到门道没有？</a></li>
    <li><a href="#">吆喝工业旅游</a></li>
    <li><a href="#">出游经典线路完全手册</a></li>
    <li><a href="#">保险——让我们放心出游</a></li>
    <li><a href="#">卡样人生·卡样旅游</a></li>
    <li><a href="#">环游十大系列：十大隐秘海滩</a></li>
    <li><a href="#">环游十大系列：十大诗情画意美景游</a></li>
  </ul>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter7" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
