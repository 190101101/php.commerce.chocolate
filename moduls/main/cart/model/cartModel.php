<?php 

namespace moduls\main\cart\model;
use core\model;

class cartModel extends model
{
    public function ordersByUser()
    {
        return $this->db->t1where('orders', 'user_id=? && orders_status=0', [
            get_user_id()
        ]);
    }

    public function cartByOrders($orders)
    {
        if($orders)
        {
            return $this->db->t2where('cart', 'orders', 'orders.orders_id=? ORDER by cart.cart_id DESC', [
                $orders->orders_id
            ], 2);
        }
    }

    public function confirmOrdersByUser()
    {
        return $this->db->t1where('orders', 'orders.user_id=? && orders.orders_status=1', [
            get_user_id()
        ]);
    }

    public function confirmCartByOrders($confirmOrders)
    {
        if($confirmOrders)
        {
            return $this->db->t2where('cart', 'orders', 'orders.orders_id=? 
                && orders.orders_status=1', [$confirmOrders->orders_id], 2);
        }
    }

    public function _add($product_id)
    {
        $user = $this->db->t1where('user', 'user_id=? && user_status=1', [
            get_user_id()
        ]);

        if($user == FALSE)
        {
            _message(404, $this->return->signout);
        }

        $product = $this->db->t1where('product', 'product_id=? && product_stock > 0', [
            $product_id
        ]);

        if(!$product)
        {
            _message(300, $this->return->product_stock_few);
        }

        $wherecart = $this->db->t1where('cart', 'product_id=? && user_id=?', [
            $product_id, get_user_id()
        ]);


        if($wherecart)
        {
            _message(300, $this->return->cart_already);
        }

        $orders = $this->db->t1where('orders', 'user_id=?', [
            get_user_id()
        ]);

        if(!$orders)
        {
            $this->db->create('orders', [
                'user_id' => get_user_id(),
                'orders_card' => get_user_card(),
                'user_email' => get_user_email(),
                'user_login' => get_user_login(),
                'user_phone' => get_user_phone(),
                'user_address' => get_user_address(),
            ]);
        }

        $orders = $this->db->t1where('orders', 'user_id=?', [
            get_user_id()
        ]);

        $cart = [
            'orders_id'            => $orders->orders_id,
            'product_id'           => $product->product_id,
            'user_id'              => $orders->user_id,
            'cart_product_name'    => $product->product_name,
            'cart_product_image'   => $product->product_image,
            'cart_product_price'   => $product->product_price,
            'cart_price_total'     => $product->product_price,
            'cart_product_portion' => $product->product_portion,
        ];

        if($orders->orders_confirm == 1)
        {
            _message(300, $this->return->cart_already_confirmed);
        }

        if($orders->orders_status == 1)
        {
            $cart += ['cart_status' => 0];
        }

        if($orders->orders_type == 'payment')
        {
            _message(300, $this->return->orders_payment);
        }

        $return = $this->db->create('cart', $cart);

        $this->db->whereupdate('orders', 'orders_price=?', 'orders_id=?', [
            $this->db->t1wheresum('cart', 'cart_price_total', 'cart_status=? && orders_id=?', [
                1, $orders->orders_id])->sum, $orders->orders_id
        ]);

        if($return['status'] == TRUE)
        {
            _message(200, $this->return->cart_added, 
                $this->db->t2where('cart', 'orders', 'orders.user_id=? ORDER by cart.cart_id DESC', [
                    get_user_id()
                ])
            ); 
        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function _delete($cart_id)
    {
        $cart = $this->db->t1where('cart', 'cart_id=? && user_id=?', [
            $cart_id, get_user_id()
        ]);

        if(!$cart)
        {
            message(404, $this->return->product_not_found);
            http_referer(1);
        }

        $return = $this->db->wheredelete('cart', 'cart_id=? && user_id=?', [
            $cart->cart_id, get_user_id()
        ]);

        $orders = $this->db->t1where('orders', 'user_id=?', [
            get_user_id()
        ]);

        $this->db->whereupdate('orders', 'orders_price=?', 'orders_id=?', [
            $orders->orders_price - $cart->cart_price_total, $orders->orders_id
        ]);

        if($return['status'] == TRUE)
        {
            _message(200, $this->return->cart_deleted, 
                $this->db->t1where('orders', 'user_id=?', [get_user_id()])
            );
        }else
        {
            _message(404, $this->return->error);
        }
    }  

    public function _drop()
    {
        $orders = $this->db->t1where('orders', 'user_id=?', [
            get_user_id()
        ]);

        if(!$orders)
        {
            _message(404, $this->return->order_not_found);
        }

        $return = $this->db->wheredelete('cart', 'orders_id=?', [
            $orders->orders_id
        ]);

        if($return['status'] == TRUE)
        {
            $this->db->wheredelete('orders', 'orders_id=?', [
                $orders->orders_id
            ]);            

            _message(200, $this->return->cart_drop);
        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function _confirm()
    {
        $orders = $this->db->t1where('orders', 'user_id=?', [
            get_user_id()
        ]);

        if(!$orders)
        {
            _message(404, $this->return->error);
        }

        $cart = $this->db->t1where('cart', 'orders_id=?', [
            $orders->orders_id
        ], 2, 1);

        if(!$cart)
        {
            _message(404, $this->return->error);
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
                $status = $this->db->whereupdate('orders', 'orders_price=?', 'orders_id=?', [
                    $this->db->t1wheresum('cart', 'cart_price_total', 'cart_status=1 && orders_id=?', [
                        $orders->orders_id])->sum, $orders->orders_id
                ]);
                    
                if($status['status'] == TRUE)
                {
                    _message(300, $this->return->cart_stock_update, false, false, 10);
                }
            }
        }

        $return = $this->db->whereupdate('orders', 'orders_status=1, orders_type=?', 'orders_id=?', [
            'delivery', $orders->orders_id
        ]);

        if($return['status'] == TRUE)
        {
            $this->db->create('notice', [
                'user_id' => 1913,
                'notice_message' => 'from '.get_user_login(),
                'notice_body' => 'new order product'
            ]);

            $this->db->whereupdate('cart', 'orders_status=1', 'orders_id=?', [
                $orders->orders_id
            ]);

            _message(200, $this->return->success);
        }
        else
        {
            _message(404, $this->return->error);
        }
    }

    public function _update($cart_id)
    {
        $cart = $this->db->t1where('cart', 'cart_id=?', [
            $cart_id
        ]);

        if(!$cart)
        {
            _message(404, $this->return->error);
        }

        return $cart;
    }

    public function __update()
    {
        $POST = xss(peel($_POST));

        $cart = $this->db->t1where('cart', 'cart_id=? && user_id=?', [
            $POST['cart_id'], get_user_id()
        ]);

        if(!$cart)
        {
            _message(404, $this->return->error);
        }

        $cart->cart_product_piece = $POST['cart_product_piece'];

        $product = $this->db->t1where('product', 'product_id=?', [
            $cart->product_id
        ]);

        if(!$product)
        {
            _message(404, $this->return->product_not_found);
        }

        if($cart->cart_product_piece > $product->product_stock)
        {
            _message(300, $this->return->cart_stock_few);
        }

        $return = $this->db->whereupdate('cart', 'cart_product_piece=?, cart_price_total=?', 'cart_id=?', [
            $cart->cart_product_piece, $cart->cart_product_piece * $cart->cart_product_price, $cart->cart_id
        ]);

        if($return['status'] == TRUE)
        {
            $orders = $this->db->t1where('orders', 'user_id=?', [
                get_user_id()
            ]);

            $this->db->whereupdate('orders', 'orders_price=?', 'orders_id=?', [
                $this->db->t1sum('cart', 'cart_price_total')->sum, $orders->orders_id
            ]);

            _message(200, $this->return->cart_updated, 
                $this->db->t1where('orders', 'user_id=?', [get_user_id()]), 
                $this->db->t1where('cart', 'cart_id=?', [$cart->cart_id]), 
            );
        }
        else
        {
            _message(404, $this->return->error);
        }
    }

    public function userConfirm()
    {
        $orders = $this->db->t1where('orders', 'user_id=?', [
            get_user_id()
        ]);

        if(!$orders)
        {
            _message(404, $this->return->order_not_found);
        }
        else if($orders->orders_refusal == 1)
        {
            $return = $this->db->whereupdate('orders', 'user_confirm=1', 'orders_id=?',[
                $orders->orders_id
            ]);

            if($return['status'] == TRUE)
            {
                _message(200, $this->return->success);
            }
            else
            {
                _message(404, $this->return->error);
            }
        }
    }
}