<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>10.2 前景色：color属性 :: 第10章：颜色与背景</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#color1 {
color:#C30;
}
#color2 {
color:#666;
}
/* 设置div“color2”内的链接样式 */
#color2 a:link{
color:#06f;
}
#color2 a:visited {
color:#960;
}
#color2 a:hover {
color:#F00;
}
#color2 ul {
margin:5px;
padding:10px;
background:#CF9;
}
/* 设置 “color2”内的li的链接样式 */
#color2 li a:link {
color:#063;
}
#color2 li a:visited {
color:#699;
}
#color2 li a:hover {
color:#C00;
}
/* 设置 “color2”内的li内的“here”类链接样式 */
#color2 li a.here {
color:#F00;
}
#color3 img {
color:#F60;
border:2px solid;
}
form {
width:400px;
margin:auto;
background:#6C3;
color:#C30;
text-align:left;
font:small/2 "宋体", serif;
}
input {
color: #09F;
}
-->
</style>
</head>

<body id="c_color">
<h1>第10章：颜色与背景</h1>
<h2>10.2 前景色：color属性</h2>
<div id="color1">
  <p>段落文字，<em>段落内的em</em>，<a href="http://www.ddcat.net/" title="访问猫窝">访问猫窝</a></p>
</div>
<h3><a name="link">链接</a></h3>
<div id="color2">
  <p>段落内的<a href="http://www.ddcat.net/" title="访问猫窝">链接文字</a></p>
  <ul>
    <li>列表内的<a href="http://www.ddcat.net/blog/" title="访问猫窝博客">猫窝博客</a></li>
    <li>列表内的<a href="http://www.ddcat.net/bbs2007/" title="访问猫窝论坛" class="here">猫窝论坛</a></li>
    <li>列表内的<a href="http://www.ddcat.net/" title="访问猫窝">访问猫窝</a></li>
  </ul>
</div>
<h3><a name="border">边框</a></h3>
<div id="color3">
  <p><img src="../../img/ddcat_96.jpg" alt="示例图片" width="96" height="96" /></p>
</div>
<h3><a name="form">表单元素</a></h3>
<form id="testForm" action="#">
  <fieldset>
	<legend>示例表单</legend>
	<p><label for="test1">姓名：</label>
	<input name="test1" id="test1" /></p>
	<p><input id="sex1" name="sex" type="radio" value="m" /><label for="sex1">男</label>
	   <input id="sex2" name="sex" type="radio" value="f" /><label for="sex2">女</label></p>
	<p><label for="test3">城市：</label>
	  <select name="test3" id="test3">
        <option>选择1</option>
        <option>选择2</option>
        <option>选择3</option>
      </select>
	</p>
	<p><label for="test4">留言：</label>
	<textarea name="test4" cols="30" rows="3" id="test5"></textarea></p>
  </fieldset>
</form>
<div class="gotoIndex"><a href="../../index.html#chapter10" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>