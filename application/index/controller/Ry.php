<?php
namespace app\index\controller;
use app\index\controller\Base;
class Ry extends Base
{
    public function ry()
    {
        $artres=db('article')->alias('a')->join('qy_pics b','a.id=b.aid')->limit(3)->select();
        $this->assign('artres',$artres);
        return view();
    }
}