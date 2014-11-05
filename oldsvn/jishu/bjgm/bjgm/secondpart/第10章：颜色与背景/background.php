<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>10.3 背景 :: 第10章：颜色与背景</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
div,
p {
background:none;  /* 清除样例中装饰用的背景 */
}
#background1 {
background-color:#CF9;
border: 5px dashed #090;
}
#background2 em {
background-color: #CFF;
border:2px dashed #06C;
padding:5px;
}
#background2 strong {
background-color:#FC3;
}
#background3 p{
background-color: #FC6;
background-image:url(../../img/ddcat2.gif);
}
#background3 .sample1 {
background-color:#6CF;
}
#background4 em {
background-color: #CFF;
background-image:url(../../img/btn1.gif);
padding:5px;
}
#background4  strong {
background-color:#FC3;
background-image:url(../../img/btn1.gif);
}
#background5 {
background-color:#FC3;
}
#background5 p{
background-color: #CFF;
height:80px;
background-image:url(../../img/ddcat2.gif);
}
#background5 .sample2 {
background-repeat:repeat-x;
}
#background5 .sample3 {
background-repeat:repeat-y;
}
#background5 .sample4 {
background-repeat:no-repeat;
}
#background6 {
border: 5px dashed #FC0;
background-color:#CF9;
background-image:url(../../img/ddcat_ad.gif);
height:60px;
}
#background7 {
background-color:#CF9;
}
#background7 p {
background-color: #CFF;
background-image:url(../../img/ddcat3.gif);
background-position:-20px -20px;
border: 5px dashed #FC0;
}
#background8 {
background-color:#FC3;
}
#background8 p {
line-height:40px;
background-color: #CFF;
background-image:url(../../img/ddcat3.gif);
background-position: 30px 10px;
background-repeat:no-repeat;
}
#background8 .position1,
#background9 .position1 {
background-repeat:repeat;
}
#background9 {
background-color:#FC3;
}
#background9 p {
padding:10px;
width:280px;
height:80px;
background-color: #CFF;
background-image:url(../../img/ddcat_ad.gif);
background-position:30% 20%;
background-repeat:no-repeat;
}
#background10 {
background-color:#FC3;
}
#background10 p {
line-height:60px;
background-color: #CFF;
background-image:url(../../img/ddcat3.gif);
background-position: bottom 5%;
background-repeat:no-repeat;
}
#background10 .position2 {
background-position:5% bottom;
}

-->
</style>
</head>

<body id="c_background">
<h1>第10章：颜色与背景</h1>
<h2>10.3 背景</h2>
<h3><a name="color">10.3.1 背景颜色：background-color属性</a></h3>
<div id="background1">
  <p>段落文字，<em>段落内的em</em></p>
</div>
<div id="background2">
  <p>段落文字，<strong>行内strong元素</strong>，<em>行内em元素</em></p>
</div>
<h3><a name="image">10.3.2 背景图片：background-image属性</a></h3>
<div id="background3">
  <p>背景图片在背景颜色之上</p>
  <p class="sample1">背景图片在背景颜色之上</p>
</div>
<h4>行内元素</h4>
<div id="background4">
  <p>段落文字，<strong>行内strong元素</strong>，<em>行内em元素</em></p>
</div>
<h3><a name="repeat">10.3.3 背景图片重复：background-repeat属性</a></h3>
<div id="background5">
  <p>缺省情况，背景重复</p>
  <p class="sample2">背景图片在水平方向重复</p>
  <p class="sample3">背景图片在垂直方向重复</p>
  <p class="sample4">背景图片不重复</p>
</div>
<h3><a name="position">10.3.5 背景图片定位：background-position属性</a></h3>
<h4>定位的起点</h4>
<div id="background6">
  <p>段落文字</p>
</div>
<h4>负值的定位</h4>
<div id="background7">
  <p>段落文字</p>
</div>
<h4>长度值</h4>
<div id="background8">
  <p>文字</p>
  <p class="position1">文字</p>
</div>
<h4>百分比</h4>
<div id="background9">
  <p>文字</p>
  <p class="position1">文字</p>
</div>
<h4>关键字和长度值混用</h4>
<div id="background10">
  <p>文字</p>
  <p class="position2">文字</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter10" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>