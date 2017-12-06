<?php
namespace app\admin\model;
use think\Model;
class Surname extends Model
{
    /**
     * 获取姓氏
     * @param int $search
     * @param int $order
     * @param int $location,起始位置
     * @param int $length
     * @return bool
     */
    public function getSurname($search,$order,$location=0,$length=5)
    {

        return $this->where('name|pinyin','like','%'.$search.'%')->order($order)->limit($location,$length)->select();
    }

    public function seach($keywords)
    {
        return $this->where('name|pinyin','like','%'.$keywords.'%')->select();
    }


}