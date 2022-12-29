<?php 

namespace moduls\main\cart\controller;
use moduls\main\cart\model\cartModel;
use core\controller;

class cartController extends controller
{
    public $cart;
    
    public function __construct()
    {
        // isXmlHttpRequest();
        $this->cart = new cartModel();
    }

    public function cart()
    {
        $this->view('main', 'cart', 'cart', 'cart', [
            'orders' => $orders = $this->cart->ordersByUser(),
            'cart' => $this->cart->cartByOrders($orders),
            'confirmOrders' => $confirmOrders = $this->cart->confirmOrdersByUser(),
            'confirmCart' => $this->cart->confirmCartByOrders($confirmOrders),
        ]);
    }

    public function _add($product_id)
    {
        $this->cart->_add($product_id);
    }

    public function _update($cart_id)
    {
        $this->view('main', 'cart', 'cart', 'cartUpdate', [
            'cart' => $this->cart->_update($cart_id),
        ]);
    }

    public function __update()
    {
        $this->cart->__update();
    }

    public function _delete($cart_id)
    {
        $this->cart->_delete($cart_id);
    }

    public function _drop()
    {
        $this->cart->_drop();
    }

    public function _confirm()
    {
        $this->cart->_confirm();
    }

    public function _payment()
    {
        $this->cart->_payment();
    }

    public function userConfirm()
    {
        $this->cart->userConfirm();
    }


}

