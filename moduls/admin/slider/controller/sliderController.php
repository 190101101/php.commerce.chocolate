<?php 

namespace moduls\admin\slider\controller;
use moduls\admin\slider\model\sliderModel;
use core\controller;

class sliderController extends controller
{
    public $slider;
    
    public function __construct()
    {
        parent::__construct();
        $this->slider = new sliderModel();
    }

    public function slider()
    {
        $this->layout('admin', 'admin', 'slider', 'slider', 'slider',[
            'slider' => $this->slider->slider()
        ]);
    }

    public function sliderCreate()
    {
        isXmlHttpRequest('admin/slider');
        $this->view('admin', 'slider', 'slider', 'sliderCreate');
    }

    public function __sliderCreate()
    {
        $this->slider->__sliderCreate();
    }

    public function _delete($id)
    {
        $this->slider->_delete($id);
    }
}

