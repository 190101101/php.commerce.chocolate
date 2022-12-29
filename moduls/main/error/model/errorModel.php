<?php 
namespace moduls\main\error\model;
use core\model;

class errorModel extends model
{
    public $array = ['class', 'method', 'controller'];

    public function error($code)
    {
        if(in_array($code, $this->array) !== FALSE)
        {
            return 'error: ' . $code;
        }
        else
        {
            redirect('404');
        }
    }
}