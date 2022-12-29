<?php 

namespace moduls\general\general\controller;
use moduls\general\general\model\generalModel;
use core\controller;

class generalController extends controller
{
    public $general;
    
    public function __construct()
    {
        isXmlHttpRequest();
        $this->general = new generalModel();
    }

    public function noticeUser()
    {
        $this->general->noticeUser();
    }

    public function noticeAll()
    {
        $this->general->noticeAll();
    }

    public function lang($language)
    {
        $this->general->lang($language);
    }
}

