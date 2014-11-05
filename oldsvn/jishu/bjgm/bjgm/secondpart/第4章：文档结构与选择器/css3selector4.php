<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>4.7.4 UI元素伪类和伪元素 :: 4.7 CSS 3新增选择器前瞻 :: 第4章：文档结构与选择器</title>
<style type="text/css">
<!--
body {
font-family: "宋体", serif;
background:#FFF;
}
.gotoIndex {
margin-top:30px;
background:#ccc;
font-size:12px;
text-align:center;
padding:4px;
clear:both;
}

/*以下是正式示例代码*/
ul {
margin:0;
padding:0;
}
li {
list-style:none;
padding:2px;
}
input[type="text"]:enabled {
border:1px solid blue;
}
input[type="text"]:disabled {
border:1px solid gray;
}
input:checked {
background:red;
}
::selection {
background:yellow;
color:red;
}
:target {
background:red;
}
-->
</style>
</head>

<body id="c_selector">
<h1>第4章：文档结构与选择器</h1>
<h2>4.7 CSS 3新增选择器前瞻</h2>
<h3>4.7.4 UI元素伪类和伪元素</h3>
<p><a name="top">top</a></p>
<form id="form1" method="post" action="#">
  <fieldset>
    <legend>信息登记</legend>
	<ul>
      <li><label for="nikename">昵称：</label>
        <input name="nikename" type="text" size="16" maxlength="30" />	    
      </li>
	  <li><label for="age">年龄：</label>
        <input name="age" type="text" size="10" maxlength="12" disabled="disabled" />
	  </li>
	  <li><label for="password">密码：</label>
	    <input name="password" type="password" id="password" value="" size="16" />
	  </li>
	  <li>性别：
	    <label><input type="radio" name="sex" value="male" />男</label>
	    <label><input type="radio" name="sex" value="female" />女</label>
	  </li>
	  <li>爱好：
	    <label><input name="hobby" type="checkbox" value="1" />体育</label>
	    <label><input name="hobby" type="checkbox" value="2" />文学</label>
    	<label><input name="hobby" type="checkbox" value="3" />艺术</label> 
	  </li>
	  <li>
        <label>所在城市：
        <select name="city">
          <option value="1" selected="selected">北京</option>
          <option value="2">上海</option>
          <option value="3">天津</option>
        </select></label>
	  </li>
	  <li>
	    <label>签名：
	    <textarea name="textfield" cols="16" rows="5"></textarea>
	    </label>
	  </li>
	</ul>
  </fieldset>
</form>
<p><a href="#top">回到页首</a></p>
<div class="gotoIndex"><a href="../../index.html#chapter4" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
