<?php 

namespace moduls\main\contact\controller;
use moduls\main\contact\model\contactModel;
use core\controller;

class contactController extends controller
{
    public $contact;
    
    public function __construct()
    {
        $this->contact = new contactModel();
    }

    public function contact()
    {
        $data = [];
        $this->layout('main', 'main', 'contact', 'contact', 'contact', [], $this->object);
    }
}

