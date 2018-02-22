<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/2/22 17:48
 * Module: AdminUser.php
 * Please No Garbage Code!
 */

namespace app\common\validate;


use think\Validate;

class AdminUser extends Validate
{
    protected $rule = [
        'username' => 'requere|max:20',
        'password' => 'requere|max:20',
    ];
}