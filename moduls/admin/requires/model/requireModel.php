<?php 

namespace moduls\admin\requires\model;
use core\model;

class requireModel extends model
{

	public function section()
    {
        return $this->db->t1('section', 2);
    }
    
    public function menu()
    {
        return $this->db->t2where('menu', 'section', 'menu.menu_status=?', [1], 2);
    }
    
}