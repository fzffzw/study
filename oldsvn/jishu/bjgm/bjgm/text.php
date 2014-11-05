<?php
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>jquery</title>
    <script type="text/javascript" src="jquery1.js"></script>
    <link rel="stylesheet" href="reset.css" type="text/css" media="screen" />
    <style type="text/css">
        .main {
            float: left;
            width: 100%;
        }
        .sub {
            float: left;
            width: 190px;
            margin-left: -100%;
        }
        .extra {
            float: left;
            width: 190px;
            margin-left: -190px;
        }
    </style>
</head>
<body>

<!--浠旂粏鍒嗘瀽鍚勭?甯冨眬鐨勬妧鏈?疄鐜帮紝鍙?互鍙戠幇涓嬮潰涓夌?鎶€鏈??缁忓父浣跨敤锛
娴?姩 float
璐熻竟璺 negative margin
鐩稿?瀹氫綅 relative position
杩欐槸瀹炵幇甯冨眬鐨勪笁涓?渶鍩烘湰鐨勫師瀛愭妧鏈?€傚彧瑕佸阀濡欑粍鍚堬紝骞跺姞浠ョ伒娲昏繍鐢?紝灏辫兘鈥滄嫾鈥濆嚭鍚勭?甯冨眬鐨勫疄鐜版柟妗堛€
灏濊瘯涔嬭矾鑰冭檻浠ヤ笅DOM缁撴瀯锛?->

<div id="page">
    <div id="hd">s....</div>
    <div id="bd">
        <div class="main">s</div>
        <div class="sub">f</div>
        <div class="extra">c</div>
    </div>
    <div id="ft"></div>
</div>
<!--鍒╃敤娴?姩鍏冪礌鐨勮礋杈硅窛鏉ュ畾浣嶏細
.main {
float: left;
width: 100%;
}
.sub {
float: left;
width: 190px;
margin-left: -100%;
}
.extra {
float: left;
width: 190px;
margin-left: -190px;
}-->
</body>