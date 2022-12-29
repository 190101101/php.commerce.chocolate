<?php 

namespace moduls\main\buy\controller;
use moduls\main\buy\model\buyModel;
use core\controller;

class buyController extends controller
{
    public $buy;
    
    public function __construct()
    {
        $this->buy = new buyModel();
    }

    public function buy()
    {
        $this->view('main', 'buy', 'buy', 'buy', [
            'buy' => $this->buy->buy()
        ]);
    }

    public function buyRead($buy_id)
    {
        isXmlHttpRequest();
        $this->view('main', 'buy', 'buy', 'buyRead',[
            'buy' => $this->buy->buyRead($buy_id),
            'shop' => $this->buy->shop($buy_id),
        ]);
    }
}

