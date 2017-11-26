<?php
namespace app\admin\model;
use think\Model;
class Surname extends Model
{
    /**
     * 获取姓氏
     * @param int $location,起始位置
     * @param int $length
     * @return bool
     */
    public function getSurname($location=0,$length=5)
    {
        $order = [
            'id' => 'asc',
        ];
        return $this->order($order)->limit($location,$length)->select();
    }



}