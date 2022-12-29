<?php 

namespace moduls\main\gallery\controller;
use moduls\main\gallery\model\galleryModel;
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
        $this->layout('main', 'main', 'gallery', 'gallery', 'gallery', [
            'gallery' => $this->gallery->gallery()
        ]);
    }

    public function galleryLoadMore($last_gallery_id)
    {
        $this->gallery->galleryLoadMore($last_gallery_id);
    }
}

