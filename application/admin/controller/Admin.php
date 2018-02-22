<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/2/22 16:37
 * Module: Admin.php
 * Please No Garbage Code!
 */

namespace app\admin\controller;


use app\common\model\AdminUser;
use think\Controller;

class Admin extends Controller
{
    public function add()
    {
        if (request()->isPost()) {
            $data     = input('post.');
            $validate = validate('AdminUser');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            $data['password'] = md5($data['password']);
            $data['status']   = 1;

            $model = new AdminUser();

            try {
                $id = $model->add($data);
                if ($id) $this->success('success!');
                $this->error('failed');
            } catch (\exception $e) {
                $this->error($e->getMessage());
            }
        } else {
            return $this->fetch();
        }
    }
}