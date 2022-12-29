<?php 

namespace moduls\admin\blog\controller;
use moduls\admin\blog\model\blogModel;
use core\controller;

class blogController extends controller
{
    public $blog;
    
    public function __construct()
    {
        parent::__construct();
        $this->blog = new blogModel();
    }

    public function blog()
    {
        $this->layout('admin', 'admin', 'blog', 'blog', 'blog',[
            'blog' => $this->blog->blog()
        ]);
    }

    public function blogCreate()
    {
        isXmlHttpRequest('admin/blog');
        $this->view('admin', 'blog', 'blog', 'blogCreate');
    }

    public function __blogCreate()
    {
        $this->blog->__blogCreate();
    }

    public function blogUpdate($id)
    {
        isXmlHttpRequest('admin/blog');
        $this->view('admin', 'blog', 'blog', 'blogUpdate',[
            'blog' => $this->blog->blogUpdate($id),
        ]);
    }

    public function __blogUpdate()
    {
        $this->blog->__blogUpdate();
    }

    public function __status($id)
    {
        $this->blog->__status($id);
    }

    public function _delete($id)
    {
        $this->blog->_delete($id);
    }
}

