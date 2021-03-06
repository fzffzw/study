<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>7.10 文字方向 direction 和 编码方式unicode-bidi :: 第7章：文本</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.direction1 {
direction:ltr;
}
.bidi1 {
unicode-bidi: normal;
}
.bidi2 {
unicode-bidi:bidi-override;
}
.bidi3 {
unicode-bidi:embed;
}
.direction2 {
text-align:right;
direction:rtl;
}
#inLine {
text-align:right;
}
#inLine span {
color:#00f;
}
-->
</style>
</head>

<body id="c_text">
<h1>第7章：文本</h1>
<h2>7.10 文字方向 direction 和 编码方式unicode-bidi</h2>
<div id="direction">
  <h3><a name="direction">文字方向 direction</a></h3>
  <p>文字左对齐，由左向右显示。[ 1 2 3 4 5 }- a b c d *</p>
  <h4>文字左对齐，由左向右显示 direction: ltr</h4>
  <p class="direction1">未设定 unicode-bidi。[ 1 2 3 4 5 }- a b c d *</p>
  <p class="direction1 bidi1">设定 unicode-bidi: normal。[ 1 2 3 4 5 }- a b c d *</p>
  <p class="direction1 bidi2">设定 unicode-bidi:bidi-override。[ 1 2 3 4 5 }- a b c d *</p>
  <p class="direction1 bidi3">设定 unicode-bidi:embed。[ 1 2 3 4 5 }- a b c d *</p>
  <h4>文字右对齐，由右向左显示 direction:rtl;</h4>
  <p class="direction2">未设定 unicode-bidi。[ 1 2 3 4 5 }- a b c d *</p>
  <p class="direction2 bidi1">设定 unicode-bidi: normal。[ 1 2 3 4 5 }- a b c d *</p>
  <p class="direction2 bidi2">设定 unicode-bidi:bidi-override。[ 1 2 3 4 5 }- a b c d *</p>
  <p class="direction2 bidi3">设定 unicode-bidi:embed。[ 1 2 3 4 5 }- a b c d *</p>
</div>
<div id="inLine">
  <h3><a name="inline">对行内元素设定 direction:rtl;</a></h3>
  <p>未设定 unicode-bidi， <span class="direction2">[ 1 2 3 4 5 }- a b c d *</span></p>
  <p>设定 unicode-bidi: normal <span class="direction2 bidi1">[ 1 2 3 4 5 }- a b c d *</span></p>
  <p>设定 unicode-bidi: bidi-override <span class="direction2 bidi2">[ 1 2 3 4 5 }- a b c d *</span></p>
  <p>设定 unicode-bidi: embed <span class="direction2 bidi3">[ 1 2 3 4 5 }- a b c d *</span></p>
</div>
</body>
</html>
