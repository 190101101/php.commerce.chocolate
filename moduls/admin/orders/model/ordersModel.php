<?php 

namespace moduls\admin\orders\model;
use core\model;
use \Valitron\Validator as v;
use library\mailer;

class ordersModel extends model
{
    public function orders()
    {
        return $this->db->t1where('orders', 'orders.orders_status=1 && orders.orders_type=?', [
            'delivery'
        ], 2);
    }

    public function ordersDelivery($user_id)
    {
        $return = $this->db->t1where('orders', 'orders.user_id=? && orders.orders_type=?', [
            $user_id, 'delivery'
        ]);

        if($return)
        {
            return $return;
        }

        exit;
    }

    public function cartByDeliveryOrders($orders_id)
    {
        if($orders_id)
        {
            return $this->db->t2where('cart', 'orders', 'orders.orders_id=? && orders.orders_type=?', [
                $orders_id, 'delivery'
            ], 2);
        }
    }

    public function _ordersMailer($orders_id)
    {
        $orders = $this->db->t1where('orders', 'orders_id=?', [
            $orders_id
        ]);

        if(!$orders)
        {
            _message(404, $this->return->order_not_found);
        }

        if($orders->orders_confirm == 1 && $orders->orders_mailer == 0)
        {
            $return = $this->db->whereupdate('orders', 'orders_mailer=1', 'orders_id=?', [
                $orders->orders_id
            ]);

            if($return['status'] == TRUE)
            {
                mailer::send();
            }

            _message(200, $this->return->success);
        }
        else
        {
            _message(404, $this->return->error);
        }
    }

    public function _ordersConfirm($orders_id)
    {
        $orders = $this->db->t1where('orders', 'orders_id=?', [
            $orders_id
        ]);

        if(!$orders)
        {
            _message(404, $this->return->order_not_found);
        }

        $cart = $this->db->t1where('cart', 'orders_id=? && cart_status=1', [
            $orders->orders_id
        ], 2, 1);

        if(!$cart)
        {
            _message(300, $this->return->cart_active_not_found);
        }
        else
        {
            $cart_array = [];
            foreach($cart as $key => $value)
            {
                $cart_array[] = $value['product_id'];
            }

            $product = $this->db->t1columnwherein('product', ['product_id, product_stock, product_price'], 'product_id', $cart_array, 2, 1);

            $stock_update = [];
            $cart_status = false;

            for($i = 0; $i < count($product); $i++)
            {
                $stock_piece = $product[$i]['product_stock'] - $cart[$i]['cart_product_piece'];

                if($stock_piece < 1)
                {
                    $stock_update[$i] = [
                        'cart_id' => $cart[$i]['cart_id'],
                        'cart_product_piece' => $product[$i]['product_stock'],
                        'cart_price_total' => $product[$i]['product_price'] * $product[$i]['product_stock']
                    ];

                    $cart_status = $this->db->whereupdate('cart', 
                        'cart_product_piece=?, cart_price_total=?', 'cart_id=?', [
                        $stock_update[$i]['cart_product_piece'], 
                        $stock_update[$i]['cart_price_total'], 
                        $stock_update[$i]['cart_id']
                    ]);
                }
            }

            if($cart_status['status'] == TRUE)
            {
                $status = $this->db->whereupdate('orders', 'orders_price=?, orders_refusal=1, orders_confirm=1, user_confirm=0', 'orders_id=?', [
                    $this->db->t1wheresum('cart', 'cart_price_total', 'cart_status=1 && orders_id=?', [
                        $orders->orders_id])->sum, $orders->orders_id
                ]);
                    
                if($status['status'] == TRUE)
                {
                    _message(300, $this->return->cart_stock_update, false, false, 10);
                }
            }
        }

        $return = $this->db->whereupdate('orders', 'orders_confirm=1', 'orders_id=?', [
            $orders->orders_id
        ]);

        if($return['status'] == TRUE)
        {
            $this->db->create('notice', [
                'user_id' => $orders->user_id,
                'notice_message' => 'from admin',
                'notice_body' => 'ваш заказ подтвержден'
            ]);

            _message(200, $this->return->order_confirmed);
        }else
        {
            _message(300, $this->return->order_cancel);
        }
    }

