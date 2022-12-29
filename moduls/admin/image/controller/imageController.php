<?php 

namespace moduls\admin\image\controller;
use moduls\admin\image\model\imageModel;
use core\controller;

class imageController extends controller
{
    public $image;
    
    public function __construct()
    {
        isXmlHttpRequest('admin/product');
        parent::__construct();
        $this->image = new imageModel();
    }

    public function imageByProduct($product_id)
    {
        $this->layout('admin', 'load', 'image', 'image', 'imageByProduct', [
            'image' => $this->image->imageByProduct($product_id),
            'product' => $this->image->product($product_id)
        ]);
    }

    public function imageLook($image_id)
    {
        $this->view('admin', 'image', 'image', 'imageLook', [
            'image' => $this->image->imageLook($image_id),
        ]);
    }

    public function imageCreate($product_id)
    {
        $this->view('admin', 'image', 'image', 'imageCreate', [
            'image' => $this->image->product($product_id),
        ]);
    }

    public function __imageCreate()
    {
        $this->image->__imageCreate();
    }

    public function __status($id)
    {
        $this->image->__status($id);
    }

    public function _delete($id)
    {
        $this->image->_delete($id);
    }
}

