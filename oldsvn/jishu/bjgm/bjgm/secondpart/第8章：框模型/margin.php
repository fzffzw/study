<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>8.9 边距：margin属性 :: 第8章：框模型</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
p {
margin:0;
}
#table1 {
background: #06C;
margin:20px;
width:360px;
border-collapse:collapse;
}
#table1 th,
#table1 td {
background:#FF9;
margin:20px;
border-bottom:1px solid #F90;
}
#table1 caption {
background: #FC6;
margin: 10px;
}
#table1 thead {
margin: 10px;
}
.sample1 img {
margin-left: 30px;
margin-right: 55px;
}
.sample2 {
padding:0 20px;  /* 左右20px补白 */
margin:10px;
}
.sample2 img{
margin-left: 10px;
margin-right: 20px;
}
.sample2 strong {
margin-left:30px;
margin-right:30px;
}
#margin2 p {
margin-top: 10px;
margin-bottom: 20px;
}
#margin2 .sample3 {
line-height: 30px;
}
#margin2 .sample3 strong {
margin-top: 50px;
}
#margin2  .sample3 img {
margin: 10px 0;
}

#margin3 p {
margin: 5%;
}
#margin3 .sample4 {
position:relative;
width: 300px;
height:30px;
padding:20px;
}
#margin3 .sample4 span {
position:absolute;
margin:5%;
display: block;
background:#FC3;
top: 0;
left: 0;
}
#margin4 {
line-height:30px;
}
#margin4 .sample5 {
margin: 0 -20px;
background: #FC3;
}
#margin4 .sample6 {
width: 80%;
margin:-20px 0 0 0;
background: #FC3;
}
#margin4 .sample7 {
width: 80%;
margin-bottom:-20px;
background: #FC3;
}
#margin4 .sample8 {
width: 80%;
margin:0 0 -20px -20px;
background: #FC3;
}
.sample9 {
margin-bottom: 20px;
}
.sample10 {
margin-top: -10px;
}

-->
</style>
</head>

<body id="c_box">
<h1>第8章：框模型</h1>
<h2>8.9 边距：margin属性</h2>
<h3><a name="table">表格类元素的margin</a></h3>
<div>
<table id="table1">
  <caption>
    表格标题margin: 10px;
  </caption>
  <thead>
  <tr>
    <td colspan="3">演示表格thead</td>
  </tr>
  </thead>
  <tr>
    <th scope="row">第1行</th>
    <td>margin:20px;</td>
    <td>margin:20px;</td>
  </tr>
  <tr>
    <th scope="row">第2行</th>
    <td>2</td>
    <td>2</td>
  </tr>
  <tfoot>
  <tr>
    <td colspan="3">演示表格tfoot</td>
  </tr>
  </tfoot>
</table>
</div>
<h3><a name="margin1">8.9.1 水平方向的边距：margin-left属性和margin-right属性</a></h3>
<div id="margin1">
  <p class="sample1"><img src="../../img/ddcat_anim.gif" alt="示例图片" title="示例图片" width="88" height="31" /><img src="../../img/ddcat_anim.gif" alt="示例图片" title="示例图片" width="88" height="31" />文字</p>
  <p class="sample2"><img src="../../img/ddcat_anim.gif" alt="示例图片" title="示例图片" width="88" height="31" /><img src="../../img/ddcat_anim.gif" alt="示例图片" title="示例图片" width="88" height="31" />文字</p>
  <p class="sample2"><strong>非替换行内元素</strong>的水平边距</p>
</div>
<h3><a name="margin2">8.9.2 垂直方向的边距：margin-top属性和margin-bottom属性</a></h3>
<div id="margin2">
  <p class="sample3"><strong>strong, margin-top:50px;</strong>p行高为30px;</p>
  <p class="sample3"><img src="../../img/ddcat_anim.gif" alt="示例图片" title="示例图片" width="88" height="31" />文字x</p>
  <p>margin-top : 10px; margin-bottom: 20px;</p>
  <p>margin-top : 10px; margin-bottom: 20px;</p>
</div>
<h3>8<a name="margin3">.9.3 百分比值边距</a></h3>
<div id="margin3">
  <p>普通p，父元素宽度400px，边距为400px*5% = 20px</p>
  <p class="sample4">p相对定位，宽300px，高30px, 补白各20px<span>绝对定位的span，margin: 5%;</span></p>
</div>
<h3><a name="margin4">8.9.4 负值边距</a></h3>
<div id="margin4">
  <p>普通p</p>
  <p class="sample5">p，左右边距 -20px</p>
  <p>普通p</p>
  <p class="sample6">p，上边距 -20px</p>
  <p>普通p</p>
  <p class="sample7">p，下边距 -20px</p>
  <p>普通p</p>
  <p class="sample8">p，左边距和下边距 -20px</p>
</div>
<div id="margin5">
  <h4>负值边距的重叠</h4>
  <p class="sample9">下边距20px;</p>
  <p class="sample10">上边距 -10px</p>
</div>
<div style="overflow: scroll">
  <p>dddd</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter8" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
