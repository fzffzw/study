





<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
		<title>welcome</title>
		<link
			href="/szceb/styles/welcome_qiye.css"
			rel="stylesheet" type="text/css" />
		<link href="/szceb/styles/link_w.css"
			rel="stylesheet" type="text/css" />
		

<link type="text/css" rel="stylesheet" href="/szceb/scripts/jquery/css/jquery-ui-1.8.22.css" />
<link type="text/css" rel="stylesheet" href="/szceb/scripts/jquery/css/jquery.autocomplete.css" />
<link type="text/css" rel="stylesheet" href="/szceb/scripts/jquery/css/jquery.validationEngine.css" />

<script type="text/javascript" src="/szceb/scripts/jquery/jquery-1.8.3.js"></script>
<script type="text/javascript" src="/szceb/scripts/jquery/jquery-ui-1.8.22.js"></script>
<script type="text/javascript" src="/szceb/scripts/jquery/jquery.autocomplete.js"></script>
<script type="text/javascript" src="/szceb/scripts/jquery/jquery.validationEngine-zh_CN.js"></script>
<script type="text/javascript" src="/szceb/scripts/jquery/jquery.validationEngine.js"></script>
<script type="text/javascript" src="/szceb/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/szceb/scripts/pub/common.js"></script>
<script type="text/javascript" src="/szceb/scripts/pub/enter2Tab.js"></script>
<script type="text/javascript" src="/szceb/scripts/pub/commonComp.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				//BusinessConstant.SORT_TYPE
				getNews("CD","");//平台通知、资讯下载
			});
			
			function showLoading(divId) {
            	$("div[name='"+divId+"Loading']").show();
            }
            
			function hiddenLoading(divId) {
            	$("div[name='"+divId+"Loading']").hide();
            }
            
            //工作台单证计算部分展示
			function getCountPart(){
				$.ajax({
					url: "/szceb/businessCount.do?method=getCountPart",
					type: "get",
					dataType: "json",
					success: displayCountPart
				});
			}
			
			function displayCountPart(data){
				var bizCategories = data.bizCategories.split("");
				//单证计算
				for(var i in bizCategories){
					if($("#goodsDisplayDiv").attr("displayBizCategories").indexOf(bizCategories[i]) != -1){
						$("#goodsDisplayDiv").show();
						//商品统计
						$("#goodsDeclareCiqDay").html(data.goodsCount.declareCountCiqDay);
						$("#goodsReceiveCiqDay").html(data.goodsCount.receiveCountCiqDay);
						$("#goodsSuccessCiqDay").html(data.goodsCount.successCountCiqDay);
						$("#goodsFailCiqDay").html(data.goodsCount.failCountCiqDay);
						$("#goodsReceiveCusDay").html(data.goodsCount.receiveCountCusDay);
						$("#goodsSuccessCusDay").html(data.goodsCount.successCountCusDay);
						$("#goodsFailCusDay").html(data.goodsCount.failCountCusDay);
					}
					if($("#storageDisplayDiv").attr("displayBizCategories").indexOf(bizCategories[i]) != -1){
						$("#storageDisplayDiv").show();
						//入仓统计
						$("#storageDeclareCiqDay").html(data.storageCount.declareCountCiqDay);
						$("#storageReceiveCiqDay").html(data.storageCount.receiveCountCiqDay);
						$("#storageSuccessCiqDay").html(data.storageCount.successCountCiqDay);
						$("#storageFailCiqDay").html(data.storageCount.failCountCiqDay);
						$("#storageReceiveCusDay").html(data.storageCount.receiveCountCusDay);
						$("#storageSuccessCusDay").html(data.storageCount.successCountCusDay);
						$("#storageFailCusDay").html(data.storageCount.failCountCusDay);
					}
					if($("#orderDisplayDiv").attr("displayBizCategories").indexOf(bizCategories[i]) != -1){
						$("#orderDisplayDiv").show();
						//订单统计
						$("#orderDeclareCiqDay").html(data.orderCount.declareCountCiqDay);
						$("#orderReceiveCiqDay").html(data.orderCount.receiveCountCiqDay);
						$("#orderReceiveCusDay").html(data.orderCount.receiveCountCusDay);
					}
					if($("#logisticsDisplayDiv").attr("displayBizCategories").indexOf(bizCategories[i]) != -1){
						$("#logisticsDisplayDiv").show();
						//运单统计
						$("#logisticsDeclareCiqDay").html(data.logisticsCount.declareCountCiqDay);
						$("#logisticsReceiveCiqDay").html(data.logisticsCount.receiveCountCiqDay);
						$("#logisticsReceiveCusDay").html(data.logisticsCount.receiveCountCusDay);
					}
					if($("#paymentDisplayDiv").attr("displayBizCategories").indexOf(bizCategories[i]) != -1){
						$("#paymentDisplayDiv").show();
						//支付统计
						$("#paymentDeclareCiqDay").html(data.paymentCount.declareCountCiqDay);
						$("#paymentReceiveCiqDay").html(data.paymentCount.receiveCountCiqDay);
						$("#paymentReceiveCusDay").html(data.paymentCount.receiveCountCusDay);
					}
					if($("#cargoDisplayDiv").attr("displayBizCategories").indexOf(bizCategories[i]) != -1){
						$("#cargoDisplayDiv").show();
						//核放统计
						$("#cargoDeclareCiqDay").html(data.cargoCount.declareCountCiqDay);
						$("#cargoReceiveCiqDay").html(data.cargoCount.receiveCountCiqDay);
						$("#cargoReceiveCusDay").html(data.cargoCount.receiveCountCusDay);
						$("#cargoSuccessCusDay").html(data.cargoCount.successCountCusDay);
						$("#cargoFailCusDay").html(data.cargoCount.failCountCusDay);
					}
				}
			}
			
            //新闻资讯AJAX
			function getNews(sortType,newsType){
				$.ajax({
					beforeSend: function(){ showLoading("news"); },
					complete: function(){ 
								hiddenLoading("news"); 
								//获取企业经营类别决定工作台的展示内容
								getCountPart();
							},
					timeout: 10000,//10秒
					url: "/szceb/news.do?method=getAjaxNews",
					type: "get",
					data: {"sortType":sortType,"newsType":newsType},
					dataType: "json",
					success: function(data){setNews(data)}
				});
			}
			
			function setNews(data){
				for(var i in data){
					if(data[i].sortType == "C"){
						$("#platformNews").append(generateNews(data[i]));
					} else if(data[i].sortType == "D"){
						$("#downloadNews").append(generateNews(data[i]));
					}
				}
			}
			
			function generateNews(news){
				var divClass = "";
				if(news.sortType == "C"){
						divClass = "<div class='wl_qiye_009b'>";
					} else if(news.sortType == "D"){
						divClass = "<div class='wl_qiye_009d'>";
					}
				return "<div class='wl_qiye_009'>"+
						"<div class='wl_qiye_009a'>"+
							"<img src='/szceb/images/arrow_right.gif' width='7' height='7'"+
								"style='margin-top:10px;' />"+
						"</div>"+
						divClass+
							"<a href='/szceb/news.do?method=newsDetail&seqNo=" + news.seqNo + "' target='_blank'>" + news.newsTitle + "</a>"+
						"</div>"+
						"<div class='wl_qiye_009c'>"+
							news.createTimeStr +
						"</div>"+
						"</div>";
			}
			
		</script>
	</head>

	<body>
		<div class="wl_qiye_001">
			<img src="/szceb/images/welcome_01.gif" alt="欢迎登录深圳市跨境贸易电子商务通关服务平台" />
		</div>
		<div class="wl_qiye_002">
			<div class="wl_qiye_002a">
				<div class="wl_qiye_003">
					<div class="wl_qiye_003a"></div>
					<div class="wl_qiye_003b">
						<div class="wl_qiye_003d">
							<img src="/szceb/images/welcome_10.gif" alt="平台通知" width="92"
								height="31" style="margin-top:2px;" />
						</div>
						<div class="wl_qiye_003e">
							<a href="#" target="_blank"><img
									src="/szceb/images/news_more.gif" alt="更多" border="0" />
							</a>
						</div>
					</div>
					<div class="wl_qiye_003c"></div>
				</div>
				<div class="wl_qiye_004">
					<div class="wl_qiye_004a"></div>
					<div class="wl_qiye_004b" id="platformNews">
						<div class="wl_qiye_010">
							<div name="newsLoading" ><img src="/szceb/images/loading.gif" alt="" /> 正在加载数据,请稍候...</div>
						</div>
					</div>
					<div class="wl_qiye_004c"></div>
				</div>
				<div class="wl_qiye_005">
					<div class="wl_qiye_005a"></div>
					<div class="wl_qiye_005b"></div>
					<div class="wl_qiye_005c"></div>
				</div>
			</div>
			<div class="wl_qiye_002b">
				<div class="wl_qiye_003">
					<div class="wl_qiye_003a"></div>
					<div class="wl_qiye_003b_1">
						<div class="wl_qiye_003d">
							<img src="/szceb/images/welcome_11.gif" alt="资料下载" width="84"
								height="31" style="margin-top:2px;" />
						</div>
						<div class="wl_qiye_003e">
							<a href="#" target="_blank"><img
									src="/szceb/images/news_more.gif" alt="更多" border="0" />
							</a>
						</div>
					</div>
					<div class="wl_qiye_003c"></div>
				</div>
				<div class="wl_qiye_004">
					<div class="wl_qiye_004a"></div>
					<div class="wl_qiye_004b_1" id="downloadNews">
						<div class="wl_qiye_010">
							<div name="newsLoading" ><img src="/szceb/images/loading.gif" alt="" /> 正在加载数据,请稍候...</div>
						</div>
					</div>
					<div class="wl_qiye_004c"></div>
				</div>
				<div class="wl_qiye_005">
					<div class="wl_qiye_005a"></div>
					<div class="wl_qiye_005b_1"></div>
					<div class="wl_qiye_005c"></div>
				</div>
			</div>
		</div>
		<div class="wl_qiye_006">
			<img src="/szceb/images/welcome_12.gif" alt="工作台" />
		</div>
		<div id="goodsDisplayDiv" displayBizCategories="CE" style="display: none" >
		<div class="wl_qiye_007">
			<div class="wl_qiye_007a">
				<div class="wl_qiye_007a_1">
					<div class="wl_qiye_007a_text">
						商品备案
					</div>
				</div>
			</div>
			<div class="wl_qiye_007b">
				<div class="wl_qiye_007b_1">
					<div class="wl_qiye_007b_2">
						今日申报：<span id="goodsDeclareCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						国检接收：<span id="goodsReceiveCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						国检审核：<span id="goodsSuccessCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						国检退单：<span id="goodsFailCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						海关接收：<span id="goodsReceiveCusDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						海关审核：<span id="goodsSuccessCusDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						海关退单：<span id="goodsFailCusDay"></span>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div id="storageDisplayDiv" displayBizCategories="S" style="display: none" >
		<div class="wl_qiye_008"></div>
		<div class="wl_qiye_007">
			<div class="wl_qiye_007a">
				<div class="wl_qiye_007a_1">
					<div class="wl_qiye_007a_text">
						入仓申报
					</div>
				</div>
			</div>
			<div class="wl_qiye_007b">
				<div class="wl_qiye_007b_1">
				<div class="wl_qiye_007b_1">
					<div class="wl_qiye_007b_2">
						今日申报：<span id="storageDeclareCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						国检接收：<span id="storageReceiveCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						国检审核：<span id="storageSuccessCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						国检退单：<span id="storageFailCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						海关接收：<span id="storageReceiveCusDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						海关审核：<span id="storageSuccessCusDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						海关退单：<span id="storageFailCusDay"></span>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div id="orderDisplayDiv" displayBizCategories="CE" style="display: none" >
		<div class="wl_qiye_008"></div>
		<div class="wl_qiye_007">
			<div class="wl_qiye_007a">
				<div class="wl_qiye_007a_1">
					<div class="wl_qiye_007a_text">
						电子订单
					</div>
				</div>
			</div>
			<div class="wl_qiye_007b">
				<div class="wl_qiye_007b_1">
					<div class="wl_qiye_007b_2">
						今日申报：<span id="orderDeclareCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						国检接收：<span id="orderReceiveCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						海关接收：<span id="orderReceiveCusDay"></span>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div id="logisticsDisplayDiv" displayBizCategories="L" style="display: none" >
		<div class="wl_qiye_008"></div>
		<div class="wl_qiye_007">
			<div class="wl_qiye_007a">
				<div class="wl_qiye_007a_1">
					<div class="wl_qiye_007a_text">
						电子运单
					</div>
				</div>
			</div>
			<div class="wl_qiye_007b">
				<div class="wl_qiye_007b_1">
					<div class="wl_qiye_007b_2">
						今日申报：<span id="logisticsDeclareCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						国检接收：<span id="logisticsReceiveCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						海关接收：<span id="logisticsReceiveCusDay"></span>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div id="paymentDisplayDiv" displayBizCategories="P" style="display: none" >
		<div class="wl_qiye_008"></div>
		<div class="wl_qiye_007">
			<div class="wl_qiye_007a">
				<div class="wl_qiye_007a_1">
					<div class="wl_qiye_007a_text">
						支付凭证
					</div>
				</div>
			</div>
			<div class="wl_qiye_007b">
				<div class="wl_qiye_007b_1">
					<div class="wl_qiye_007b_2">
						今日申报：<span id="paymentDeclareCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						国检接收：<span id="paymentReceiveCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						海关接收：<span id="paymentReceiveCusDay"></span>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div id="cargoDisplayDiv" displayBizCategories="L" style="display: none" >
		<div class="wl_qiye_008"></div>
		<div class="wl_qiye_007">
			<div class="wl_qiye_007a">
				<div class="wl_qiye_007a_1">
					<div class="wl_qiye_007a_text">
						核放单
					</div>
				</div>
			</div>
			<div class="wl_qiye_007b">
				<div class="wl_qiye_007b_1">
					<div class="wl_qiye_007b_2">
						今日申报：<span id="cargoDeclareCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						国检接收：<span id="cargoReceiveCiqDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						海关接收：<span id="cargoReceiveCusDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						海关审核：<span id="cargoSuccessCusDay"></span>
					</div>
					<div class="wl_qiye_007b_2">
						海关退单：<span id="cargoFailCusDay"></span>
					</div>
				</div>
			</div>
		</div>
		</div>
	</body>
</html>
