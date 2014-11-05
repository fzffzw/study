<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>9.7 可视性：visibility属性 :: 第9章：浮动、定位与视觉格式化模型</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.sample1 {
height: 40px;
}
#visibility2 .sample1 {
display: none;
}
#visibility3 .sample1 {
visibility:hidden;
}
table {
width: 100%;
}
td {
background:#FF9;
}
.sample2 {
visibility:collapse;
}
#visibility5 a {
display:block;
text-decoration:none;
}
#visibility5 a span{
display:block;
background: #9CF;
color: #F60;
visibility:hidden;
}
#visibility5 a:hover {
border:0;  /* 使Windows IE 6.0 的:hover能正常触发 */
}
#visibility5 a:hover span{
visibility: visible;
}
-->
</style>
</head>

<body id="c_visual">
<h1>浮动、定位与视觉格式化模型</h1>
<h2>visibility[可视性]</h2>
<h3>初始状态</h3>
<div id="visibility1">
  <p>普通的段落文字</p>
  <p class="sample1">段落的内容，<strong>strong子元素</strong>。</p>
  <p>普通的段落文字</p>
</div>
<h3>display : none</h3>
<div id="visibility2">
  <p>普通的段落文字</p>
  <p class="sample1">段落的内容，<strong>strong子元素</strong>。</p>
  <p>普通的段落文字</p>
</div>
<h3>visibility : hidden</h3>
<div id="visibility3">
  <p>普通的段落文字</p>
  <p class="sample1">段落的内容，<strong>strong子元素</strong>。</p>
  <p>普通的段落文字</p>
</div>
<h3>visibility : collapse</h3>
<div id="visibility4">
<table>
  <tr>
    <td>1-1
    </td><td>1-2</td>
    <td>1-3</td>
  </tr>
  <tr class="sample2">
    <td>2-1
    </td><td>2-2</td>
    <td>2-3</td>
  </tr>
  <tr>
    <td>3-1
    </td><td>3-2</td>
    <td>3-3</td>
  </tr>
</table>
</div>
<h3><a name="sample">9.7.2 应用：显示及隐藏元素</a></h3>
<div id="visibility5">
  <p><a href="#" title="鼠标指向显示文字">指过来看看<span>隐藏的文字出现啦！</span></a></p>
  <p>后面的内容也不会移动</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter9" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
