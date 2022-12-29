<?php 

namespace moduls\main\lists\model;
use core\model;

class listsModel extends model
{
	public function product()
    {
        return $this->db->t2('product', 'category', 2);
    }
}