    public function _ordersBuy($orders_id)
    {
        $data = [];

        $orders = $this->db->t1where('orders', 'orders_id=?', [
            $orders_id
        ]);

        if(!$orders)
        {
            _message(404, $this->return->order_not_found);
        }
        else if($orders->orders_confirm == 0)
        {
            _message(300, $this->return->order_need_confirm);
        }


        $cart = $this->db->t1where('cart', 'cart.orders_id=? && cart.cart_status = 1', [
            $orders->orders_id
        ], 2, 1);

        if(!$cart)
        {
            _message(404, $this->return->cart_order_not_found);
        }

        $user = $this->db->t1where('user', 'user_id=?', [
            $orders->user_id
        ]);

        $buy = [
            'user_id' => $user->user_id,
            'user_login' => $user->user_login,
            'user_email' => $user->user_email,
            'user_phone' => $user->user_phone,
            'user_address' => $user->user_address,
            'user_ip' => $user->user_ip,
            'buy_price' => $orders->orders_price,
            'buy_card' => $orders->orders_card,
        ];

        $status = $this->db->create('buy', $buy);

        if($status['status'] == FALSE)
        {
            _message(404, $this->return->error);
        }

        $buy_id = $this->db->t1desc('buy')->buy_id;

        foreach($cart as $key => $value)
        {
            $data[] = [
                'buy_id'               => $buy_id,
                'product_id'           => $value['product_id'],
                'user_id'              => $value['user_id'],
                'shop_product_name'    => $value['cart_product_name'],
                'shop_product_image'   => $value['cart_product_image'],
                'shop_product_price'   => $value['cart_product_price'],
                'shop_product_piece'   => $value['cart_product_piece'],
                'shop_total_price'     => $value['cart_product_price'] * $value['cart_product_piece'],
                'shop_product_portion' => $value['cart_product_portion'],
            ];
        }

        for($i = 0; $i < count($data); $i++)
        {
            $return = $this->db->create('shop', $data[$i]);
            if($return['status'] == TRUE)
            {
                $this->db->whereupdate('product', 'product_buy=product_buy + ?, product_stock=?', 'product_id=?', [
                    $data[$i]['shop_product_piece'], $this->db->t1where('product', 'product_id=?', [$data[$i]['product_id']])->product_stock - $data[$i]['shop_product_piece'], $data[$i]['product_id']
                ]);                
            }
        }

        if($return['status'] == TRUE)
        {
            $this->db->wheredelete('cart', 'orders_id=?', [
                $orders->orders_id
            ]);

            $this->db->wheredelete('orders', 'orders_id=?', [
                $orders->orders_id
            ]);

            _message(200, $this->return->success);
        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function _ordersRefuse($orders_id)
    {
        $orders = $this->db->t1where('orders', 'orders_id=?', [
            $orders_id
        ]);

        if($orders)
        {
            $status = $this->db->wheredelete('cart', 'orders_id=?', [
                $orders->orders_id
            ]);

            $this->db->wheredelete('orders', 'orders_id=?', [
                $orders->orders_id
            ]);

            $this->db->create('notice', [
                'user_id' => $orders->user_id,
                'notice_message' => 'from admin',
                'notice_body' => 'ваш заказ отклонено'
            ]);

            _message(200, 'orders '.$this->return->refused);
        }
        else
        {
            _message(404, $this->return->order_not_found);
        }
    }

    public function _delete($id)
    {
        $orders = $this->db->t1where('orders', 'orders_id=?', [$id]);

        if(!$orders)
        {
            _message(404, $this->return->error);
        }

        $return = $this->db->wheredelete('orders', 'orders_id=?', [
            $orders->orders_id
        ]);

        if($return['status'] == TRUE)
        {
            $this->db->wheredelete('cart', 'user_id=?', [$orders->user_id]);
            _message(200, 'orders '.$this->return->deleted);
        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function __cartStatus($cart_id)
    {
        $cart = $this->db->t1where('cart', 'cart_id=?', [
            $cart_id
        ]);

        $orders = $this->db->t1where('orders', 'user_id=?', [
            $cart->user_id
        ]);

        if($orders->orders_confirm == 1)
        {
            _message(300, $this->return->cannot_after_confirm);
        }

        $return = $this->db->whereupdate('cart', 'cart_status=?', 'cart_id=?', [
            $cart->cart_status == 0 ? 1 : 0, $cart_id
        ]);

        if($return['status'] == TRUE)
        {
            $sum = $this->db->t1wheresum('cart', 'cart_price_total', 'cart_status=?', [1])->sum ?? 0;
            $this->db->whereupdate('orders', 'orders_price=?', 'orders_id=?', [
                $sum, $orders->orders_id
            ]);

            _message(200, $this->return->status_success, $sum);
        }
        else
        {
            _message(404, $this->return->status_error);
        }
    }
}

