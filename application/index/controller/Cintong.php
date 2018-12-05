<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Config as ConfigModel;
class Cintong extends Controller
{
	public function index(){
      $config=db('config')->field('config')->find();
      //解码配置信息
      $config=json_decode($config['config'],true);
       //判断网站状态
      if(isset($config['state']) && $config['state']==1){
      			$this->redirect('index/Index/index');
      }
     return view();
    }
}

     