<?php 

namespace moduls\main\category\model;
use core\model;

class categoryModel extends model
{
	public function counter()
    {
        return $this->db->t1count('category')->count;
    }

    public function category($start, $limit)
    {
        return $this->db->t1where('category', 
            "category.category_status=1 LIMIT {$start}, {$limit}", [], 2, 2);
    }
}
