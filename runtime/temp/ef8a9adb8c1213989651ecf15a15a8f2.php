<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"D:\phpStudy\PHPTutorial\WWW\cintong\public/../application/index\view\ys\ys.html";i:1540953383;s:74:"D:\phpStudy\PHPTutorial\WWW\cintong\application\index\view\common\top.html";i:1540358118;s:77:"D:\phpStudy\PHPTutorial\WWW\cintong\application\index\view\common\footer.html";i:1541734077;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>信通太合影视后期</title>
		<link rel="stylesheet" type="text/css" href="/static/index/css/index.css">
		<link rel="stylesheet" href="/static/index/css/swiper3.css" />
		<script src="/static/index/js/jquery-3.2.1.min.js"></script>
		<script src="/static/index/js/swiper3.js"></script>
		<style>body {
	margin: 0;
	padding: 0;
	overflow-x: hidden;
}

.ischeck {
	position: relative;
}
           ._one .inner .content ul{
          	margin-top:15px;
          }

html {
	overflow-x: hidden;
}

.isshow {
	display: none;
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
}

.contentons li {
	position: relative;
}

.box1 {
	background: red;
}

.box1 p {
	color: #fff!important;
}

.box1 span {
	color: #fff!important;
}

.swiper-container {
	width: 100%;
	height: 600px;
	background: red;
}

.swiper-slide {
	position: relative;
	text-align: center;
	font-size: 18px;
	background: #fff;
	background: red;
	display: -webkit-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	-webkit-justify-content: center;
	justify-content: center;
	-webkit-box-align: center;
	-ms-flex-align: center;
	-webkit-align-items: center;
	align-items: center;
}

.swiper-container-horizontal>.swiper-pagination-bullets,
.swiper-pagination-custom,
.swiper-pagination-fraction {
	bottom: 10px;
	position: absolute;
	left: 37%;
	box-sizing: border-box;
}

.swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
	margin: 5px;
}

.swiper-pagination-bullet {
	width: 80px;
	height: 8px;
	display: inline-block;
	border-radius: 2px;
	opacity: 1;
	/*border: 2px solid #fff;*/
	float: left;
	background: #fff;
	/*margin: 20px 0;*/
}

.swiper-pagination-bullet-active {
	background: red;
}

.swiper-button-next,
.swiper-container-rtl .swiper-button-prev {
	display: none;
}

.swiper-button-next,
.swiper-container-rtl .swiper-button-prev {
	display: none;
}

.ons {
	background: red;
	color: #fff!important;
}

.ons span {
	color: #fff!important;
}
.main-ggli{
	margin-right: 0!important;
}
.main-gg p{
	width: 11em;
	text-align: center;
	margin: 0 auto;
	overflow: hidden;
	text-overflow: ellipsis;/*文字隐藏后添加省略号*/
	white-space: nowrap;/*强制不换行*/
}
		
		</style>

	</head>

	<body>
		<div class="ads">
			<!-- 头部内容 -->
			
<div class="header">
    <div class="inner">

        <!-- logo -->
        <div class="logo">
            <img src="/static/index/image/image/<?php echo $logoPath; ?>" alt="logo" />
        </div>
        <div class="nav">
            <ul>
                <?php if(is_array($cateName) || $cateName instanceof \think\Collection || $cateName instanceof \think\Paginator): $i = 0; $__LIST__ = $cateName;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a style=" text-decoration: none;" href="<?php  static $j=0;if($j<5)echo $arrCatePath[$j];$j++  ?>" class="red">
                <li><?php echo $vo['name']; ?></li>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>

        </div>
        <div class="img11">
            <p>010-5701-0319</p>
        </div>
    </div>
