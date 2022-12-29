<?php 

namespace moduls\main\home\controller;
use moduls\main\home\model\homeModel;
use core\controller;

class homeController extends controller
{
    public $home;
    
    public function __construct()
    {
        $this->home = new homeModel();
    }

    public function index()
    {
        $this->layout('main', 'main', 'home', 'home', 'home', [
            'slider' => $this->home->slider(),
            'video' => $this->home->video()
        ]);
    }

    public function chat()
    {
        $this->layout('main', 'main', 'home', 'home', 'chat');
    }
}

