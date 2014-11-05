<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>7.3 行高：line-height属性 :: 第7章：文本</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
p {
line-height:normal;
}
form {
line-height:60px;
}
#sample {
border:0;
background:#fff;
}
#sample h2 {
border:0;
text-align:left;
font-size:14px;
color:#fff;
background:url(../../img/line-height_sample_h2.gif) no-repeat;
height:31px;
line-height:31px;
text-indent:50px;
}
#lineHeight4 p {
line-height:60px;
}
#lineHeight4 fieldset{
border:0;
}
-->
</style>
</head>

<body id="c_text">
<h1>第7章：文本</h1>
<h2>7.3 行高：line-height属性</h2>
<h3><a name="height1">7.3.1 语法</a></h3>
<div id="lineHeight">
  <p style="line-height:50px;">行高50px（line-height:50px;）。行高（line-height）指的是文本行的基线（base-line）间的距离。</p>
  <p style="line-height:3em;">行高3em（line-height:3em;）。</p>
</div>
<h3><a name="height2">7.3.2 内容区域、行内框和行框</a></h3>
<div id="lineHeight2">
  <p><span style="font-size:2em;background:#F90;">字体高2em。</span><span style="font-size:1.5em;background:#09f;">字体高1.5em。</span></p>
  <p style="line-height:20px;">&lt;p&gt;行高20px。<strong style="line-height:50px;">&lt;strong&gt;行高50px。</strong><span style="line-height:30px;">&lt;span&gt;行高30px。</span></p>
  <p style="line-height:20px;">p行高20px。<strong style="line-height:50px;">行高50px。</strong>p行高20px。p行高20px。p行高20px。p行高20px。p行高20px。p行高20px。p行高20px。p行高20px。</p>
</div>
<h3><a name="height3">7.3.3 行高的计算与继承</a></h3>
<div id="lineHeight3">
  <p style="font-size:20px;line-height:2em;">字高20px，行高2em。</p>
  <p style="font-size:30px;line-height:2em;">字高30px，行高2em。</p>
  <p style="font-size:20px;line-height:10px;">字高20px，行高50%。此时多行的文字将叠加到一起。</p>
  <p style="font-size:20px;line-height:2em;">字高20px。<span style="font-size:30px; background:#F90;">字高30px。</span></p>
  <p style="font-size:20px;line-height:1em;">字高20px，行高1em，当文本为多行时可能会发生文字重叠的现象。<span style="font-size:30px;">字高30px。</span></p>
  <p style="font-size:20px;line-height:1;">字高20px，行高1（缩放因子）。<span style="font-size:30px;">字高30px，而行高也是1。</span></p>
  <p style="line-height:1em;">行高1em，本行没有图片。本行没有图片。本行没有图片。本行没有图片。高度大于行高的图片会把行框撑开。高度大于行高的图片会把行框撑开。<img src="../../img/ddcat_anim.gif" alt="图片" width="88" height="31" />高度大于行高的图片会把行框撑开。</p>
</div>
<h3><a name="err">7.3.4 浏览器的差别与错误</a></h3>
<div id="lineHeight4">
  <p>内容含有图片在[IE 6]内浏览line-height将失效。<img src="../../img/ddcat_anim.gif" alt="图片" width="88" height="31" /></p>
  <form id="testForm" action="#">
    <fieldset>
	  <p><label for="test1">表单元素</label><input type="text" maxlength="16" value="IE6内行高失效" /></p>
	</fieldset>
  </form>
</div>
<h3><a name="sample">7.3.5 应用：单行文字在垂直方向居中</a></h3>
<div id="sample">
  <h2>热门帖大盘点</h2>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter7" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
