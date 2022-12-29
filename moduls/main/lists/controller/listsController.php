<?php 

namespace moduls\main\lists\controller;
use moduls\main\lists\model\listsModel;
use core\controller;

class listsController extends controller
{
    public $lists;
    
    public function __construct()
    {
        $this->lists = new listsModel();
    }

    public function lists()
    {
        $this->layout('main', 'main', 'lists', 'lists', 'lists', [
            'product' => $this->lists->product()
        ]);
    }
}

