<?php 

namespace moduls\main\video\controller;
use moduls\main\video\model\videoModel;
use \core\controller;

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
        $this->layout('main', 'main', 'video', 'video', 'video', [
            'video' => $this->video->video()
        ]);
    }

    public function videoLoadMore($start)
    {
        isXmlHttpRequest('video');
        $this->video->videoLoadMore($start);
    }

    public function videoLook($video_id)
    {
        isXmlHttpRequest('video');
        $this->view('main', 'video', 'video', 'videoLook', [
            'video' => $this->video->videoLook($video_id),
        ]);
    }
}

