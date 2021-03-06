<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>8.1 框模型（Box Model） :: 第8章：框模型</title>
<style type="text/css">
<!--
* {    /* 清除浏览器默认的样式 */
margin:0;
padding:0;
color:#666;
}
div {
background:#FC6;
border:4px solid #F90;
}
ul {
background: #FC6;
padding:10px;    /* 缩写：上右下左全部都是10px */
margin:10px;
list-style:none;   /* 不显示圆点 */
}
li {
background:#FF9;
margin:15px;
padding:10px 0 10px 10px;      /* 缩写的顺序是：上 右 下 左 */
}
.sample {
border-width: 5px;
border-style: dashed;
border-color:#F90;
margin-right:0;
}
.sample2 {
margin-top:10px;
}
.sample2 strong {
background:#6C3;
margin:10px;
padding:10px;
}
-->
</style>
</head>

<body id="c_box">
<h1>第8章：框模型</h1>
<h2>8.1 框模型（Box Model）</h2>
<ul>
  <li>第1个li里面的示例文字示例文字</li>
  <li class="sample">第2个li里面的示例文字，示例文字，示例文字，示例文字</li>
</ul>
<div>ul下面的div</div>
<div class="sample2">div是块级元素，而<strong>strong是行内元素</strong></div>
<div class="gotoIndex"><a href="../../index.html#chapter8" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
