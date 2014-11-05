<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>12.1.5 浏览器对列表的表现与样式的继承 :: 12.1 列表 :: 第12章：列表和生成的内容</title>
<style type="text/css">
<!--
h3,
h4 {
border-bottom:1px dashed;
}
body {
margin:0;
padding:20px;
}
#s1 ul {
background:#FC6;
border:3px solid #F90;
}
#s1 li {
background:#FF9;
border:2px solid #6C0;
border-left-width:15px;
}
#list2 {
padding:0;
}
#list2 li {
margin:0 0 0 20px;
border-width:2px;
padding-left:20px;
}
#list3 {
list-style:inside;
}
#list4 {
padding:0;
}
#list4 li {
border-width:2px;
}
#s2 ul {
padding-left:2em;
background: #FC6;
list-style:inside square;
}
#list6 li{
list-style-type:square;
}
#list7 ol li {
list-style:lower-roman;
}
-->
</style>
</head>
<body id="c_list">
<h1>第12章：列表和生成的内容</h1>
<h2>12.1 列表</h2>
<div id="s1">
<h3>浏览器对列表的显示差异</h3>
<h4>outside</h4>
<ul id="list1">
  <li>浏览器对列表的显示差异，列表的显示差异</li>
  <li>浏览器对列表的显示差异，列表的显示差异</li>
  <li>浏览器对列表的显示差异，列表的显示差异</li>
</ul>
<ul id="list2">
  <li>浏览器对列表的显示差异，列表的显示差异</li>
  <li>浏览器对列表的显示差异，列表的显示差异</li>
  <li>浏览器对列表的显示差异，列表的显示差异</li>
</ul>
<h4>inside</h4>
<ul id="list3">
  <li>浏览器对列表的显示差异，列表的显示差异</li>
  <li>浏览器对列表的显示差异，列表的显示差异</li>
  <li>浏览器对列表的显示差异，列表的显示差异</li>
</ul>
<h4>ul { padding : 0; }</h4>
<ul id="list4">
  <li>浏览器对列表的显示差异，列表的显示差异</li>
  <li>浏览器对列表的显示差异，列表的显示差异</li>
  <li>浏览器对列表的显示差异，列表的显示差异</li>
</ul>
</div>
<div id="s2">
<h3>列表的嵌套</h3>
<ul id="list5">
  <li>内容文字</li>
  <li>嵌套ol
    <ol>
	  <li>嵌套的ol的li</li>
	  <li>嵌套的ol的li</li>
	  <li>嵌套的ol的li</li>
	</ol>
  </li>
  <li>嵌套ul
    <ul>
	  <li>嵌套的ul的li</li>
	  <li>嵌套的ul的li</li>
	  <li>嵌套的ul的li</li>
	</ul>
  </li>
</ul>
<ul id="list6">
  <li>内容文字</li>
  <li>嵌套ol
    <ol>
	  <li>嵌套的ol的li</li>
	  <li>嵌套的ol的li</li>
	  <li>嵌套的ol的li</li>
	</ol>
  </li>
  <li>嵌套ul
    <ul>
	  <li>嵌套的ul的li</li>
	  <li>嵌套的ul的li</li>
	  <li>嵌套的ul的li</li>
	</ul>
  </li>
</ul>
<ul id="list7">
  <li>内容文字</li>
  <li>嵌套ol
    <ol>
	  <li>嵌套的ol的li</li>
	  <li>嵌套的ol的li</li>
	  <li>嵌套的ol的li</li>
	</ol>
  </li>
  <li>嵌套ul
    <ul>
	  <li>嵌套的ul的li</li>
	  <li>嵌套的ul的li</li>
	  <li>嵌套的ul的li</li>
	</ul>
  </li>
</ul>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter12" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
