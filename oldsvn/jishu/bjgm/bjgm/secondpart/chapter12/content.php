<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>12.2.1 :before和:after伪元素 :: 12.2 生成的内容 :: 第12章：列表和生成的内容</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
h3,
h4 {
clear:both;
border-bottom:1px dashed;
}
body {
text-align:left;
}
p.note {
color:#C00;
border: 1px solid #F90;
background:#FFC;
line-height:2em;
}
p.note:before {
content: "提示：";
font-weight:bold;
}
p.end {
line-height:2em;
}
p.end:after {
content: "-=本章结束=-";
display:block;
text-align:right;
}
#content1 h4:before {
color:#FFF;
content:"<span>content:</span>";
}
#content1 p:before {
display: block;
text-align: center;
white-space: pre;
color:#999;
content: "样例段落\A **********";
}
#content2 p:before {
content:url(../../img/btn1.gif) "提示：";
}
#content3 a:after {
content: "[" attr(href) "]";
}
div:after {
display:block;
text-align:right;
color:#FFF;
content: "[id: " attr(id) "]";
}
span span {
color:#F00;
}
#content4 span:before {
content:open-quote;
}
#content4 span:after {
content:close-quote;
}
#content5 span:before {
content:open-quote;
}
#content5 span:after {
content:close-quote;
}
#content5 span {
quotes:"[" "]" "(" ")";
}
#content5 em:before {
content:open-quote;
}
#content5 em:after {
content:close-quote;
}

.quote1 span {
quotes:"{" "}" "[" "]" "(" ")";
}
.quote1  span:before,
.quote1  em:before,
#content7 strong:before,
#content8 strong:before {
content:open-quote;
}
.quote1  span:after,
.quote1  em:after,
#content7 strong:after {
content:close-quote;
}
#content8 strong:before {
content : no-open-quote;
}
#content8 strong:after {
content:no-close-quote;
}
-->
</style>
</head>
<body id="c_content">
<h1>第12章：列表和生成的内容</h1>
<h2>12.2 生成的内容</h2>
<h3>12.2.1 :before和:after伪元素</h3>
<p class="note">:before和:after必须和CSS的content属性配合使用。</p>
<p class="end">本章介绍了列表和生成的内容，下一章将介绍与用户界面相关的CSS属性。</p>
<h3><a name="content">12.2.2 生成内容：content属性</a></h3>
<div id="content1">
  <h4>字符串值</h4>
  <p>内容文字。内容文字。内容文字。内容文字。内容文字。</p>
</div>
<div id="content2">
  <h4>URI</h4>
  <p>内容文字。内容文字。内容文字。内容文字。内容文字。</p>
</div>
<div id="content3">
  <h4>属性值</h4>
  <p>您可以：<a href="http://www.ddcat.net/" title="访问猫窝">访问猫窝</a>，或者<a href="http://bbs.ddcat.net/" title="去猫沙盆">去猫沙盆</a>淘宝。</p>
</div>
<div>
  没有id的div。
</div>
<div id="content4">
  <h4>引用标记</h4>
  <p>嵌套：<span>span中的<span>span</span>。</span></p>
</div>
<div id="content5">
  <h4>引用标记2</h4>
  <p>嵌套：<span>span中的<span>span</span>。</span></p>
  <p>嵌套：<span>span中的<em>em</em>。</span></p>
</div>
<div id="content6" class="quote1">
  <h4>引用标记3</h4>
  <p>嵌套：<span>span中的<strong>strong中<em>em</em></strong></span>。</p>
</div>
<div id="content7" class="quote1">
  <h4>引用标记4</h4>
  <p>嵌套：<span>span中的<strong>strong中<em>em</em></strong></span>。</p>
</div>
<div id="content8" class="quote1">
  <h4>引用标记4</h4>
  <p>嵌套：<span>span中的<strong>strong中<em>em</em></strong></span>。</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter12" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
