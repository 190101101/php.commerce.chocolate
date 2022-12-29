<?php 

namespace moduls\admin\requires\controller;
use moduls\admin\requires\model\requireModel;
use core\controller;

class requireController extends controller
{
    public $require;

    public function __construct()
    {
        $this->require = new requireModel();
    }
}