<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>7.4.5 单元格的垂直对齐 :: 7.4 垂直对齐：vertical-align属性 :: 第7章：文本</title>
<style type="text/css">
<!--
body {
font:12px "宋体", sans-serif;
padding:10px;
background:#fff;
color:#000;
}
h1,
h2 {
line-height:2em;
font-size:1.2em;
color:#030;
text-align:center;
border-bottom:1px dotted;
margin-bottom:5px;
}
h3 {
text-align:center;
}
div {
height:100%;
background: #6C3;
border:1px solid #060;
clear:both;
margin:0 auto 10px;
width:500px;
}
table {
width:494px;
border-collapse:separate;
margin:3px;
}
p, td {
background:#ff9;
}
p {
margin:5px;
}
td {
height:70px;
}
td span {
line-height:normal;
}
.table2 td {
line-height:40px;
}
-->
</style>
</head>

<body id="c_text">
<h1>第7章：文本</h1>
<h2>7.4 垂直对齐：vertical-align属性</h2>
<h3>7.4.5 单元格的垂直对齐</h3>
<div id="verticalAlign">
  <p style="height:3em;">未设定行高的段落</p>
  <table>
    <tr>
	  <td style="height:3em;">未设定行高的单元格</td>
	</tr>
  </table>
  <table class="table2" summary="单元格不设定垂直对齐，同一单元格内的元素设定不同的垂直对齐方式">
    <caption>
    同一单元格内的垂直对齐（行高40px）
    </caption>
    <tr>
      <td>单元格行高40px：<span style="vertical-align:baseline;">baseline</span><span style="vertical-align:top;">top</span><span style="vertical-align:bottom;">bottom</span><span style="vertical-align:text-top;">text-top</span><span style="vertical-align:text-bottom;">text-bottom</span><span style="vertical-align:middle;">middle</span></td>
    </tr>
    <tr>
      <td>单元格行高40px：<span style="vertical-align:baseline;">baseline</span><img src="../../img/btn1.gif" alt="img" width="21" height="20" style="vertical-align:baseline;" /><span style="vertical-align:top;">top</span><img src="../../img/btn1.gif" alt="img" width="21" height="20" style="vertical-align:top;" /><span style="vertical-align:bottom;">bottom</span><img src="../../img/btn1.gif" alt="img" width="21" height="20" style="vertical-align:bottom;" /><span style="vertical-align:text-top;">text-top</span><img src="../../img/btn1.gif" alt="img" width="21" height="20" style="vertical-align:text-top;" /><span style="vertical-align:text-bottom;">text-bottom</span><img src="../../img/btn1.gif" alt="img" width="21" height="20" style="vertical-align:text-bottom;" /><span style="vertical-align:middle;">middle</span><img src="../../img/btn1.gif" alt="img" width="21" height="20" style="vertical-align:middle;" /></td>
    </tr>
    <tr>
      <td>单元格行高40px：<img src="../../img/btn1.gif" alt="img" width="21" height="20" style="vertical-align:baseline;" /><img src="../../img/btn1.gif" alt="img" width="21" height="20" style="vertical-align:top;" /><img src="../../img/btn1.gif" alt="img" width="21" height="20" style="vertical-align:bottom;" /><img src="../../img/btn1.gif" alt="img" width="21" height="20" style="vertical-align:text-top;" /><img src="../../img/btn1.gif" alt="img" width="21" height="20" style="vertical-align:text-bottom;" /><img src="../../img/btn1.gif" alt="img" width="21" height="20" style="vertical-align:middle;" /></td>
    </tr>
  </table>
  <table>
    <caption>未设定单元格行高</caption>
    <tr>
      <td>无设定</td>
      <td style="vertical-align:baseline;">基线baseline</td>
      <td style="vertical-align:top;">top</td>
      <td style="vertical-align:bottom;">bottom</td>
      <td style="vertical-align:text-top;">text-top</td>
      <td style="vertical-align:text-bottom;">text-bottom</td>
      <td style="vertical-align:middle;">middle</td>
    </tr>
  </table>
  <table class="table2">
    <caption>
    设定单元格行高40px
    </caption>
    <tr>
      <td>无设定</td>
      <td style="vertical-align:baseline;">基线baseline</td>
      <td style="vertical-align:top;">top</td>
      <td style="vertical-align:bottom;">bottom</td>
      <td style="vertical-align:text-top;">text-top</td>
      <td style="vertical-align:text-bottom;">text-bottom</td>
      <td style="vertical-align:middle;">middle</td>
    </tr>
  </table>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter7" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
