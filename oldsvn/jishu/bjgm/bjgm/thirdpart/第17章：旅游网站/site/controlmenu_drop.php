<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<title>controlMenu层2级下拉菜单阴影实现方法 :: 首页 :: Imerl旅游网</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Imerl旅游网站，服务项目：自助游，旅行社，预订车票、旅店、宾馆，旅游景点折扣。" />
<meta name="keywords" content="旅游, 自助游, 旅行社, 预订车票, 旅店, 宾馆, 折扣票价" />
<link href="style/index.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#controlMenu ul ul {
width:78px;
float:none;
background:url(../../第17章 实例：旅游网站/site/img/controlMenu_drop2_bg.png) no-repeat left bottom;
padding:0 5px 10px 0;
}
#controlMenu ul ul li {
float:none;
margin:0 5px;
position:static;
border-top:1px dotted #CFF;
padding:1px 0;
}
#controlMenu ul ul li:first-child,
#controlMenu ul ul li.first { /* IE 6不支持:first-child，因此需要定义class */
border-top:1px solid #039;
margin:0;
padding:4px 5px 1px;
}
#controlMenu ul ul a {
display:block;
line-height:18px;
padding:0 5px;
*float:left;  /* 解决IE对代码内空格处理的Bug */
*width:5em;
}
#controlMenu ul ul a:hover {
background:#CFF;
color:#039;
text-decoration:none;
}
-->
</style>
</head>

<body id="home">
<div id="header">
  <div id="logo">
    <h1><a href="/index.html" title="前往网站首页"><img src="img/logo.gif" alt="网站Logo" width="209" height="100" /><span>Imerl旅游网</span></a></h1>
  </div>
  <div id="mainNav">
    <ul><li><a href="/index.html" title="网站首页">首页</a></li><li><a href="/blog/index.html" title="[游记]栏目首页">游记</a></li><li><a href="/photos/index.html" title="[相册]栏目首页">相册</a></li><li><a href="/activities/index.html" title="[活动]栏目首页">活动</a></li><li><a href="/forum/index.html" title="[论坛]首页">论坛</a></li></ul>
  </div>
  <div id="login">
    <form id="formLogin" action="forumHot.html">
      <fieldset>
      <legend>用户登录</legend>
      <ul class="loginInfo">
        <li>
          <label for="loginNickname">昵称：</label>
          <input type="text" id="loginNickname" maxlength="20" />
        </li>
        <li>
          <label for="loginPassword">密码：</label>
          <input type="password" id="loginPassword" maxlength="20" />
        </li>
        <li>
          <!--<input type="submit" value="登录" id="btnLoginSubmit" title="单击登录" />-->
          <!--<input type="image" src="img/btn_login.gif" name="btnLoginSubmit" id="btnLoginSubmit" title="单击登录" />-->
		  <button type="submit" id="btnLoginSubmit">登录</button>
        </li>
	  </ul>
	  <ul class="reg">
        <li><a href="/member/reg.html" title="前往注册页面">注册</a></li>
        <li><a href="/member/password1.html" title="前往找回密码页面">忘记密码</a></li>
      </ul>
      </fieldset>
    </form>
  </div>
  <div id="controlMenu">
    <ul>
      <li><a href="/service/index.html" title="客户服务项目查询">客户服务</a>
        <ul>
          <li class="first"><a href="/service/ticket.html" title="预定国内飞机、火车、船票">定票</a></li>
          <li><a href="/service/hotel.html" title="预定国内各地酒店">定酒店</a></li>
          <li><a href="/service/journey.html" title="预定国内旅行社行程">定行程</a></li>
        </ul>
      </li>
      <li><a href="/member/score/" title="积分奖励内容查询">积分奖励</a>
        <ul>
          <li class="first"><a href="/member/score/" title="查询积分情况">积分查询</a></li>
          <li><a href="/member/score/" title="使用积分换取礼品">积分换礼</a></li>
        </ul>
      </li>
      <li><a href="/member/info/" title="修改个人信息">个人信息</a>
        <ul>
          <li class="first"><a href="/member/info/" title="修改不公开的私密信息">私密信息</a></li>
          <li><a href="/member/info/" title="修改通信地址">通信地址</a></li>
          <li><a href="/member/info/" title="修改对其他用户公开的信息">公开信息</a></li>
        </ul>
      </li>
      <li><a href="/member/orderForm/" title="会员订单查询管理">订单管理</a>
        <ul>
          <li class="first"><a href="/member/orderForm/" title="目前正在执行中的订单">订单查询</a></li>
          <li><a href="/member/orderForm/" title="已结订单">历史记录</a></li>
        </ul>
      </li>
      <li><a href="/member/mail/" title="查看会员邮箱">会员邮箱</a></li>
    </ul>
  </div>
</div><!-- #header -->
</body>
</html>