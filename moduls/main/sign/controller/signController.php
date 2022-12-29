<?php 

namespace moduls\main\sign\controller;
use moduls\main\sign\model\signModel;
use core\controller;

class signController extends controller
{
    public $sign;
    
    public function __construct()
    {
        $this->sign = new signModel();
    }

    public function signin()
    {
        isXmlHttpRequest();
        $this->view('main', 'sign', 'sign', 'signin');
    }

    public function __signin()
    {
        isXmlHttpRequest();
        $this->sign->__signin();
    }

    public function signup()
    {
        isXmlHttpRequest();
        $this->view('main', 'sign', 'sign', 'signup');
    }

    public function __signup()
    {
        isXmlHttpRequest();
        $this->sign->__signup();
    }

    public function _signout()
    {
        $this->sign->_signout();
    }
}

