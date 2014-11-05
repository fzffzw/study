<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>表单 :: 2.3.2 常用的XHTML标签和属性 :: 2.3 理解(X)HTML标签的语义 :: 第2章：结构与XHTML</title>
<style type="text/css">
<!--
body {
font: normal "宋体", serif;
background:#FFF;
}
.gotoIndex {
margin-top:30px;
background:#ccc;
font-size:12px;
text-align:center;
padding:4px;
}
-->
</style>
</head>

<body>
<form id="test_form" method="post" action="#">
  <fieldset>
    <legend>用户基本信息</legend>
    <label for="nikename">昵称：</label>
    <input name="nikename" id="nikename" type="text" size="16" maxlength="30" />
    <label for="age">年龄：</label>
    <input name="age" id="age" type="text" size="6" maxlength="8" />
	<label>密码：</label>
	<input name="password" id="password" type="password" value="" size="16" />
    <input type="radio" name="sex" id="sex_male" value="male" />
    <label for="sex_male">男</label>
    <input type="radio" name="sex" id="sex_female" value="female" />
    <label for="sex_female">女</label>
  </fieldset>
  <fieldset>
    <legend>用户联系信息</legend>
    <label for="address">地址：</label>
    <input name="address" id="address" type="text" size="32" maxlength="100" />
	<label for="postalcode">邮政编码：</label>
    <input name="postalcode" id="postalcode" type="text" size="6" maxlength="6" />
    <label for="phone">电话：</label>
    <input name="phone" id="phone" type="text" size="11" maxlength="11" />
	<label for="locus">所在地：</label>
    <select name="locus">
	  <optgroup label="直辖市">
      <option value="1">北京</option>
      <option value="2">天津</option>
      <option value="3">上海</option>
      <option value="4">重庆</option>
	  </optgroup>
	  <optgroup label="省">
      <option value="5">河北省</option>
      <option value="6">广东省</option>
	  </optgroup>
    </select>
  </fieldset>
    <input type="submit" name="btn_submit" value="提交" />
    <input type="reset" name="btn_reset" value="重置" />
</form>
  <div class="gotoIndex"><a href="../../index.html" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
