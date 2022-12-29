<?php 

namespace moduls\admin\buy\controller;
use moduls\admin\buy\model\buyModel;
use core\controller;

class buyController extends controller
{
    public $buy;
    
    public function __construct()
    {
        parent::__construct();
        $this->buy = new buyModel();
    }

    public function buy()
    {
        $this->layout('admin', 'admin', 'buy', 'buy', 'buy', [
            'buy' => $this->buy->buy()
        ]);
    }

    public function buyRead($buy_id)
    {
        isXmlHttpRequest('admin/buy');
        $this->view('admin', 'buy', 'buy', 'buyRead',[
            'buy' => $this->buy->buyRead($buy_id),
            'shop' => $this->buy->shop($buy_id),
        ]);
    }

    public function _buyConfirm($buy_id)
    {
        $this->buy->_buyConfirm($buy_id);   
    }

    public function _buyRefuse($buy_id)
    {
        $this->buy->_buyRefuse($buy_id);   
    }

    public function __status($id)
    {
        $this->buy->__status($id);
    }

    public function _delete($id)
    {
        $this->buy->_delete($id);
    }
}

