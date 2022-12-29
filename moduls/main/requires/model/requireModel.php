<?php 

namespace moduls\main\requires\model;
use core\model;

class requireModel extends model
{
	public function category()
	{
	    return $this->db->t1where('category', 'category_status=?', [1], 2);
	}

    public function setting()
    {
        $setting = [];
        foreach($this->db->t1('setting', 2, 1) as $key)
        {
            $setting[$key['setting_key']] = $key['setting_value'];
        }
        settype($setting, 'object');
        return $setting;
    }
}