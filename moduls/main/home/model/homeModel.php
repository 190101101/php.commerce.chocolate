<?php 

namespace moduls\main\home\model;
use core\model;

class homeModel extends model
{
	public function slider()
	{
		return $this->db->t1('slider', 2);
	}    

    public function video()
    {
        return $this->db->t1where('video', 'video_type=?', ['main']);
    }    
}
