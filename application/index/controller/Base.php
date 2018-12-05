<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Config as ConfigModel;
class Base extends Controller
{
    public function _initialize()
    {
      	
        $cateData=db('category')->order("sort desc")->select();
        $logoConfig=db('config')->select();
        $config=new ConfigModel();
        $logoPath=$config->getLogoPath($logoConfig);
        $cyclePic=db('banner')->select();
        $configInfo=$config->getConfigInfo($logoConfig);
        $id=input('id');
        $this->assign('id',$id);
      //获取网站配置信息
      	$config=db('config')->field('config')->find();
     //解码配置信息
      $config=json_decode($config['config'],true);
       //判断网站状态
      if(!isset($config['state'])){
      			$config['state']=0;
      }
      $this->checkweb($config['state'],$config['closeinfo']);
      $this->assign([
      	
       
        'config'=>$config
      ]);
     

        //顶级分类跳转
        $arrPath[]="http://cintong.com/index.php/index/ppcy/ppcy.html?id=1";
        $arrPath[]="http://cintong.com/index.php/index/ys/ys.html?id=5";
        $arrPath[]="http://cintong.com/index.php/index/xmt/xmt.html?id=10";
        $arrPath[]="http://cintong.com/index.php/index/gghd/gghd.html?id=11";
        $arrPath[]="http://cintong.com/index.php/index/wc/wc.html?id=12";
        $arrPath[]="http://cintong.com/index.php/index/dm/dm.html?id=13";

        //Cate标签跳转 顶部的
        $arrCatePath[]="xintong.cn/";
        $arrCatePath[]="xintong.cn/index/about/about.html?cateid=34";
        $arrCatePath[]="xintong.cn/index/ry/ry.html?cateid=36";
        $arrCatePath[]="xintong.cn/index/lianxi/lianxi.html?cateid=28";

        $cateid=input('cateid');
        $cateInfo=db('article')->where('cid','=',$cateid)->select();
        $arrId=array();
        foreach ($cateInfo as $value)
        {
            $arrId[]=$value['id'];
        }
        $catePic=array();
        for ($i=0;$i<count($arrId);$i++)
        {
            $catePic[]=db('pics')->where('aid','=',$arrId[$i])->select();
        }

        $this->assign(['cateInfo'=>$cateInfo,'catePic'=>$catePic]);
        $this->assign(['cateName'=>$cateData,'logoPath'=>$logoPath,'configInfo'=>$configInfo,'arrPath'=>$arrPath,'arrCatePath'=>$arrCatePath]);
    }
  
  private function checkweb($state,$info="网站已关闭"){
  			if($state!=1){
              $this->redirect(url("index/Cintong/index"));
            		//echo $info;
              exit;
              
            //
            }
    
  }
}