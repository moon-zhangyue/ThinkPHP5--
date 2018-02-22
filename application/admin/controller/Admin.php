<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/2/22 16:37
 * Module: Admin.php
 * Please No Garbage Code!
 */

namespace app\admin\controller;


use think\Controller;

class Admin extends Controller
{
    public function add()
    {
        return $this->fetch();
    }
}