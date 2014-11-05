<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>多个计数器的使用 :: 12.2.3 自动记数和编号 :: 12.2 生成的内容 :: 第12章：列表和生成的内容</title>
<style type="text/css">
<!--
* {
margin:0;
padding:0;
}
body {
padding:10px;
font:small/1.2 "宋体", serif;
background:#fff;
}
.gotoIndex {
margin-top:30px;
background:#ccc;
font-size:12px;
text-align:center;
padding:4px;
}

/* 以下是正式示例代码 */
h1:before {
content: "第" counter(chapter) "章 ";  /* 在h1前面添加文字 */
}
h1 {
font-size:1.3em;
color: #C33;
counter-increment: chapter;  /* chapter 加 1 */
counter-reset: section;  /* 设置 section 为 0 ，节在每章开始应该重新计数 */
}
h2:before {
content: counter(chapter) "." counter(section) " ";  /* 在h2前面加入文字：目前 chapter 的值 + “.”+ section的值 + 空格*/
}
h2 {
font-size:1.1em;
color: #06C;
counter-increment: section;  /* section 加 1 */
counter-reset: subsec;  /* 设置 subsec 为 0 ，小节在每节开始应该重新计数 */
}
h3:before {
font-size:1em;
content: counter(chapter) "." counter(section) "." counter(subsec) " ";  /* 在h3前面加入文字：目前 chapter 的值 + “.”+ section的值 + “.” + subsec的值 + 空格 */}
h3 {
color: #39F;
counter-increment: subsec;  /* subsec 加 1 */
}

-->
</style>
</head>
<body id="c_content">
<h1>WEB标准概述</h1>
<h2>WEB标准概述</h2>
<h2>表现与结构的分离</h2>
<h2>可访问性</h2>
<h2>难点所在</h2>
<h3>DIV+CSS不等于WEB标准</h3>
<h3>正确使用XHTML标签</h3>
<h2>SEO简介</h2>
<h1>结构与XHTML</h1>
<h2>理解结构与表现</h2>
<h3>内容</h3>
<h3>结构（Structure）</h3>
<h3>表现（Presentation）</h3>
<h3>行为（Behavior）</h3>
<h2>从HTML到XHTML</h2>
<h2>理解(X)HTML标签的语义</h2>
<div class="gotoIndex"><a href="../../index.html#chapter12" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
