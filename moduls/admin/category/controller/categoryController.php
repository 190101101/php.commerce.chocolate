<?php 

namespace moduls\admin\category\controller;
use moduls\admin\category\model\categoryModel;
use core\controller;

class categoryController extends controller
{
    public $category;
    
    public function __construct()
    {
        parent::__construct();
        $this->category = new categoryModel();
    }

    public function category()
    {
        $this->layout('admin', 'admin', 'category', 'category', 'category',[
            'category' => $this->category->category()
        ]);
    }

    public function categoryCreate()
    {
        isXmlHttpRequest('admin/category');
        $this->view('admin', 'category', 'category', 'categoryCreate');
    }

    public function __categoryCreate()
    {
        $this->category->__categoryCreate();
    }

    public function categoryUpdate($id)
    {
        isXmlHttpRequest('admin/category');
        $this->view('admin', 'category', 'category', 'categoryUpdate',[
            'category' => $this->category->categoryUpdate($id),
        ]);
    }

    public function __categoryUpdate()
    {
        $this->category->__categoryUpdate();
    }

    public function __status($id)
    {
        $this->category->__status($id);
    }

    public function _delete($id)
    {
        $this->category->_delete($id);
    }
}

