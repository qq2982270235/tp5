<?php
namespace app\index\model;
use think\Model;
class Config extends Model
{
    public function getLogoPath($logoPath)
    {
        foreach ($logoPath as $value)
        {
            $string=$value['config'];
        }
        $arr=explode(',',$string);
        return substr($arr[1],8);
    }

    public function getConfigInfo($logoPath)
    {
        foreach ($logoPath as $value)
        {
            $string=$value['config'];
        }
        $arr=explode(',',$string);
        $title=substr($arr[0],9);
        $address=substr($arr[6],10);
        $phone=substr($arr[4],8);
        $online=substr($arr[5],10);
        $arrSum=[];
        $arrSum['title']=str_replace('"','',$title);
        $arrSum['address']=str_replace('"','',$address);
        $arrSum['phone']=str_replace('"','',$phone);
        $arrSum['online']=str_replace('"','',$online);
        return $arrSum;
    }

}