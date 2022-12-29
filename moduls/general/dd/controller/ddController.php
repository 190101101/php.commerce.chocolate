<?php 

namespace moduls\general\dd\controller;
use moduls\general\dd\model\ddModel;
use core\controller;

class ddController extends controller
{
    public $dd;
    
    public function __construct()
    {
        $this->dd = new ddModel();
    }

    public function dd()
    {
        $this->layout('general', 'general', 'dd', 'dd', 'dd');
    }
}

