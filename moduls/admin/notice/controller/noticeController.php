<?php 

namespace moduls\admin\notice\controller;
use moduls\admin\notice\model\noticeModel;
use core\controller;

class noticeController extends controller
{
    public $notice;
    
    public function __construct()
    {
        parent::__construct();
        $this->notice = new noticeModel();
    }

    public function notice()
    {
        $this->layout('admin', 'admin', 'notice', 'notice', 'notice',[
            'notice' => $this->notice->notice()
        ]);
    }

    public function noticeCreate()
    {
        isXmlHttpRequest('admin/notice');
        $this->view('admin', 'notice', 'notice', 'noticeCreate');
    }

    public function __noticeCreate()
    {
        $this->notice->__noticeCreate();
    }

    public function __status($id)
    {
        $this->notice->__status($id);
    }

    public function _delete($id)
    {
        $this->notice->_delete($id);
    }
}

