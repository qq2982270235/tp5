<?php
namespace app\index\controller;
use app\index\controller\Base;
class Ys extends Base
{
    public function Ys($id)
    {
        $banner=db('erji')->where('pid','=','0')->select();
//        $content=db('erjineirong')->select();
//        $pic=db('erjipic')->select();
        $cate=db('erji')->where('pid',$id)->select();
        $cid=[];
        foreach ($cate as $k=>$v){
            $res=db('erjineirong')->alias('a')
                ->join('erjipic c','c.aid=a.id','LEFT')
                ->order('a.istop desc,a.toptime Desc,a.addtime Desc')
                ->field('a.*,c.pic as pic')
                ->where('a.cid',$v['id'])
                ->select();
            $cate[$k]['list']=$res;
        }
        $this->assign('list',$cate);
        $this->assign(['banner'=>$banner]);
        return view();
    }
}