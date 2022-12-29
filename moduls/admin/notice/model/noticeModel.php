<?php 

namespace moduls\admin\notice\model;
use core\model;
use \Valitron\Validator as v;

class noticeModel extends model
{
    public function notice()
    {
        return $this->db->t1desc('notice', 2);
    }

    public function __noticeCreate()
    {
        $data = [];
        $data = peel($_POST);

        v::lang($_COOKIE['lang'] ?? 'ru');

        $v = new v($data);

        $v->rule('required', [
            'notice_message',
            'notice_body',
            'notice_type',
        ]);

        valitronErrors($v);

        if(isset($data['user_id']))
        {
            $user = $this->db->t1where('user', 'user_id=?', [$data['user_id']]);

            if($user == FALSE)
            {
                _message(300, $this->return->user_not_found);
            }
        }

        $return = $this->db->create('notice', $data);

        if($return['status'] == TRUE)
        {
            _message(200, 'notice '.$this->return->created, 
                $this->db->t1desc('notice')
            );

        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function __status($id)
    {
        $return = $this->db->whereupdate('notice', 'notice_status=?', 'notice_id=?', [
            $this->db->t1where('notice', 'notice_id=?', [$id])->notice_status == 0 ? 1 : 0, $id
        ]);

        return $return['status'] == 1 
            ? _message(200, $this->return->status_success) 
            : _message(404, $this->return->status_error);
    }

    public function _delete($id)
    {
        $return = $this->db->wheredelete('notice', 'notice_id=?', [$id]);

        if($return['status'] == TRUE)
        {
            _message(200, 'notice '.$this->return->deleted);
        }else
        {
            _message(404, $this->return->error);
        }
    }
}
