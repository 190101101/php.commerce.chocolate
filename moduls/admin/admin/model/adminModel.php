<?php 

namespace moduls\admin\admin\model;

use core\model;

class adminModel extends model
{
    public function buyCashSum()
    {
        return $this->db->t1sum('buy', 'buy_price');
    }

    public function buyCount()
    {
        return $this->db->t1count('buy', 'buy_id');
    }   

    public function buyProductCount()
    {
        return $this->db->t1count('shop', 'shop_id');
    }   

     public function orders()
    {
        return $this->db->t1wherecount('orders', 'orders_status = 1');
    }    

    public function ordersDeliverySum()
    {
        return $this->db->t1wheresum('orders', 'orders_price', 'orders_status=1 && orders_type=?', ['delivery']);
    }

    public function ordersDeliveryCount()
    {
        return $this->db->t1wherecount('orders', 'orders_price', 'orders_status=1 && orders_type=?', ['delivery']);
    }

    public function productCount()
    {
        return $this->db->t1count('product', 'product_id');
    }

    public function productFinished()
    {
        return $this->db->t1wherecount('product', 'product_id', 'product_stock < ?', [1]);
    }
}