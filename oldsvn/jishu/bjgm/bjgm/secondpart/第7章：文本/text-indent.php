<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>7.2 文本缩进：text-indent属性 :: 第7章：文本</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
p {
padding:0;
}
#textIndent h2 {
color:#FFC;
}
#textIndent1 p {
text-indent:2em;
}
#rank {
width:150px;
background:#f7eef7;
border:0;
}
#rank ol {
margin-left:10px;
padding-left:10px;
}
#rank li {
margin-left:10px;
}
#rank h3 {
font-size:1em;
text-indent:-9999em;
background:url(../../img/rank_h3.gif) no-repeat;
height:27px;
}
-->
</style>
</head>

<body id="c_text">
<h1>第7章：文本</h1>
<h2>7.2 文本缩进：text-indent属性</h2>
<div id="textIndent0">
  <p style="margin:5px;">默认状态是无缩进的。默认状态是无缩进的。默认状态是无缩进的。默认状态是无缩进的。默认状态是无缩进的。</p>
</div>
<h3><a name="indent1">7.2.2 正值缩进</a></h3>
<div id="textIndent1">
  <h4><a name="indent1">文字方向：从左向右</a></h4>
  <p>文字缩进2个字符宽：<strong>text-indent:2em;</strong>，可以看到只有第一行文字缩进。填充文字填充文字填充文字填充文字填充文字填充文字。</p>
  <p><img src="../../img/ddcat_anim.gif" alt="图片" width="88" height="31" />带图片文字缩进2个字符宽：<strong>text-indent:2em;</strong></p>
  <p style="width:300px;text-indent:50%;">段落宽度300px，父元素&lt;div id=&quot;textIndent1&quot;&gt;宽度400px，<strong>text-indent:50% = 400px * 50% = 200px</strong>。</p>
</div>
<div id="textIndent2">
  <h4><a name="indent2">文字方向：从右向左</a></h4>
  <p style="text-indent:2em;direction:rtl;text-align:right;">填充文字填充文字填充文填充文字填充文字填充文字填充文字填充文字填充文字填充文字。文字缩进2个字符宽，文字从右向左显示。</p>
</div>
<h3><a name="indent3">7.2.3 负值缩进</a></h3>
<div id="textIndent3">
  <p style="text-indent:-2em;">情况1：使首行文字向左突出，如果未设定元素的padding-left，则文字会突出元素的左边框。<strong>text-indent:-2em;</strong></p>
  <p style="padding-left:3.5em;text-indent:-3.5em;">情况2：设定元素的padding-left，实现“悬挂缩进效果”<strong>padding-left:3.5em;text-indent:-3.5em;</strong>。填充文字，填充文字，填充文字，填充文字，填充文字，填充文字，填充文字。</p>
</div>
<h3><a name="sample">7.2.4 应用：隐藏单行文字</a></h3>
<div id="rank">
  <h3><a name="sample">热销排行榜</a></h3>
  <ol>
    <li>幸运金银十字项链</li>
    <li>珍珠满天星项链</li>
    <li>珍珠3cm长耳坠</li>
    <li>耳坠－珍珠</li>
    <li>瑞士冷钢吊坠</li>
  </ol>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter7" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
