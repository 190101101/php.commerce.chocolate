<?php 

namespace moduls\admin\user\controller;
use moduls\admin\user\model\userModel;
use core\controller;

class userController extends controller
{
    public $user;
    
    public function __construct()
    {
        parent::__construct();
        $this->user = new userModel();
    }

    public function user()
    {
        $this->layout('admin', 'admin', 'user', 'user', 'user',[
            'user' => $this->user->user()
        ]);
    }

    public function userCreate()
    {
        isXmlHttpRequest('admin/user');
        $this->view('admin', 'user', 'user', 'userCreate');
    }

    public function __userCreate()
    {
        $this->user->__userCreate();
    }

    public function userUpdate($id)
    {
        isXmlHttpRequest('admin/user');
        $this->view('admin', 'user', 'user', 'userUpdate', [
            'user' => $this->user->userUpdate($id),
        ]);
    }

    public function __userUpdate()
    {
        $this->user->__userUpdate();
    }

    public function __status($id)
    {
        $this->user->__status($id);
    }

    public function _delete($id)
    {
        $this->user->_delete($id);
    }
}

