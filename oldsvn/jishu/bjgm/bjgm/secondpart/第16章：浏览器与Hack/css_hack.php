<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>16.3 常用的CSS Hack :: 第16章：浏览器与Hack</title>
<link href="../samplecss/default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#hack1 {
border:1px solid #36C;
line-height:50px;
margin:10px 0;
background:#9CF url(../../img/bg1.gif) repeat-x;
}
body>#hack1 {
background-image: url(../../img/bg1.png);
}
#hack2 {
border:1px solid #36C;
line-height:50px;
margin:10px 0;
background:#9CF url(../../img/bg1.png) repeat-x !important;
background-image:url(../../img/bg1.gif);
}
#hack3 {
background:#9CF;
*background:#CFC;
-background:#FC6;
}
#hack3 p {
margin:0;
}
#hack4 {
margin:10px 0;
border:1px solid #36C;
background /**/:#FC6;
}
-->
</style>
</head>

<body id="c_Hack">
<h1>第16章：浏览器与Hack</h1>
<h2>16.3 常用的CSS Hack</h2>
<div id="hack1">
IE 6及以前的版本不支持透明的PNG图片
</div>
<div id="hack2">
IE 6及以前的版本不支持透明的PNG图片
</div>
<div id="hack3">
  <p>background:#9CF -- Firefox、Opera和Safari都不识别。</p>
  <p>*background:#CFC -- IE 7识别“*”不识别“_”</p>
  <p>_background: #FC6 -- IE6 识别“_”和“*”</p>
</div>
<div id="hack4">
只有IE 6没有背景颜色。
</div>
<div class="gotoIndex"><a href="../../index.html#chapter16" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
