<?php 

namespace moduls\admin\buy\model;
use core\model;
use \Valitron\Validator as v;

class buyModel extends model
{
    public function buy()
    {
        return $this->db->t2desc('buy', 'user', 2);
    }

    public function buyRead($buy_id)
    {
        return $this->db->t1where('buy', 'buy_id=?', [$buy_id]);
    }

    public function shop($buy_id)
    {
        return $this->db->t2where('shop', 'buy', 'buy.buy_id=?', [$buy_id], 2);
    }

    public function _buyConfirm($buy_id)
    {
        $data = [];

        $buy = $this->db->t1where('buy', 'buy_id=?', [
            $buy_id
        ]);

        if(!$buy)
        {
            _message(404, $this->return->order_not_found);
        }

        $cart = $this->db->t1where('cart', 'cart.user_id=?', [
            $buy->user_id
        ], 2, 1);

        if(!$cart)
        {
            _message(404, $this->return->cart_order_not_found);
        }

        $store = [
            'user_id' => $buy->user_id,
            'store_price' => $buy->buy_price,
        ];

        $status = $this->db->create('store', $store);

        if($status['status'] == FALSE)
        {
            _message(404, $this->return->error);
        }

        $store_id = $this->db->t1desc('store')->store_id;

        foreach($cart as $key => $value)
        {
            $data[] = [
                'store_id' => $store_id,
                'product_id' => $value['product_id'],
                'user_id' => $value['user_id'],
                'confirm_product_name' => $value['cart_product_name'],
                'confirm_product_image' => $value['cart_product_image'],
                'confirm_product_price' => $value['cart_product_price'],
                'confirm_product_piece' => $value['cart_product_piece'],
                'confirm_product_portion' => $value['cart_product_portion'],
            ];
        }

        for($i = 0; $i < count($data); $i++)
        {
            $return = $this->db->create('confirm', $data[$i]);
        }

        if($return['status'] == TRUE)
        {
            /*
            $this->db->wheredelete('cart', 'user_id=?', [
                $buy->user_id
            ]);

            $this->db->wheredelete('buy', 'buy_id=?', [
                $buy->buy_id
            ]);
            */
            _message(200, 'buy '.$this->return->confirmed);
        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function _buyRefuse($buy_id)
    {
        $buy = $this->db->t1where('buy', 'buy_id=?', [
            $buy_id
        ]);

        if($buy)
        {
            $this->db->wheredelete('cart', 'user_id=?', [
                $buy->user_id
            ]);

            $this->db->wheredelete('buy', 'buy_id=?', [
                $buy->buy_id
            ]);
            _message(200, 'buy '.$this->return->refused);
        }
        else
        {
            _message(404, $this->return->order_not_found);
        }
    }

    public function __status($id)
    {
        $return = $this->db->whereupdate('buy', 'buy_status=?', 'buy_id=?', [
            $this->db->t1where('buy', 'buy_id=?', [$id])->buy_status == 0 ? 1 : 0, $id
        ]);

        return $return['status'] == 1 
            ? _message(200, $this->return->status_success) 
            : _message(404, $this->return->status_error);
    }

    public function _delete($id)
    {
        $buy = $this->db->t1where('buy', 'buy_id=?', [$id]);

        if(!$buy)
        {
            _message(404, $this->return->error);
        }

        $return = $this->db->wheredelete('buy', 'buy_id=?', [
            $buy->buy_id
        ]);

        if($return['status'] == TRUE)
        {
            $this->db->wheredelete('cart', 'user_id=?', [$buy->user_id]);
            _message(200, 'buy '.$this->return->deleted);
        }else
        {
            _message(404, $this->return->error);
        }
    }
}
