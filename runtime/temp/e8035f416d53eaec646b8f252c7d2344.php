<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:85:"D:\phpStudy\PHPTutorial\WWW\cintong\public/../application/index\view\about\about.html";i:1541669175;s:74:"D:\phpStudy\PHPTutorial\WWW\cintong\application\index\view\common\top.html";i:1540358118;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>关于信通</title>
	<link rel="stylesheet" type="text/css" href="/static/index/css/about.css">
  <script src="/static/index/js/zooming.js"></script>
</head>
<body>
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
            <img src="/static/index/image/497929422108944966.jpg">
        </div>
		<?php if(is_array($cateInfo) || $cateInfo instanceof \think\Collection || $cateInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $cateInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cateInfo): $mod = ($i % 2 );++$i;?>
		<div class="wenzhang" style="font-size:20px;"><p class="wen-p"><?php echo $cateInfo['title']; ?></p>
			<p class="neirong" style="color:#A00000;"><?php echo $cateInfo['desc']; ?></p>
			<p class="neironger"><?php echo $cateInfo['content']; ?></p>
		</div>
		<div class="zhongyi">

			<?php 
			foreach($catePic as $value)
			{
			foreach($value as $v)
			{
			if($v['aid']==$cateInfo['id'])
			{
			echo '<img src="/'.$v['pic'].'"  data-action="zoom">';
			}
			}
			}

			 ?>

		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
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





</body>
</html>