<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>7.1 文本水平对齐：text-align属性 :: 第7章：文本</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
p {
padding:0;
}
#textAlign3 {
text-align:right;
}
#textAlign3 ul {
background:#fc3;
margin:0 5px;
}
#textAlign3 table {
padding:0;
width:390px;
margin:5px;
background:#CF0;
border-collapse: collapse;
}
#textAlign3 td,
#textAlign3 th {
width:33%;
padding:0;
margin:0;
border-right:1px solid #fff;
border-bottom:1px solid #fff;
}
#textAlign4 {
text-align:center;
}
#textAlign4 p {
width:70%;
}
-->
</style>
</head>

<body id="c_text">
<h1>第7章：文本</h1>
<h2>7.1 文本水平对齐：text-align属性</h2>
<div id="textAlign1">
  <h3><a name="align">7.1.1 语法</a></h3>
  <p style="text-align:left;"><strong><img src="../../img/ddcat_anim.gif" alt="图片" width="88" height="31" /></strong>文本左对齐：<strong>text-align: left</strong>。</p>
  <p style="text-align:right;"><img src="../../img/ddcat_anim.gif" alt="图片" width="88" height="31" />文本右对齐：<strong>text-align: right</strong>。</p>
  <p style="text-align:center;"><strong><img src="../../img/ddcat_anim.gif" alt="图片" width="88" height="31" /></strong>文本居中对齐：<strong>text-align: center</strong>。</p>
  <p style="text-align:justify;">文本两端对齐：<strong>text-align:justify</strong>。文本两端对齐，test text,文本两端对齐。test text,文本两端对齐，test text,文本两端对齐。test text,文本两端对齐。</p>
</div>
<div id="textAlign2">
  <h3><a name="block">7.1.2 适用于：块级元素</a></h3>
  <p style="text-align:right;">适用于block元素，段落&lt;p&gt;文字右对齐，<img src="../../img/ddcat_anim.gif" alt="图片" width="88" height="31" style="text-align:center;" /></p>
  <p style="text-align:center;"><img src="../../img/ddcat_anim.gif" width="88" height="31" alt="图片" /></p>
</div>
<div id="textAlign3">
  <h3><a name="inherit">7.1.3 继承</a></h3>
  <p>段落&lt;p&gt;继承了父元素&lt;div id=&quot;textAlign2&quot;&gt;的水平对齐方式：<strong>text-align:right</strong>。</p>
  <ul>
    <li>列表项&lt;li&gt;也继承<strong>text-align:right</strong></li>
    <li>列表项&lt;li&gt;也继承<strong>text-align:right</strong></li>
  </ul>
  <table>
  <tr>
    <th scope="col">&lt;th&gt;表头</th>
    <th scope="col">&lt;th&gt;表头</th>
    <th scope="col">&lt;th&gt;表头</th>
  </tr>
  <tr>
    <td>&lt;td&gt;也继承了</td>
    <td>&lt;td&gt;也继承了</td>
    <td>&lt;td&gt;也继承了</td>
  </tr>
</table>
</div>
<div id="textAlign4">
  <h3><a name="sample">7.1.4 应用：整体居中</a></h3>
  <p>本段落会在IE内居中显示，而在Firefox和Opera内居左显示。</p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter7" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
