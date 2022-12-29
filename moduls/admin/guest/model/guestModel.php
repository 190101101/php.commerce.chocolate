<?php 

namespace moduls\admin\guest\model;
use core\model;
use \Valitron\Validator as v;
use \Omnipay\Omnipay;

class guestModel extends model
{
    public function guest()
    {
        return $this->db->t1where('guest', 'guest_id > ? ORDER by guest_id DESC LIMIT 500', [0], 2);
    }

    public function __status($id)
    {
        $return = $this->db->whereupdate('guest', 'guest_status=?', 'guest_id=?', [
            $this->db->t1where('guest', 'guest_id=?', [$id])->guest_status == 0 ? 1 : 0, $id
        ]);

        return $return['status'] == 1 
            ? _message(200, $this->return->status_success) 
            : _message(404, $this->return->status_error);
    }

    public function _delete($id)
    {
        $return = $this->db->wheredelete('guest', 'guest_id=?', [$id]);

        if($return['status'] == TRUE)
        {
            _message(200, 'guest '.$this->return->deleted);
        }else
        {
            _message(404, $this->return->error);
        }
    }
}
