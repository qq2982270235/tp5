<?php
namespace app\index\controller;
use app\index\controller\Base;
use app\index\model\Config as ConfigModel;
class Lianxi extends Base
{
    public function lianxi()
    {
        $cateData=db('category')->order("sort desc")->select();
        $logoConfig=db('config')->select();
        $config=new ConfigModel();
        $logoPath=$config->getLogoPath($logoConfig);
        $configInfo=$config->getConfigInfo($logoConfig);
        $artres=db('article')->alias('a')->join('qy_pics b','a.id=b.aid')->limit(3)->select();
        $this->assign(['cateName'=>$cateData,'configInfo'=>$configInfo,'artres'=>$artres]);
        return view();
    }
}