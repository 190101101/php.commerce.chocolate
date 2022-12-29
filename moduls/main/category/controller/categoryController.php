<?php 

namespace moduls\main\category\controller;
use moduls\main\category\model\categoryModel;
use \library\pagination as p;
use core\controller;

class categoryController extends controller
{
    public $category;
    
    public function __construct()
    {
        parent::__construct();
        $this->category = new categoryModel();
        $this->p = new p();
    }

    public function category()
    {
        $this->layout('main', 'main', 'category', 'category', 'category', [
            'page' => $p = $this->p->p($this->category->counter(), 12, 2),
            'category' => $this->category->category($p->start, $p->limit)
        ]);
    }
}

