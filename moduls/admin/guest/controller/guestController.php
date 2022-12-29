<?php 

namespace moduls\admin\guest\controller;
use moduls\admin\guest\model\guestModel;
use core\controller;

class guestController extends controller
{
    public $guest;
    
    public function __construct()
    {
        parent::__construct();
        $this->guest = new guestModel();
    }

    public function guest()
    {
        $this->layout('admin', 'admin', 'guest', 'guest', 'guest',[
            'guest' => $this->guest->guest()
        ]);
    }

    public function __status($id)
    {
        $this->guest->__status($id);
    }

    public function _delete($id)
    {
        $this->guest->_delete($id);
    }
}

