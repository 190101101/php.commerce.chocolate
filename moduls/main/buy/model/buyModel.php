<?php 

namespace moduls\main\buy\model;
use core\model;
use \Valitron\Validator as v;

class buyModel extends model
{
    public function buy()
    {
        return $this->db->t1where('buy', 'user_id=?', [get_user_id()], 2);
    }

    public function buyRead($buy_id)
    {
        return $this->db->t1where('buy', 'buy_id=?', [$buy_id]);
    }

    public function shop($buy_id)
    {
        return $this->db->t2where('shop', 'buy', 'buy.buy_id=?', [$buy_id], 2);
    }
}
