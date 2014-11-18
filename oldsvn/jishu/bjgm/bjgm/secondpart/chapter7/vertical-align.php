<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>7.4 垂直对齐：vertical-align属性 :: 第7章：文本</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
p {
line-height:7em;
}
p strong {
line-height:2em;
}
#verticalAlign p {
line-height:5em;
}
-->
</style>
</head>

<body id="c_text">
<h1>第7章：文本</h1>
<h2>7.4 垂直对齐：vertical-align属性</h2>
<h3><a name="vertical1">7.4.2 参数详解</a></h3>
<div id="verticalAlign">
  <p style="vertical-align:super;">垂直对齐对inline元素有效</p>
  <p>垂直对齐<span style="vertical-align:super;">上标</span></p>
  <p>基线对齐<strong style="font-size:2em;vertical-align:baseline;">vertical-align:baseline;</strong></p>
  <p>顶端对齐：<strong style="vertical-align:top;">vertical-align:top;</strong></p>
  <p>文本顶端对齐：<strong style="vertical-align:text-top;">vertical-align:text-top;</strong></p>
  <p>底端对齐：<strong style="vertical-align:bottom;">vertical-align:bottom;</strong></p>
  <p>文本底端对齐：<strong style="vertical-align:text-bottom;">vertical-align:text-bottom;</strong></p>
  <p>中间对齐：<strong style="vertical-align:middle;">middle</strong></p>
</div>
<div id="verticalAlign2">
  <h4><a name="image">图片和文字的对齐</a></h4>
  <p>基线对齐：<strong>vertical-align:baseline;</strong><img src="../../img/ddcat_anim.gif" alt="图片" width="88" height="31" style="vertical-align:baseline;" /></p>
  <p>顶端对齐：<strong style="vertical-align:top;">vertical-align:top;</strong><img src="../../img/ddcat_anim.gif" alt="图片" width="88" height="31" style="vertical-align:top;" /></p>
  <p>文本顶端对齐：<strong style="vertical-align:text-top;">vertical-align:text-top;</strong><img src="../../img/ddcat_anim.gif" width="88" height="31" alt="图片" style="vertical-align:text-top;" /></p>
  <p>底端对齐：<strong style="vertical-align:bottom;">vertical-align:bottom;</strong><img src="../../img/ddcat_anim.gif" alt="图片" width="88" height="31" style="vertical-align:bottom;" /></p>
  <p>文本底端对齐：<strong style="vertical-align:text-bottom;">vertical-align:text-bottom;</strong><img src="../../img/ddcat_anim.gif" width="88" height="31" alt="图片" style="vertical-align:text-bottom;" /></p>
  <p>中间对齐为基线上方0.5ex处<img src="../../img/ddcat_ad.gif" alt="图片" width="180" height="60" style="vertical-align:middle;" /></p>
  <p>上标文字<span style="vertical-align:super;">vertical-align:super;</span>下标文字<span style="vertical-align:sub;">vertical-align:sub;</span></p>
  <p style="line-height:2em;">垂直对齐<span style="vertical-align:2em;">正数向上</span>，而<span style="vertical-align:-2em;">负数向下</span>。&lt;p&gt;行高2em，而设置垂直对齐的文字撑开了行框。</p>
  <p style="line-height:40px;">行高40px：<span style="vertical-align:baseline;">baseline</span><span style="vertical-align:top;">top</span><span style="vertical-align:bottom;">bottom</span><span style="vertical-align:text-top;">text-top</span><span style="vertical-align:text-bottom;">text-bottom</span><span style="vertical-align:middle;">middle</span></p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter7" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>