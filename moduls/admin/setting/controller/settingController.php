<?php 

namespace moduls\admin\setting\controller;
use moduls\admin\setting\model\settingModel;
use core\controller;

class settingController extends controller
{
    public $setting;
    
    public function __construct()
    {
        parent::__construct();
        $this->setting = new settingModel();
    }

    public function setting()
    {
        $this->layout('admin', 'admin', 'setting', 'setting', 'setting',[
            'setting' => $this->setting->setting()
        ]);
    }

    public function settingCreate()
    {
        isXmlHttpRequest('admin/setting');
        $this->view('admin', 'setting', 'setting', 'settingCreate');
    }

    public function __settingCreate()
    {
        $this->setting->__settingCreate();
    }

    public function settingUpdate($id)
    {
        isXmlHttpRequest('admin/setting');
        $this->view('admin', 'setting', 'setting', 'settingUpdate',[
            'setting' => $this->setting->settingUpdate($id),
        ]);
    }

    public function __settingUpdate()
    {
        $this->setting->__settingUpdate();
    }

    public function __status($id)
    {
        $this->setting->__status($id);
    }

    public function _delete($id)
    {
        $this->setting->_delete($id);
    }
}

