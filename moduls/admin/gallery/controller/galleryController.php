<?php 

namespace moduls\admin\gallery\controller;
use moduls\admin\gallery\model\galleryModel;
use core\controller;

class galleryController extends controller
{
    public $gallery;
    
    public function __construct()
    {
        parent::__construct();
        $this->gallery = new galleryModel();
    }

    public function gallery()
    {
        $this->layout('admin', 'admin', 'gallery', 'gallery', 'gallery',[
            'gallery' => $this->gallery->gallery()
        ]);
    }

    public function galleryCreate()
    {
        isXmlHttpRequest('admin/gallery');
        $this->view('admin', 'gallery', 'gallery', 'galleryCreate');
    }

    public function __galleryCreate()
    {
        $this->gallery->__galleryCreate();
    }

    public function _delete($id)
    {
        $this->gallery->_delete($id);
    }
}

