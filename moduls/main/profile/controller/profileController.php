<?php 

namespace moduls\main\profile\controller;
use moduls\main\profile\model\profileModel;
use core\controller;

class profileController extends controller
{
    public $profile;
    
    public function __construct()
    {
        isXmlHttpRequest();
        $this->profile = new profileModel();
    }

    public function profile()
    {
        $this->view('main', 'profile', 'profile', 'profile');
    }

    public function __profileInfoUpdate()
    {
        $this->profile->__profileInfoUpdate();
    }

    public function __profilePasswordUpdate()
    {
        $this->profile->__profilePasswordUpdate();
    }
}

