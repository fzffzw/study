<?php 
	header('Content-type:text/html;charset=utf-8');
	
		
		$easipay_key = 'ds12345'; //trim($payment['easipay_key']); 私钥

		
		//以下为协议参数 
		
		$InputCharset = '1';
		
		$Version = 'v1.0';
		
		$Language = '1';
		
		$SignType = '1';
		
		$PageUrl = 'http://localhost:8088/HT/'; //return_url(basename(__FILE__, '.php'))
		
		$BgUrl = 'http://192.168.0.122/index.do';
		
		$ShowUrl = 'http://192.168.0.122/index.do';
		

		
		//以下是业务参数
		$MerchantOrderId = '20130712164439';
		
		$AssBillNo = '123456789';
		
		$TradeName ='电商网站';
		$TradeCode = 'hg456'; //trim($payment['easipay_tradecode']);
		//$TradeCode = '111111111';
		$SrcNcode = '1000001'; //trim($payment['easipay_account']);
		
		//$OrderCommitTime = date('YmdHIs',time());
		$OrderCommitTime='20071117020101';
		
		$SenderName = '张三';
		
		$SenderTel = '021-888888888';
		
		$SenderCompanyName = '海购购物网站';
		
		$SenderAddr = '芝加哥350号';
		
		$SenderZip='201020';
		
		$SenderCity = '芝加哥';
		
		$SenderProvince = '伊利诺伊州';
		
		$SenderCountry='USA'; //香港
		
		$CargoDescript = '电器相关物品';
		
		$AllCargoTotalPrice = number_format('800.00', 2, '.', '');
		
		$AllCargoTotalTax = number_format('60.58', 2, '.', '');
		
		$ExpressPrice= number_format('100.50', 2, '.', '');
		
		//$OtherPrice = number_format('100.00', 2, '.', '');
		
		$PayTotalPrice = number_format('961.08', 2, '.', '');
		
		$PayCUR = 'CNY';
		
		$CrtCountryCode = 'AO';
		$CrtAccount ='356000023';
		$CrtAccountName = '李四';

		
		
		$CrtCUR = 'USD';
		
		$RecCountry = '中国';
		
		$RecProvince='上海';
		
		$RecCity='上海';
		
		$RecAddress='浦东新区亮秀路112号';
		
		$RecZip = intval('200135');
		
		$CargoTypeNum=3;
		
		$CargoName = 'iphone4^GALAXY S4';
		
		$CargoCode = '100000^100001'; //这个编码现在还不知道东方支付
		
		$HSCode = 'HG-100000^HG1000001';
		
		$CargoOrigin = '美国^加拿大';
		
		$CargoNum = intval('2').'^'.intval('1');
		
		$CargoUnit = '部^部';
		
		$CargoUnitPrice = number_format('300.00', 2, '.', '').'^'.number_format('200.00', 2, '.', '');
		
		$CargoTotalPrice=number_format('600.00', 2, '.', '').'^'.number_format('200.00', 2, '.', '');
		
		$CargoTotalTax=number_format('20.50', 2, '.', '').'^'.number_format('40.08', 2, '.', '');
		
		//$ShippingAddr= '广东省深圳市福田区福田大厦中部2308';
		
		//$Spt1 = 'aaa';
		
		//$Spt2 = 'bbb';
		//按次序组合订单信息为待签名串


        /* 生成加密签名串 请务必按照如下顺序和规则组成加密串！*/
        $signmsgval = '';
        $signmsgval = append_param($signmsgval, "InputCharset", $InputCharset);
        $signmsgval = append_param($signmsgval, "Version",  $Version);
        $signmsgval = append_param($signmsgval, "Language", $Language);
        $signmsgval = append_param($signmsgval, "SignType", $SignType);
        $signmsgval = append_param($signmsgval, "PageUrl", $PageUrl);
        $signmsgval = append_param($signmsgval, "BgUrl", $BgUrl);
		$signmsgval = append_param($signmsgval, "ShowUrl", $ShowUrl);
        $signmsgval = append_param($signmsgval, "MerchantOrderId", $MerchantOrderId);
        $signmsgval = append_param($signmsgval, "AssBillNo", $AssBillNo);
        $signmsgval = append_param($signmsgval, "TradeName", $TradeName);
        $signmsgval = append_param($signmsgval, "TradeCode", $TradeCode);
        $signmsgval = append_param($signmsgval, "SrcNcode", $SrcNcode);
        $signmsgval = append_param($signmsgval, "OrderCommitTime", $OrderCommitTime);
        $signmsgval = append_param($signmsgval, "SenderName", $SenderName);
        $signmsgval = append_param($signmsgval, "SenderTel", $SenderTel);
        $signmsgval = append_param($signmsgval, "SenderCompanyName", $SenderCompanyName);
        $signmsgval = append_param($signmsgval, "SenderAddr", $SenderAddr);
        $signmsgval = append_param($signmsgval, "SenderZip", $SenderZip);
        $signmsgval = append_param($signmsgval, "SenderCity", $SenderCity);
        $signmsgval = append_param($signmsgval, "SenderProvince", $SenderProvince);
        $signmsgval = append_param($signmsgval, "SenderCountry", $SenderCountry);
        $signmsgval = append_param($signmsgval, "CargoDescript", $CargoDescript);
        $signmsgval = append_param($signmsgval, "AllCargoTotalPrice", $AllCargoTotalPrice);
        $signmsgval = append_param($signmsgval, "AllCargoTotalTax", $AllCargoTotalTax);
        $signmsgval = append_param($signmsgval, "ExpressPrice", $ExpressPrice);
		//$signmsgval = append_param($signmsgval, "OtherPrice", $OtherPrice);
		$signmsgval = append_param($signmsgval, "PayTotalPrice", $PayTotalPrice);
		$signmsgval = append_param($signmsgval, "PayCUR", $PayCUR);
		$signmsgval = append_param($signmsgval, "CrtCountryCode", $CrtCountryCode);
		$signmsgval = append_param($signmsgval, "CrtAccount", $CrtAccount);
		$signmsgval = append_param($signmsgval, "CrtAccountName", $CrtAccountName);
		$signmsgval = append_param($signmsgval, "CrtCUR", $CrtCUR);
		$signmsgval = append_param($signmsgval, "RecCountry", $RecCountry);
		$signmsgval = append_param($signmsgval, "RecProvince", $RecProvince);
		$signmsgval = append_param($signmsgval, "RecCity", $RecCity);
		$signmsgval = append_param($signmsgval, "RecAddress", $RecAddress);
		$signmsgval = append_param($signmsgval, "RecZip", $RecZip);
		$signmsgval = append_param($signmsgval, "CargoTypeNum", $CargoTypeNum);
		$signmsgval = append_param($signmsgval, "CargoName", $CargoName);	
		$signmsgval = append_param($signmsgval, "CargoCode", $CargoCode);
		$signmsgval = append_param($signmsgval, "HSCode", $HSCode);
		$signmsgval = append_param($signmsgval, "CargoOrigin", $CargoOrigin);
		$signmsgval = append_param($signmsgval, "CargoNum", $CargoNum);
		$signmsgval = append_param($signmsgval, "CargoUnit", $CargoUnit);
		$signmsgval = append_param($signmsgval, "CargoUnitPrice", $CargoUnitPrice);
		$signmsgval = append_param($signmsgval, "CargoTotalPrice", $CargoTotalPrice);
		$signmsgval = append_param($signmsgval, "CargoTotalTax", $CargoTotalTax);
		//$signmsgval = append_param($signmsgval, "Spt1", $Spt1);
		//$signmsgval = append_param($signmsgval, "Spt2", $Spt2);
		
		$signmsgval.=$easipay_key;
		//MD5 签名
        $SignMsg    = strtoupper(MD5($signmsgval));    //安全校验域 不可空

        
        
        
		 // 生成待签名支付串 
		 //$sign_text = "InputCharset=" . $InputCharset . "&Version=" . $Version . "&Language=" . $Language . "&SignType=" . $SignType . "&PageUrl=".$PageUrl."&BgUrl=" . $BgUrl . "&ShowUrl=" . $ShowUrl ."&MerchantOrderId=" . $MerchantOrderId . "&AssBillNo=" . $AssBillNo . "&TradeName=" . $TradeName . "&TradeCode=" . $TradeCode ."&SrcNcode=" . $SrcNcode . "&OrderCommitTime=" . $OrderCommitTime . "&SenderName=" . $SenderName . "&SenderTel=" . $SenderTel."&SenderCompanyName=" . $SenderCompanyName . "&SenderAddr=" . $SenderAddr . "&SenderZip=" . $SenderZip . "&SenderCity=" . $SenderCity."&SenderProvince=" . $SenderProvince . "&SenderCountry=" . $SenderCountry . "&CargoDescript=" . $CargoDescript . "&AllCargoTotalPrice=" . $AllCargoTotalPrice."&AllCargoTotalTax=" . $AllCargoTotalTax."&ExpressPrice=" . $ExpressPrice. "&OtherPrice=".$OtherPrice."&PayTotalPrice=" . $PayTotalPrice."&PayCUR=" . $PayCUR."&CrtCountryCode=" . $CrtCountryCode."&CrtAccount=" . $CrtAccount."&CrtAccountName=" . $CrtAccountName."&CrtCUR=" . $CrtCUR."&RecCountry=".$RecCountry."&RecProvince=".$RecProvince."&RecCity=".$RecCity."&RecAddress=".$RecAddress."&RecZip=".$RecZip."&CargoTypeNum=" . $CargoTypeNum."&CargoName=" . $CargoName."&CargoCode=" . $CargoCode."&HSCode=" . $HSCode."&CargoOrigin=" . $CargoOrigin."&CargoNum=" . $CargoNum."&CargoUnit=" . $CargoUnit."&CargoUnitPrice=" . $CargoUnitPrice."&CargoTotalPrice=".$CargoTotalPrice."&CargoTotalTax=" . $CargoTotalTax.$easipay_key;
		
		echo $signmsgval;
		echo '<br/>';
		echo $SignMsg;
		
		//MD5 签名 
		//$SignMsg =MD5($sign_text);
		
		
		//对所有参数(包括签名)进行 URL encoding
		$InputCharset = urlencode($InputCharset);
		$Version = urlencode($Version);
		$Language = urlencode($Language);
		$SignType = urlencode($SignType);
		$PageUrl = urlencode($PageUrl);
		$BgUrl = urlencode($BgUrl);
		$ShowUrl = urlencode($ShowUrl);
		$MerchantOrderId = urlencode($MerchantOrderId);
		$AssBillNo = urlencode($AssBillNo);
		$TradeName = urlencode($TradeName);
		$TradeCode = urlencode($TradeCode);
		$SrcNcode = urlencode($SrcNcode);
		$RecCountry = urlencode($RecCountry);
		$RecProvince = urlencode($RecProvince);
		$RecCity = urlencode($RecCity);
		$RecAddress = urlencode($RecAddress);
		$OrderCommitTime = urlencode($OrderCommitTime);
		$SenderName = urlencode($SenderName);
		$SenderTel = urlencode($SenderTel);
		$SenderCompanyName = urlencode($SenderCompanyName);
		$SenderAddr = urlencode($SenderAddr);
		$SenderZip = urlencode($SenderZip);
		$SenderCity = urlencode($SenderCity);
		$SenderProvince = urlencode($SenderProvince);
		$SenderCountry = urlencode($SenderCountry);
		$CargoDescript = urlencode($CargoDescript);
		$AllCargoTotalPrice = urlencode($AllCargoTotalPrice);
		$AllCargoTotalTax = urlencode($AllCargoTotalTax);
		$ExpressPrice = urlencode($ExpressPrice);
		//$OtherPrice = urlencode($OtherPrice);
		$PayTotalPrice = urlencode($PayTotalPrice);
		$PayCUR = urlencode($PayCUR);
		$CrtCountryCode = urlencode($CrtCountryCode);
		$CrtAccount = urlencode($CrtAccount);
		$CrtAccountName = urlencode($CrtAccountName);
		$CrtCUR = urlencode($CrtCUR);
		//$ShippingAddr = urlencode($ShippingAddr);
		$CargoTypeNum = urlencode($CargoTypeNum);
		$CargoName = urlencode($CargoName);
		$CargoCode = urlencode($CargoCode);
		$HSCode = urlencode($HSCode);
		$CargoOrigin = urlencode($CargoOrigin);
		$CargoNum = urlencode($CargoNum);
		$CargoUnit = urlencode($CargoUnit);
		$CargoUnitPrice = urlencode($CargoUnitPrice);
		$CargoTotalPrice = urlencode($CargoTotalPrice);
		$CargoTotalTax = urlencode($CargoTotalTax);
		
		
		
		/* $InputCharset = escape($InputCharset);
		$Version = escape($Version);
		$Language = escape($Language);
		$SignType = escape($SignType);
		$PageUrl = escape($PageUrl);
		$BgUrl = escape($BgUrl);
		$ShowUrl = escape($ShowUrl);
		$MerchantOrderId = escape($MerchantOrderId);
		$AssBillNo = escape($AssBillNo);
		$TradeName = escape($TradeName);
		$TradeCode = escape($TradeCode);
		$SrcNcode = escape($SrcNcode);
		$RecCountry = escape($RecCountry);
		$RecProvince = escape($RecProvince);
		$RecCity = escape($RecCity);
		$RecAddress = escape($RecAddress);
		$OrderCommitTime = escape($OrderCommitTime);
		$SenderName = escape($SenderName);
		$SenderTel = escape($SenderTel);
		$SenderCompanyName = escape($SenderCompanyName);
		$SenderAddr = escape($SenderAddr);
		$SenderZip = escape($SenderZip);
		$SenderCity = escape($SenderCity);
		$SenderProvince = escape($SenderProvince);
		$SenderCountry = escape($SenderCountry);
		$CargoDescript = escape($CargoDescript);
		$AllCargoTotalPrice = escape($AllCargoTotalPrice);
		$AllCargoTotalTax = escape($AllCargoTotalTax);
		$ExpressPrice = escape($ExpressPrice);
		//$OtherPrice = urlencode($OtherPrice);
		$PayTotalPrice = escape($PayTotalPrice);
		$PayCUR = escape($PayCUR);
		$CrtCountryCode = escape($CrtCountryCode);
		$CrtAccount = escape($CrtAccount);
		$CrtAccountName = escape($CrtAccountName);
		$CrtCUR = escape($CrtCUR);
		//$ShippingAddr = urlencode($ShippingAddr);
		$CargoTypeNum = escape($CargoTypeNum);
		$CargoName = escape($CargoName);
		$CargoCode = escape($CargoCode);
		$HSCode = escape($HSCode);
		$CargoOrigin = escape($CargoOrigin);
		$CargoNum = escape($CargoNum);
		$CargoUnit = escape($CargoUnit);
		$CargoUnitPrice = escape($CargoUnitPrice);
		$CargoTotalPrice = escape($CargoTotalPrice);
		$CargoTotalTax = escape($CargoTotalTax); */
		
		
		
		//$Spt1 = urlencode($Spt1);
		//$Spt2 = urlencode($Spt2);
		//$SignMsg = $SignMsg;
		
		
		$def_url = "<br /><form style='text-align:center;' method='get' action='http://124.74.246.244:7001/cbods/order/orderlist.htm' target='_blank'>";
		$def_url .= "InputCharset:<INPUT type='text' size='2' id='InputCharset' name='InputCharset' value='".$InputCharset."'><br/>";  //字符集
		$def_url .= "Version:<INPUT type='text' size='10' id='Version' name='Version' value='".$Version."'><br/>"; //网关版本
		$def_url .= "Language:<INPUT type='text' size='2' id='Language' name='Language' value='".$Language."'><br/>";  //语言种类
		$def_url .= "SignType:<INPUT type='text' size='2' id='SignType' name='SignType' value='".$SignType."'><br/>"; //签名类型
		$def_url .= "PageUrl:<INPUT type='text' size='256' id='PageUrl' name='PageUrl' value='".$PageUrl."'><br/>"; //服务器接受支付结果的后台地址
		$def_url .= "BgUrl:<INPUT type='text' size='256' id='BgUrl' name='BgUrl' value='".$BgUrl."'><br/>"; //服务器接受支付结果的后台地址
		$def_url .= "ShowUrl:<INPUT type='text' size='256' id='ShowUrl' name='ShowUrl' value='".$ShowUrl."'><br/>";  //支付成功后成功页面中显示跳转商户链接
		$def_url .= "MerchantOrderId:<INPUT type='text' size='50' id='MerchantOrderId' name='MerchantOrderId' value='".$MerchantOrderId."'><br/>"; //电商订单号
		$def_url .= "AssBillNo:<INPUT type='text' size='32' id='AssBillNo' name='AssBillNo' value='".$AssBillNo."'><br/>";  //物流分运单号
		$def_url .= "TradeName:<INPUT type='text' size='64' id='TradeName' name='TradeName' value='".$TradeName."'><br/>"; //电商名称
		$def_url .= "TradeCode:<INPUT type='text'  size='20' id='TradeCode'  name='TradeCode' value='".$TradeCode."'><br/>"; //电商编码
		$def_url .= "SrcNcode:<INPUT type='text' size='2' id='SrcNcode' name='SrcNcode' value='".$SrcNcode."'><br/>";  //电商代码
		$def_url .= "OrderCommitTime:<INPUT type='text'  size='14' id='OrderCommitTime'  name='OrderCommitTime' value='".$OrderCommitTime."'><br/>"; //客户订单提交时间
		$def_url .= "SenderName:<INPUT type='text'  size='10' id='SenderName'  name='SenderName' value='".$SenderName."'><br/>"; //发件人姓名
		$def_url .= "SenderTel:<INPUT type='text'  size='15' id='SenderTel'  name='SenderTel' value='".$SenderTel."'><br/>"; //发件人电话
		$def_url .= "<INPUT type='text'  size='30' id='SenderCompanyName'  name='SenderCompanyName' value='".$SenderCompanyName."'><br/>"; //发件方公司名称
		$def_url .= "SenderCompanyName:<INPUT type='text'  size='50' id='SenderAddr'  name='SenderAddr' value='".$SenderAddr."'><br/>";  //发件人地址
		$def_url .= "SenderZip:<INPUT type='text'  size='10' id='SenderZip'  name='SenderZip' value='".$SenderZip."'><br/>"; //发件地邮编
		$def_url .= "SenderCity:<INPUT type='text'  size='20' id='SenderCity'  name='SenderCity' value='".$SenderCity."'><br/>"; //发件地城市
		$def_url .= "SenderProvince:<INPUT type='text'  size='20' id='SenderProvince'  name='SenderProvince' value='".$SenderProvince."'><br/>"; //发件地省/州名
		$def_url .= "SenderCountry:<INPUT type='text'  size='30' id='SenderCountry'  name='SenderCountry' value='".$SenderCountry."'><br/>"; //发件地国家
		$def_url .= "CargoDescript:<INPUT type='text'  size='256' id='CargoDescript'  name='CargoDescript' value='".$CargoDescript."'><br/>"; //货物详细货名
		$def_url .= "AllCargoTotalPrice:<INPUT type='text'  size='20'  id='AllCargoTotalPrice'  name='AllCargoTotalPrice' value='".$AllCargoTotalPrice."'><br/>"; //所有商品合计总价
		$def_url .= "AllCargoTotalTax:<INPUT type='text'  size='20' id='AllCargoTotalTax'  name='AllCargoTotalTax' value='".$AllCargoTotalTax."'><br/>"; //所有商品行邮税合计总价
		$def_url .= "ExpressPrice:<INPUT type='text'  size='20' id='ExpressPrice'  name='ExpressPrice' value='".$ExpressPrice."'><br/>"; //物流运费
		//$def_url .= "<INPUT type='text'  size='20' id='OtherPrice'  name='OtherPrice' value='".$OtherPrice."'>"; //其他费用
		$def_url .= "PayTotalPrice:<INPUT type='text'  size='20' id='PayTotalPrice'  name='PayTotalPrice' value='".$PayTotalPrice."'><br/>"; //支付总金额
		$def_url .= "PayCUR:<INPUT type='text'  size='5' id='PayCUR'  name='PayCUR' value='".$PayCUR."'><br/>"; //付款币种
		$def_url .= "CrtCountryCode:<INPUT type='text'  size='3' id='CrtCountryCode'  name='CrtCountryCode'  value='".$CrtCountryCode."'><br/>"; //收款方国家代码
		$def_url .= "<INPUT type='text'  size='50' id='CrtAccount'  name='CrtAccount' value='".$CrtAccount."'><br/>"; //收款方帐号
		$def_url .= "<INPUT type='text'  size='100' id='CrtAccountName'  name='CrtAccountName' value='".$CrtAccountName."'><br/>"; //收款方帐户名称
		$def_url .= "CrtCUR:<INPUT type='text'  size='100' id='CrtCUR'  name='CrtCUR' value='".$CrtCUR."'><br/>"; //收款币种
		$def_url .= "RecCountry:<INPUT type='text' size='2' id='RecCountry' name='RecCountry' value='".$RecCountry."'><br/>"; //收货地国家
		$def_url .= "RecProvince:<INPUT type='text' size='2' id='RecProvince' name='RecProvince' value='".$RecProvince."'><br/>"; //收货地省/州
		$def_url .= "RecCity:<INPUT type='text' size='2' id='RecCity' name='RecCity' value='".$RecCity."'><br/>"; //收货地城市
		$def_url .= "RecAddress:<INPUT type='text' size='2' id='RecAddress' name='RecAddress' value='".$RecAddress."'><br/>";  //收货地地址
		//$def_url .= "<INPUT type='text' size='2' id='ShippingAddr' name='ShippingAddr' value='".$ShippingAddr."'>"; //收货地址
		$def_url .= "CargoTypeNum:<INPUT type='text' size='2' id='CargoTypeNum' name='CargoTypeNum' value='".$CargoTypeNum."'><br/>"; //商品种类数量
		$def_url .= "CargoName:<INPUT type='text'  size='256' id='CargoName'  name='CargoName' value='".$CargoName."'><br/>"; //商品名称
		$def_url .= "CargoCode:<INPUT type='text'  size='256' id='CargoCode'  name='CargoCode' value='".$CargoCode."'><br/>"; //商品编号
		$def_url .= "HSCode:<INPUT type='text'  size='256' id='HSCode'  name='HSCode' value='".$HSCode."'><br/>";  //HS编码 
		$def_url .= "CargoOrigin:<INPUT type='text'  size='256' id='CargoOrigin'  name='CargoOrigin' value='".$CargoOrigin."'><br/>"; //商品原产地
		$def_url .= "CargoNum:<INPUT type='text'  size='256' id='CargoNum'  name='CargoNum' value='".$CargoNum."'><br/>"; //商品数量2^1
		$def_url .= "CargoUnit:<INPUT type='text'  size='256' id='CargoUnit'  name='CargoUnit' value='".$CargoUnit."'><br/>"; //商品单位部^部
		$def_url .= "CargoUnitPrice:<INPUT type='text'  size='256' id='CargoUnitPrice'  name='CargoUnitPrice' value='".$CargoUnitPrice."'><br/>"; //商品单价1200^1300
		$def_url .= "CargoTotalPrice:<INPUT type='text'  size='256' id='CargoTotalPrice'  name='CargoTotalPrice' value='".$CargoTotalPrice."'><br/>"; //商品单项总价
		$def_url .= "CargoTotalTax:<INPUT type='text'  size='128' id='CargoTotalTax'  name='CargoTotalTax' value='".$CargoTotalTax."'><br/>"; //商品单项行邮税总价
		//$def_url .= "<INPUT type='text'  size='128' id='Spt1'  name='Spt1' value='".$Spt1."'>";  //扩展字段1
		//$def_url .= "<INPUT type='text'  size='128' id='Spt2'  name='Spt2' value='".$Spt2."'>";  //扩展字段2
		$def_url .= "SignMsg:<INPUT type='text'  size='516' id='SignMsg'  name='SignMsg' value='".$SignMsg."'><br/>"; //签名字符串
		$def_url .= "<input  style='width:100px; height:40px;' type=submit value='summit'>";
		$def_url .= "</form>";

	/**
     * 将变量值不为空的参数组成字符串
     * @param   string   $strs  参数字符串
     * @param   string   $key   参数键名
     * @param   string   $val   参数键对应值
    */
    function append_param($strs,$key,$val)
    {
        if($strs != "")
        {
            if($val != "")
            {
                $strs .= '&' . $key . '=' . $val;
            }
        }
        else
        {
            if($val != "")
            {
                $strs = $key . '=' . $val;
            }
        }

        return $strs;
    }
    /* function escape($string, $in_encoding = 'UTF-8',$out_encoding = 'UTF-8') {
    	$return = '';
    	if (function_exists('mb_get_info')) {
    		for($x = 0; $x < mb_strlen ( $string, $in_encoding ); $x ++) {
    			$str = mb_substr ( $string, $x, 1, $in_encoding );
    			if (strlen ( $str ) > 1) { // 多字节字符
    				$return .= '%u' . strtoupper ( bin2hex ( mb_convert_encoding ( $str, $out_encoding, $in_encoding ) ) );
    			} else {
    				$return .= '%' . strtoupper ( bin2hex ( $str ) );
    			}
    		}
    	}
    	return $return;
    } */

    /* function _utf8_encode($string) {
    	//string = string.replace(/\r\n/g,"\n");
    	$string = preg_replace('/\r\n/g', '\n', $string);
    	
    	var utftext = "";
    
    	for (var n = 0; n < string.length; n++) {
    
    		var c = string.charCodeAt(n);
    
    		if (c < 128) {
    			utftext += String.fromCharCode(c);
    		}
    		else if((c > 127) && (c < 2048)) {
    			utftext += String.fromCharCode((c >> 6) | 192);
    			utftext += String.fromCharCode((c & 63) | 128);
    		}
    		else {
    			utftext += String.fromCharCode((c >> 12) | 224);
    			utftext += String.fromCharCode(((c >> 6) & 63) | 128);
    			utftext += String.fromCharCode((c & 63) | 128);
    		}
    
    	}
    
    	return utftext;
    } */
    

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type='text/javascript' src="/"></script>
<title>test</title>
</head>

<body>

<?php echo $def_url;?>

</body>
</html>
