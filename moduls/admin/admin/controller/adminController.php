<?php 

namespace moduls\admin\admin\controller;
use moduls\admin\admin\model\adminModel;
use core\controller;

class adminController extends controller
{
    public $admin;

    public function __construct()
    {
        $this->admin = new adminModel();
    }

    public function admin()
    {
        $this->layout('admin', 'admin', 'admin', 'admin', 'admin', [
            'buyCashSum' => $this->admin->buyCashSum(),
            'buyCount' => $this->admin->buyCount(),
            'buyProductCount' => $this->admin->buyProductCount(),
            'ordersDeliverySum' => $this->admin->ordersDeliverySum(),
            'ordersDeliveryCount' => $this->admin->ordersDeliveryCount(),
            'productCount' => $this->admin->productCount(),
            'productFinished' => $this->admin->productFinished(),
        ]);
    }

    public function qq()
    {
        $this->layout('admin', 'admin', 'admin', 'admin', 'qq', []);
    }
}