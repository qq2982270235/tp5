<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"/www/wwwroot/test/public/../application/index/view/index/index.html";i:1540884597;s:56:"/www/wwwroot/test/application/index/view/common/top.html";i:1540358118;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
      <meta name="baidu-site-verification" content="q5chtLIk9K" />
		<meta charset="utf-8">
		<title>信通太合</title>
		<link rel="stylesheet" type="text/css" href="/static/index/css/index.css">
		<link rel="stylesheet" href="/static/index/css/swiper3.css" />
		<script src="/static/index/js/jquery-3.2.1.min.js"></script>
		<script src="/static/index/js/swiper3.js"></script>
		<script src="/static/index/js/jquery1.42.min.js"></script>
		<script src="/static/index/js/jquery.SuperSlide.2.1.1.js"></script>
		<style>
			body {
				margin: 0;
				padding: 0;
				overflow-x: hidden;
			}

			.ischeck {
				position: relative;
			}

          ._two{
          max-width:1240px;
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
          .topp h1{
				font-size: 30px;
				font-weight: 100;
			}
          .topp span{
				font-size: 16px;
				color: #7D7C7F;
			}
          #to_top{right: 30px; bottom: 30px; position: fixed; cursor: pointer;}
		</style>

	</head>

	<body>
      <div id="to_top" title="返回顶部">
  <img src="/static/index/image/top.png" width="40" height="40" />
</div>
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
			<div class="main">
				<div class="top">
					<!--<img src="image/datu.png">-->
					<!-- Swiper -->
					<div class="swiper-container" dir="rtl">
						<div class="swiper-wrapper">
							<?php if(is_array($cyclePic) || $cyclePic instanceof \think\Collection || $cyclePic instanceof \think\Paginator): $i = 0; $__LIST__ = $cyclePic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<div class="swiper-slide" ><img width="100%" src="/<?php echo $vo['pic']; ?>"></div></a>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
						<!-- Add Navigation -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>

					<!-- Swiper JS -->
					<!-- Initialize Swiper -->
				</div>

				<!-- 遮罩层 -->
				<!--<div class="toPLayer"></div>-->

				<!--<div class="toPLayer-top">-->
				<!--<img src="image/shangxia.png">-->
				<!--<div class="limian">-->
				<!--<img src="image/heise.png">-->
				<!--</div>-->
				<!--<div class="word">创意无限</div>-->
				<!--<div class="wordwe" style="font-size:100px;color:white; width:100%; margin-left:-80px;">CREA TIVE</div>-->
				<!--<div class="wordsan" style="color:white; font-size:35px; margin-left:30px; margin-top:50px;">高端定位 拒绝平庸</div>-->
				<!--<div class="wordsi" style="color:white; margin-left:30px; font-size:13px;">HIGH-END POSITIONING REJECT MEDIOCRITY</div>-->
				<!--<button class="zixun">在线咨询</button>-->
				<!--<div class="erweima">-->
				<!--<img src="image/erweima.png">-->
				<!--</div>-->
				<!--<div class="zuo">-->
				<!--<button class="zuomian"><</button>-->
				<!--</div>-->
				<!--<div class="you">-->
				<!--<button class="youmian">></button>-->
				<!--</div>-->
				<!--</div>-->

				<!--<div class="middle">-->
				<!-- <div>WHAT&nbsp; CAN&nbsp; WE&nbsp; DO </div> -->
				<!--</div>-->
				<!-- <div class="bottom"></div>
        <div class="nengzuo">我们能做什么？</div>
        <div class="fenge"></div> -->
				<!-- 中间部分 -->
				<!-- <div class="zhongjian">
			<div class="m-top" style="margin-left:10%;">
				<div class="commen pingmian">
					<img style="margin-top:5px;" src="image/pingmian.png">
					<div style="margin-top:1px;" class="comm">平面设计</div>
				</div>
				<div class="commen yingshi">
					<img src="image/yingshi.png">
					<div class="comm">影视与电影</div>
				</div>
				<div class="commen donghua">
					<img src="image/donghua.png">
					<div class="comm">动画制作</div>
				</div>
				<div class="commen wangzhan">
					<img src="image/wangzhan.png">
					<div class="comm">网站建设</div>
				</div>
				<div class="commen zhanlan">
					<img src="image/zhanlan.png">
					<div class="comm">展览展示</div>
				</div>
				<div class="commen gongguan">
					<img src="image/gonggong.png">
					<div class="comm">公关活动</div>

				</div>
			</div> -->
				<!--<div class="m-middle"></div>-->
				<!--<div class="m-bottom"></div>-->
			</div>
		</div>
		<div class="clear" style="clear: both"></div>
		<div class="topp">
			<h1>W H A T &nbsp;&nbsp; C A N&nbsp;&nbsp; W E&nbsp;&nbsp; D O</h1>
			<div style="width: 2%;border-bottom: 2px solid red;margin: 10px auto;"></div>
			<span>我们能做什么</span>
			<div style="width: 9%;border-bottom: 1px solid darkgray;margin: 3px auto;"></div>
		</div>

		<div class="_one">
			<div class="inner">
			<a href="http://www.php.com:999/tp5/tp55/tp5/public/index.php/index/xmt/xmt.html">
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
			</a>
			</div>
		</div>

		<div class="_two">
			<div class="inner">
				<div class="top">
					<h1>C A S E &nbsp;&nbsp; S T U D Y</h1>
					<div style="width: 2%;border-bottom: 2px solid red;margin: 10px auto;"></div>
					<span>最新案例</span>
					<div style="width: 6%;border-bottom: 1px solid darkgray;margin: 3px auto;"></div>
				</div>

				<div class="content">
					<div class="left">
						<ul>
							<a href="http://www.php.com:999/tp5/tp55/tp5/public/index.php/index/xmt/xmt.html">
								<li class="ischeck" style="position: relative">
									<img src="/static/index/image/微信图片_20180726171600.png" />
									<img class="isshow" src="/static/index/image/微信图片_20180726171607.png" />
								</li>
							</a>
							<a href="http://www.php.com:999/tp5/tp55/tp5/public/index.php/index/xmt/xmt.html">
								<li class="ischeck" style="position: relative">
									<img src="/static/index/image/微信图片_20180726171539.png" />
									<img class="isshow" src="/static/index/image/微信图片_20180726171607.png" />
								</li>
							</a>
							<a href="http://www.php.com:999/tp5/tp55/tp5/public/index.php/index/xmt/xmt.html">
								<li class="ischeck" style="position: relative">
									<img src="/static/index/image/微信图片_20180726171545.png" />
									<img class="isshow" src="/static/index/image/微信图片_20180726171607.png" />
								</li>
							</a>
							<a href="http://www.php.com:999/tp5/tp55/tp5/public/index.php/index/xmt/xmt.html">
								<li class="ischeck" style="position: relative">
									<img src="/static/index/image/微信图片_20180726171550.png" />
									<img class="isshow" src="/static/index/image/微信图片_20180726171607.png" />
								</li>
							</a>
						</ul>
					</div>
					<div class="right">
						<div class="right_left ischeck" style="position: relative">
							<img src="/static/index/image/微信图片_20180726171607.png" />
							<img class="isshow" src="/static/index/image/微信图片_20180726171607.png" />
						</div>
						<div class="right_right">
							<ul>
								<a href="http://www.php.com:999/tp5/tp55/tp5/public/index.php/index/xmt/xmt.html">
								<li class="ischeck" style="position: relative">
									<img src="/static/index/image/微信图片_20180726171612.png" />
									<img class="isshow" src="/static/index/image/微信图片_20180726171607.png" />
								</li>

								<li class="ischeck" style="position: relative">
									<img src="/static/index/image/微信图片_20180726171555.png" />
									<img class="isshow" src="/static/index/image/微信图片_20180726171607.png" />
								</li>
								</a>
							</ul>
						</div>
					</div>
				</div>

				<div class="clear" style="clear: both;"></div>
			</div>
		</div>

		<div class="_three">
			<div class="inner">
				<div class="top">
					<h1>C O O P E R A T I V E &nbsp;&nbsp; P A R T N E R</h1>
					<div style="width: 2%;border-bottom: 2px solid red;margin: 10px auto;"></div>
					<span>我们的合作伙伴</span>
					<div style="width: 10%;border-bottom: 1px solid darkgray;margin: 3px auto;"></div>
				</div>

				<div id="slideBox" class="slideBox">
					<div class="bd">
						<ul>
							<li>
								<img src="/static/index/image/lis_1.png" />
								<img src="/static/index/image/lis_2.png" />
								<img src="/static/index/image/lis_3.png" />
								<img src="/static/index/image/lis_4.png" />
								<img src="/static/index/image/lis_5.png" />
								<img src="/static/index/image/lis_6.png" />
								<img src="/static/index/image/lis_7.png" />
								<img src="/static/index/image/lis_8.png" />
								<img src="/static/index/image/lis_9.png" />
								<img src="/static/index/image/lis_10.png" />
								<div class="clear"></div>
							</li>
							<li>
								<img src="/static/index/image/lis_11.png" />
								<img src="/static/index/image/lis_12.png" />
								<img src="/static/index/image/lis_13.png" />
								<img src="/static/index/image/lis_14.png" />
								<img src="/static/index/image/lis_15.png" />
								<img src="/static/index/image/lis_16.png" />
								<img src="/static/index/image/lis_17.png" />
								<img src="/static/index/image/lis_18.png" />
								<img src="/static/index/image/lis_19.png" />
								<img src="/static/index/image/lis_20.png" />
								<div class="clear"></div>
							</li>
						</ul>
					</div>

					<!-- 下面是前/后按钮代码，如果不需要删除即可 -->
					<a class="prev" href="javascript:void(0)"></a>
					<a class="next" href="javascript:void(0)"></a>

				</div>
				<div class="clear" style="clear: both;">

				</div>
			</div>
		</div>
		<script type="text/javascript">
            jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});
		</script>
		<div class="_five">
			<div class="inner">
				<div class="top">
					<h1>O U R S&nbsp;&nbsp;H O N O R</h1>
					<div style="width: 2%;border-bottom: 2px solid red;margin: 10px auto;"></div>
					<span>我们的荣誉</span>
					<div style="width: 5%;border-bottom: 1px solid darkgray;margin: 3px auto;"></div>
				</div>
				<a href="https://cintong.com/index.php/index/ry/ry.html?cateid=24">
				<div class="content">
                  <div class="clear"></div>
					<ul>
						<li>
							<div class="box">
								<img src="/static/index/image/1.jpg" alt=""style="height: 150px;width: 300px;">
							</div>
							<!--<div class="pox">
                            <ul>
                                <li>使用规范</li>
                                <li>主题规划</li>
                                <li>命名系统</li>
                                <li>品牌语言</li>
                            </ul>
                            <ul>
                                <li>品牌表现</li>
                                <li>品牌企划</li>
                                <li>品牌核心</li>

                            </ul>
                        </div>-->
						</li>
						<li>
							<div class="box">
								<img src="/static/index/image/2.jpg" alt=""style="height: 150px;width: 300px;">
							</div>
							<!--<div class="pox">
                            <ul>
                                <li>使用规范</li>
                                <li>主题规划</li>
                                <li>命名系统</li>
                                <li>品牌语言</li>
                            </ul>
                            <ul>
                                <li>品牌表现</li>
                                <li>品牌企划</li>
                                <li>品牌核心</li>

                            </ul>
                        </div>-->
						</li>
						<li>
							<div class="box">
								<img src="/static/index/image/3.jpg" alt=""style="height: 150px;width: 300px;">
							</div>
							<!--<div class="pox">
                            <ul>
                                <li>使用规范</li>
                                <li>主题规划</li>
                                <li>命名系统</li>
                                <li>品牌语言</li>
                            </ul>
                            <ul>
                                <li>品牌表现</li>
                                <li>品牌企划</li>
                                <li>品牌核心</li>

                            </ul>
                        </div>-->
						</li>
                       <div class="clear"></div>
					</ul>
				</div>
				</a>
				<!-- <button>想看更多实例 &nbsp;&nbsp;&nbsp;&nbsp;—> </button>-->
			</div>
          <div class="clear"></div>
		</div>
 
		<div class="_six">
			<div class="inner">
				<div class="top">
					<h1 class="text_red">CONTACT&nbsp;&nbsp;US</h1>
					<!-- <div style="width: 2%;border-bottom: 2px solid red;margin: 10px auto;"></div> -->
					<span class="six_con">请别客气&nbsp;&nbsp;&nbsp;与我们联系</span>

				</div>

				<div class="span">
					<h1>客服电话 : &nbsp;010-5701-0319</h1>
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
window.onscroll = function(){

  var distance = document.documentElement.scrollTop || document.body.scrollTop; //距离页面顶部的距离

  if( distance >= 300 ) { //当距离顶部超过300px时，显示图片
    document.getElementById('to_top').style.display = "";
  } else { //距离顶部小于300px，隐藏图片
    document.getElementById('to_top').style.display = "none";
  }

  var toTop = document.getElementById("to_top"); //获取图片所在的div

  toTop.onclick = function(){ //点击图片时触发的点击事件
    document.documentElement.scrollTop = document.body.scrollTop = 0; //页面移动到顶部
  }
}
</script>
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