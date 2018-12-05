<?php
namespace app\index\controller;
use app\index\model\Config as ConfigModel;
use app\index\controller\Base;
class Index extends Base
{
    public function index()
    {
        $cateData=db('category')->order("sort desc")->select();
        $logoConfig=db('config')->select();
        $config=new ConfigModel();
        $logoPath=$config->getLogoPath($logoConfig);
        $cyclePic=db('banner')->select();
        $configInfo=$config->getConfigInfo($logoConfig);
        //$pics=db('pics')->select();

        $articleres=db('article')->where('cid','=','23')->select();
        $arrpicsId=array();
        foreach ($articleres as $v)
        {
            $arrpicsId[]=$v['id'];
        }
        $arrpics=array();
        for ($i=0;$i<count($arrpicsId);$i++)
        {
            $arrpics[]=db('pics')->where('aid','=',$arrpicsId[$i])->select();
        }


        $banner=db('erji')->where('pid','=','0')->select();
        $this->assign(['banner'=>$banner,'cateName'=>$cateData,'logoPath'=>$logoPath,'cyclePic'=>$cyclePic,'configInfo'=>$configInfo,'pics'=>$arrpics]);
        return view('index');
    }
  
}
