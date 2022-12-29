<?php 

namespace moduls\admin\video\controller;
use moduls\admin\video\model\videoModel;
use core\controller;

class videoController extends controller
{
    public $video;
    
    public function __construct()
    {
        parent::__construct();
        $this->video = new videoModel();
    }

    public function video()
    {
        $this->layout('admin', 'admin', 'video', 'video', 'video',[
            'video' => $this->video->video()
        ]);
    }

    public function videoLook($video)
    {
        isXmlHttpRequest('admin/video');
        $this->view('admin',  'video', 'video', 'videoLook',[
            'video' => $this->video->videoLook($video)
        ]);
    }

    public function videoCreate()
    {
        isXmlHttpRequest('admin/video');
        $this->view('admin', 'video', 'video', 'videoCreate');
    }

    public function __videoCreate()
    {
        $this->video->__videoCreate();
    }

    public function _delete($id)
    {
        $this->video->_delete($id);
    }
}

