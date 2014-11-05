<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>8.7 补白：padding属性 :: 第8章：框模型</title>
<link href="../samplecss/show.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#padding1 .sample1 {
padding: 20px;
width:330px;
height:30px;
border:10px solid #999;
}
#padding1 p span {
padding:10px;
background: #FC3;
}

#padding2 {
width:400px;
height:150px;
}
#padding2 p {
padding: 5%;
}
#padding2 em {
display:block;  /* 为了显示出p的内容区域 */
background:#CF9;
}
#padding2 .sample2 {
position:relative;  /* 生成span的包含块 */
width: 300px;
height:30px;
padding:20px;
}

#padding2 .sample2 span {
display: block;
background: #FC3;
position: absolute;
padding: 5%;
top: 0;
left: 0;
}
-->
</style>
</head>

<body id="c_box">
<h1>第8章：框模型</h1>
<h2>8.7 补白：padding属性</h2>
<h3><a name="padding1">8.7.2 补白、宽度和高度</a></h3>
<div id="padding1">
  <h3>padding和width/height</h3>
  <p class="sample1">p { width:330px; height:30px; padding:20px;}</p>
  <p>普通p内的<span>行内元素span的补白</span></p>  
</div>
<h3><a name="padding2">8.7.3 百分比值补白</a></h3>
<div id="padding2">
  <p><em>普通p，父元素宽度400px，补白为 400px*5% = 20px</em></p>
  <p class="sample2"><em>p相对定位，宽300px，高30px, 补白20px<span>绝对定位的span，padding: 5%;</span></em></p>
</div>
<div class="gotoIndex"><a href="../../index.html#chapter8" title="返回示例代码目录">返回代码目录</a></div>
</body>
</html>