</div>

			<!-- 主题内容 -->
			<div class="banner-dm">
				<img src="/static/index/image/banner_ys.jpg"/>
			</div>
			
		</div>
		<div class="clear" style="clear: both"></div>
		
		<div class="_one" style="margin: 0;">
			<div class="inner" style="border: 0;">

				<div class="content pingmians">
					<ul>
						<?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$banner): $mod = ($i % 2 );++$i;?>
						<a href="<?php  static $i=0;echo $arrPath[$i];  ?>">
							<li class="" id="pmcy" data-pic="/static/index/image/indexIco/nav<?php  static $i=0;echo $i;  ?>.png"  data-pic-a="/static/index/image/indexIco/nav<?php  static $i=0;echo $i;  ?>-h.png">
								<div>
									<img src="/static/index/image/indexIco/nav<?php  static $i=0;echo $i;  ?>.png" />
								</div>
								<span><?php echo $banner['name']; ?></span>

							</li>
						</a>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<!---->
		<!--<div class="tiao">
			<span><a href="#zlzs">广告片</a></span>
			<span><a href="#wyyc">宣传片</a></span>
			<span><a href="#hyhd">纪录片</a></span>
			<span><a href="#hyhd">微电影</a></span>
		</div>-->
       <style>
        .mainTitle{width:100%;}
        .mainTitle .hr{width:100%;}
        .mainTitle h1{margin-top:-50px;background-color:#fff;}
        .main-gg li{width:33.333337%;float:left;padding:0 5px;margin:0;}
        .main-gg li img{width:100%;float:left}
         .main-gg li embed{width:100%;}
        .main-gg li video{width:100%;}
      </style>
		<!--内容-->
		<!--内容-->
		
		<div class="dm-box">
			<ul class="main-gg">
              <div class="mainTitle"><span class="hr"></span><h1 id="zlzs" class="titzs">广告片</h1></div>
				<div class="clear"></div>
              <li>
                  <video src="https://ugcws.video.gtimg.com/uwMRJfz-r5jAYaQXGdGnC2_ppdhgmrDlPaRvaV7F2Ic/i0761yrf1uk.mp4?sdtfrom=v1010&guid=c21d99d23d8f88f4849bf7910321bf0f&vkey=87DD6589846FA2D3C678C58C341D0DDBA82AD356AB83FEBF4C49808BDAF662E1B5B7A7E7D57C782108E5000377163B14EA723C1C40B20450546BD5F475FB00BB5820946CE7539027BB7E279A699E22A33EA76D1B23654FE39F292981AE8C304BFC53C06440D2072863C0670C346FAA9E78E7E57CD97564CB" controls="controls">
                    your browser does not support the video tag
                  </video>
					<p>中信银行行歌MV</p>
			  </li>
                <li>
                  <video src="https://ugclx.video.gtimg.com/uwMRJfz-r5jAYaQXGdGnC2_ppdhgmrDlPaRvaV7F2Ic/z0761ph1rct.mp4?sdtfrom=v1010&guid=c21d99d23d8f88f4849bf7910321bf0f&vkey=2DF5F9AE54881411723B3E41B0A9420ED756546E57A076E4AA7D33622AE71F4B37DDCF846DC19E8C39C1A59A334706BB5BACD233A906F4A1AE1C53CDE29225493E503EFEE72C5ABDC430F940BA8A86C764B045E84D6974BE1A11EBD5EDDC9ED79C6CB316AD9F060242C07DFBCD89226AE35D51ADAF23780F" controls="controls">
                    your browser does not support the video tag
                  </video>
					<p>中国银行入党仪式</p>
			  </li>
                <li>
                  <video src="https://ugcws.video.gtimg.com/uwMRJfz-r5jAYaQXGdGnC2_ppdhgmrDlPaRvaV7F2Ic/h0761gflhwa.mp4?sdtfrom=v1010&guid=c21d99d23d8f88f4849bf7910321bf0f&vkey=305F3691978F80E7FB2EBF50485B79AA07321FDF7EB9C8FB1467A18817BEB3FF022168498F43174C9E75BF2EB37FC01B71C6B4300CBF8A165EED3248B6BE7274B61AF42CA60DE7B0EF34EB2FE79461FBA992C17B8E8D5B63D1A30F5EEEB7922CCEA1CA2E7F555D3D147B63037D8D982C8627F86D1F1B2DA7" controls="controls">
                    your browser does not support the video tag
                  </video>
					<p>中国银行出国金融服务篇</p>
			  </li>
                <li>
                  <video src="https://ugcbsy.qq.com/uwMRJfz-r5jAYaQXGdGnC2_ppdhgmrDlPaRvaV7F2Ic/x07617n76cy.mp4?sdtfrom=v1010&guid=c21d99d23d8f88f4849bf7910321bf0f&vkey=1839DAE885A389ECB7D4FBBCA4A4B80946773F7EA8DA0567DACADE9D27FF988145CC3203BA2CF54905D1A58E4496B33D34162D732F3AA49C5F35CC4F79C12FF8014EACC48DA049457E5784AE5E8F4ACB34036ACDA8CD628E5649E20838179E0EA1E61CF23416DD5F4EE074E44C786D0D71FE786B3DC24821" controls="controls">
                    your browser does not support the video tag
                  </video>
					<p>中国银行北分大事记</p>
			  </li>
          
			</ul>
		</div>
		<div class="clear"></div>
		<div class="dm-box">
			<ul class="main-gg">
              <div class="mainTitle"><span class="hr"></span><h1 id="zlzs" class="titzs">宣传片</h1></div>
				<div class="clear"></div>
           
                <li>
                  <video src="https://ugcsjy.qq.com/uwMRJfz-r5jAYaQXGdGnC2_ppdhgmrDlPaRvaV7F2Ic/z0761xii1cg.mp4?sdtfrom=v1010&guid=c21d99d23d8f88f4849bf7910321bf0f&vkey=806E211CC67BA50598EDE8862841209E7B418CD5C38CA0280537F98A5F235F3B174B503D53663E08E00C9B2630484B57166463A9C94E46848E38F16F57E8565B33A05D38B3CE9FC8E2353C4DB7401D2C4AE82B74DFB1CC602CB6293EA6FB1AA7DF8D5054ABDFCFE70F86F870BA7F5E22B55B5BFC191D1224" controls="controls">
                    your browser does not support the video tag
                  </video>
					<p>中国银行北分形象片</p>
			  </li>
                <li>
                  <video src="https://ugclx.video.gtimg.com/uwMRJfz-r5jAYaQXGdGnC2_ppdhgmrDlPaRvaV7F2Ic/h0761hb5671.mp4?sdtfrom=v1010&guid=c21d99d23d8f88f4849bf7910321bf0f&vkey=0C2A74D93C54A3D8AA862DA40B397CE19C9FECE779DE559AF67E07BCAA9FAE37500538244AC8C761AE1EDC5C08E20B7542994C0EFED90F60A177AED517207036FBC9B4039051EEFB821923AE0574A17391B532B30CF4A9E666D4D6A2F5D03292B149107609BD420B98A7D3EC69833B5D98F1CB191242C951" controls="controls">
                    your browser does not support the video tag
                  </video>
					<p>中行北分营业部爱心传递</p>
			  </li>
          
			</ul>
		</div>
		<div class="clear"></div>
      <div class="dm-box">
			<ul class="main-gg">
              <div class="mainTitle"><span class="hr"></span><h1 id="zlzs" class="titzs">纪录片</h1></div>
				<div class="clear"></div>
             
                <li>
                  <video src="https://ugcbsy.qq.com/uwMRJfz-r5jAYaQXGdGnC2_ppdhgmrDlPaRvaV7F2Ic/i0761eg1vuk.mp4?sdtfrom=v1010&guid=c21d99d23d8f88f4849bf7910321bf0f&vkey=861C5B4219E86980B8F014B69C73644506FA05021D4BCAD22624F56862DF294A5F569BCB72E4C3981BF886878477DE30242F7C917ADA6898CCFA7BC25F027FD25AFDB32BCD8FD3F6841FED52BD63768C9333ED5B135FC9278848A0B97FC12A61FBDA1D6793CF39F1D8A5C555CFB158D32C74985D6B0A4354" controls="controls">
                    your browser does not support the video tag
                  </video>
					<p>中行北方营业部部门之歌</p>
			  </li>
                <li>
                  <video src="https://ugcbsy.qq.com/uwMRJfz-r5jAYaQXGdGnC2_ppdhgmrDlPaRvaV7F2Ic/x0761hue1p5.mp4?sdtfrom=v1010&guid=c21d99d23d8f88f4849bf7910321bf0f&vkey=0898BE863590E7DCFB30EC63F0257034B9DC68D492D5FDEAC6832832EAAAF53B9EF2B2837D655C3919671F31FF80F4F31F949FAA484E4A94CAE8BCC5693BDB3489EC948720BA1D4BAA18CEABC5C41FC6BAD57EF6AA21B2B600CECFA6147F20BC0D39652B21F677D35EE850928C50B9B278AF73295DB7DD4F" controls="controls">
                    your browser does not support the video tag
                  </video>
					<p>中行平谷支行宋雪梅事迹</p>
			  </li>
          
			</ul>
		</div>
		<div class="clear"></div>
       <div class="dm-box">
			<ul class="main-gg">
              <div class="mainTitle"><span class="hr"></span><h1 id="zlzs" class="titzs">微电影</h1></div>
				<div class="clear"></div>
             
                <li>
                  <video src="https://ugcws.video.gtimg.com/uwMRJfz-r5jAYaQXGdGnC2_ppdhgmrDlPaRvaV7F2Ic/r0761wpb1hj.mp4?sdtfrom=v1010&guid=c21d99d23d8f88f4849bf7910321bf0f&vkey=019A9E88CD8F93A96DBFA6924F63DAB62FB0BACA83DBC1114ACC8ABDA5218119D2902115ECCBA97FE903E4F07DE67E41ABBC914D9A5CA49D5E1BE8F6C4B575D4BFCB1EDB054BB8EC4C34DB18611225B7FD93747DDDDF5045536187E59E1E7ED30D1544B3588022B784310B45A91ED7E4975B64E2F1C38F39" controls="controls">
                    your browser does not support the video tag
                  </video>
					<p>中行新天地</p>
			  </li>
                <li>
                  <video src="https://apd-b05e4fa28289f28d4ae9cb3287de0a1f.v.smtcdns.com/vhot2.qqvideo.tc.qq.com/Ab1jBLjfOgDE8MyXCVnWYOoPvWfdLBUsQQmWHZ5K7pKY/q0761tdoy9s.mp4?sdtfrom=v1010&guid=c21d99d23d8f88f4849bf7910321bf0f&vkey=2D721F9077EA69D56D8500D5A4B7A42F7714D35091F42003FA424603800825053FCF9D0DCBA61ECE96AC4B2C020BE2A9514DDF07CFE3CEC2E8C02E1F62A8122ADA1A8C94D0009B6BA43DE43BA6CBD4CCA37F347154DF4967D0C6CCD661F5BD58595EF4875CA70A7AB7E62C8D659574419500CFF2E3BE9782" controls="controls">
                    your browser does not support the video tag
                  </video>
					<p>中银保险形象篇</p>
			  </li>
          
			</ul>
		</div>
      <div class="clear"></div>
       <div class="dm-box">
			<ul class="main-gg">
              <div class="mainTitle"><span class="hr"></span><h1 id="zlzs" class="titzs">MG动画</h1></div>
				<div class="clear"></div>
             
          
			</ul>
		</div>
       <div class="clear"></div>
		<div class="_six">
			<div class="inner">
				<div class="top">
					<h1 class="text_red">CONTACT&nbsp;&nbsp;US</h1>
					<!-- <div style="width: 2%;border-bottom: 2px solid red;margin: 10px auto;"></div> -->
					<span class="six_con">请别客气&nbsp;&nbsp;&nbsp;与我们联系</span>

				</div>

              
              
				<div class="span">
					<h1>客服电话 : &nbsp;010-570-10319</h1>
				</div>
			</div>
		</div>

		<div class="_seven">
           <div style="float:left;margin:50px 30px 0 20px;">
            <!--百度地图容器-->
            <div style="width:330px;height:220px;border:#ccc solid 1px;font-size:12px" id="map"></div>
            <p style="color:red;font-weight:600">
              <a href="https://developer.baidu.com/map/index.php?title=jspopular/guide/introduction" style="color:#2f83c7" target="_blank"></a>
              <a href="https://lbsyun.baidu.com/apiconsole/key?application=key" style="color:#2f83c7" target="_blank"></a>
            </p>
          </div>
			<div class="inner">
				<div class="top">
					<h1 class="seven-tit"><?php echo $configInfo['title']; ?></h1>
					<p>地址：<?php echo $configInfo['address']; ?></p>
					<p>邮箱/Email:<?php echo $configInfo['online']; ?> 免费咨询电话<?php echo $configInfo['phone']; ?></p>
					<p>京ICP备</p>
				</div>
				<div class="seven-right">
					<ul>
						<li>
							<a href="http://cintong.com/index.php/index/ppcy/ppcy.html?id=1">平面创意</a>
						</li>
						<li>
							<a href="http://cintong.com/index.php/index/ys/ys.html?id=5">影视后期</a>
						</li>
						<li>
							<a href="http://cintong.com/index.php/index/xmt/xmt.html?id=10">新媒体</a>
						</li>
						<li>
							<a href="http://cintong.com/index.php/index/gghd/gghd.html?id=11">公关活动</a>
						</li>
						<li>
							<a href="http://cintong.com/index.php/index/wc/wc.html?id=12">文创专区</a>
						</li>
						<li>
							<a href="http://cintong.com/index.php/index/dm/dm.html?id=13">动漫专区</a>
						</li>
					</ul>
				</div>
			</div>

 

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="百度地图,百度地图API，百度地图自定义工具，百度地图所见即所得工具" />
    <meta name="description" content="百度地图API自定义地图，帮助用户在可视化操作下生成百度地图" />
    <title>百度地图API自定义地图</title>
    <!--引用百度地图API-->
    <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=tlf1dLPGKnAGIhE5eHNGi5vGg7CjiK9C"></script>
  </head>
  
 
  <script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){ 
      map = new BMap.Map("map"); 
      map.centerAndZoom(new BMap.Point(116.58458,39.922979),19);
    }
    function setMapEvent(){
      map.enableScrollWheelZoom();
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay(){
      var markers = [
        {content:"北京市朝阳区三间房东路142号联系电话010-5701-0319北京市朝阳区建国路93号万达广场6号楼3层",title:"北京信通太合广告有限公司",imageOffset: {width:-46,height:-21},position:{lat:39.922886,lng:116.584211}}
      ];
      for(var index = 0; index < markers.length; index++ ){
        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
        var marker = new BMap.Marker(point,{icon:new BMap.Icon("https://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
        })});
        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
        var opts = {
          width: 200,
          title: markers[index].title,
          enableMessage: false
        };
        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
        marker.setLabel(label);
        addClickHandler(marker,infoWindow);
        map.addOverlay(marker);
      };
    }
    //向地图添加控件
    function addMapControl(){
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:1});
      map.addControl(navControl);
    }
    var map;
      initMap();
  </script>
		<!-- 页脚内容 -->
		<div></div>
		<script>var swiper = new Swiper('.swiper-container', {
	pagination: '.swiper-pagination',
	paginationClickable: true,
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	loop: true,
	autoplay: 2000
});</script>
		<script>$(".pingmians ul li").hover(function() {
	var hover_img_a = $(this).attr('data-pic-a');
	$(this).find("img").attr("src", hover_img_a);
	$(this).addClass("ons")
}, function() {
	var hover_img = $(this).attr('data-pic');
	$(this).find("img").attr("src", hover_img);
	$(this).removeClass("ons")
})
$(".ischeck").hover(function() {
	$(this).find(".isshow").show();
}, function() {
	$(this).find(".isshow").hide();
})
$(".box").hover(function() {
	$(this).addClass("box1")
}, function() {
	$(this).removeClass("box1")
})
$(".contentons li").hover(function() {
	$(this).find(".isshow").show();
}, function() {
	$(this).find(".isshow").hide();
})

$(function() {
	var adsHeight = $(".ads").height();
	$(window).scroll(function() {
		var scrollTop = $(document).scrollTop();
		if(scrollTop >= adsHeight) {
			$(".pingmians ").css({
				"position": "fixed",
				"top": "0",
				"max-width": "1240px",
				"background": "#fff",
				"z-index": "99"
			});

		} else {
			$(".pingmians ").css({
				"position": "static"
			});

		}
	})

})</script>
	</body>

</html>