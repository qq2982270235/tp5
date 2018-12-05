<?php
namespace app\index\controller;
use app\index\controller\Base;
class Untitled extends Base
{
    public function untitled()
    {
        $artres=db('article')->alias('a')->join('qy_pics b','a.id=b.aid')->limit(3)->select();
        $this->assign('artres',$artres);
        return view();
    }
}