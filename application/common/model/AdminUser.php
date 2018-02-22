<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/2/22 17:58
 * Module: AdminUser.php
 * Please No Garbage Code!
 */

namespace app\common\model;


use think\Model;

class AdminUser extends Model
{
    public function add($data)
    {
        if (!is_array($data)) exception('传递数据不合法');
        $this->allowField(true)->save($data);
        return $this->id;
    }
}