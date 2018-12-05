<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"D:\phpStudy\PHPTutorial\WWW\test\public/../application/index\view\wc\wc.html";i:1540200836;s:71:"D:\phpStudy\PHPTutorial\WWW\test\application\index\view\common\top.html";i:1540358118;s:74:"D:\phpStudy\PHPTutorial\WWW\test\application\index\view\common\footer.html";i:1537412314;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>信通太合文创专区</title>
		<link rel="stylesheet" type="text/css" href="/static/index/css/index.css">
		<link rel="stylesheet" href="/static/index/css/swiper3.css" />
		<script src="/static/index/js/jquery-3.2.1.min.js"></script>
       <script src="/static/index/js/zooming.js"></script>
		<script src="/static/index/js/swiper3.js"></script>
		<style>
			body {
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
				<img src="/static/index/image/image/banner_wc.jpg"/>
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
       <style>
        .mainTitle{width:100%;}
        .mainTitle .hr{width:100%;}
        .mainTitle h1{margin-top:-50px;background-color:#fff;}
        .main-gg li{width:33.333337%;float:left;padding:0 5px;margin:0;}
        .main-gg li img{width:100%;float:left}
        
      </style>
		<!--内容-->
		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<div class="dm-box">
			<ul class="main-gg">
              <div class="mainTitle"><span class="hr"></span><h1 id="zlzs" class="titzs"><?php echo $vo['name']; ?></h1></div>
				<div class="clear"></div>
				<?php if(is_array($vo['list']) || $vo['list'] instanceof \think\Collection || $vo['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<li>
					<img src="/<?php echo $v['pic']; ?>" data-action="zoom">
					<p><?php echo $v['title']; ?></p>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="clear"></div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
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
							<a href="https://www.cintong.com/index.php/index/ppcy/ppcy.html?id=1">平面创意</a>
						</li>
						<li>
							<a href="https://www.cintong.com/index.php/index/ys/ys.html?id=5">影视后期</a>
						</li>
						<li>
							<a href="https://www.cintong.com/index.php/index/xmt/xmt.html?id=10">新媒体</a>
						</li>
						<li>
							<a href="https://www.cintong.com/index.php/index/gghd/gghd.html?id=11">公关活动</a>
						</li>
						<li>
							<a href="https://www.cintong.com/index.php/index/wc/wc.html?id=12">文创专区</a>
						</li>
						<li>
							<a href="https://www.cintong.com/index.php/index/dm/dm.html?id=13">动漫专区</a>
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
		<script>
			var swiper = new Swiper('.swiper-container', {
				pagination: '.swiper-pagination',
				paginationClickable: true,
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				loop: true,
				autoplay: 2000
			});
		</script>
		<script>
		  $(".pingmians ul li").hover(function() {
                var hover_img_a =  $(this).attr('data-pic-a');
                $(this).find("img").attr("src", hover_img_a);
                $(this).addClass("ons")
            }, function() {
                var hover_img=  $(this).attr('data-pic');
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

			})
		</script>
	</body>

</html>