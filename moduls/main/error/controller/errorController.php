<?php 

namespace moduls\main\error\controller;
use moduls\main\error\model\errorModel;
use core\controller;

class errorController extends controller
{
    public $error;

    public function __construct()
    {
        $this->error = new errorModel();
    }

    public function _404()
    {
        $this->layout('main', 'main', 'error', 'error', '404', [
            'error' => 'error 404 page not found'
        ]);
    }

     public function pageNotFound()
    {
        $this->view('main', 'error', 'error', 'pageNotFound');
    }

    public function error($code)
    {
        $this->layout('main', 'default', 'error', 'error', 'error', [
            'error' => $this->error->error($code)
        ]);
    }
}