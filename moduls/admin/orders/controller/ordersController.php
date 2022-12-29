<?php 

namespace moduls\admin\orders\controller;
use moduls\admin\orders\model\ordersModel;
use core\controller;

class ordersController extends controller
{
    public $orders;
    
    public function __construct()
    {
        parent::__construct();
        $this->orders = new ordersModel();
    }

    public function orders()
    {
        $this->layout('admin', 'admin', 'orders', 'orders', 'orders', [
            'orders' => $this->orders->orders()
        ]);
    }

    public function ordersDelivery($user_id)
    {
        isXmlHttpRequest('admin/orders');
        $this->view('admin', 'orders', 'orders', 'ordersDelivery',[
            'orders' => $order = $this->orders->ordersDelivery($user_id),
            'cart' => $this->orders->cartByDeliveryOrders($order->orders_id),
        ]);
    }

    public function _ordersConfirm($orders_id)
    {
        isXmlHttpRequest('admin/orders');
        $this->orders->_ordersConfirm($orders_id);
    }

    public function _ordersMailer($orders_id)
    {
        isXmlHttpRequest('admin/orders');
        $this->orders->_ordersMailer($orders_id);
    }

    public function _ordersBuy($orders_id)
    {
        isXmlHttpRequest('admin/orders');
        $this->orders->_ordersBuy($orders_id);
    }

    public function _ordersRefuse($orders_id)
    {
        isXmlHttpRequest('admin/orders');
        $this->orders->_ordersRefuse($orders_id);   
    }

    public function __status($id)
    {
        isXmlHttpRequest('admin/orders');
        $this->orders->__status($id);
    }

    public function _delete($id)
    {
        isXmlHttpRequest('admin/orders');
        $this->orders->_delete($id);
    }

    public function __cartStatus($cart_id)
    {
        isXmlHttpRequest('admin/orders');
        $this->orders->__cartStatus($cart_id);
    }

}

