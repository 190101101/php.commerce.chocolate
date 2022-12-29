<?php 

namespace moduls\admin\user\model;
use core\model;
use \Valitron\Validator as v;

class userModel extends model
{
    public function user()
    {
        return get_user_level() > 3 
        ? $this->db->t1desc('user', 2)
        : $this->db->t1where('user', 'user_level < 3 ORDER by user_id DESC', [], 2);
    }

    public function __userCreate()
    {
        $data = [];
        $data = peel($_POST);

        v::lang($_COOKIE['lang'] ?? 'ru');

        $v = new v($data);

        $v->rule('required', [
            'user_email',
            'user_login',
            'user_level',
            'user_phone',
            'user_address',
            'user_password',
            'confirm_password',
        ]);

        $v->rule('lengthMin', 'user_login', 3);
        $v->rule('lengthMax', 'user_login', 20);

        $v->rule('min', 'user_phone', 994502000000);
        $v->rule('max', 'user_phone', 994999999999);
        $v->rule('lengthMax', 'user_phone', 12);
        $v->rule('lengthMin', 'user_phone', 12);
        
        $v->rule('lengthMin', 'user_password', 3);
        $v->rule('lengthMax', 'user_password', 20);
        $v->rule('emailDNS', 'user_email');

        $v->rules([
            'equals' => [
                ['user_password', 'confirm_password']
            ]
        ]);

        valitronErrors($v);

        unset($data['confirm_password']);

        $user = $this->db->t1where("user", 'user_email=? or user_login=? or user_phone=?', [
            $data['user_email'], $data['user_login'], $data['user_phone']
        ]); 

        if($user)
        {
            _message(300, $this->return->user_already);
        }

        $return = $this->db->create('user', $data);

        if($return['status'] == TRUE)
        {
            _message(200, 'user '.$this->return->created, 
                $this->db->t1desc('user')
            );

        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function userUpdate($id)
    {
        return $this->db->t1where('user', 'user_id=?', [$id]);
    }

    public function __userUpdate()
    {
        $data = [];
        $data = peel($_POST);

        v::lang($_COOKIE['lang'] ?? 'ru');

        $v = new v($data);

        $v->rule('required', [
            'user_email',
            'user_login',
            'user_level',
            'user_phone',
            'user_address',
            'user_password',
            'confirm_password',
            'user_id',
        ]);

        $v->rule('min', 'user_phone', 994502000000);
        $v->rule('max', 'user_phone', 994999999999);
        $v->rule('lengthMax', 'user_phone', 12);
        $v->rule('lengthMin', 'user_phone', 12);

        $v->rule('lengthMin', 'user_login', 3);
        $v->rule('lengthMax', 'user_login', 20);

        $v->rule('emailDNS', 'user_email');

        $v->rule('lengthMin', 'user_password', 3);
        $v->rule('lengthMax', 'user_password', 20);

        $v->rules([
            'equals' => [
                ['user_password', 'confirm_password']
            ]
        ]);

        valitronErrors($v);

        unset($data['confirm_password']);

        $user = $this->db->t1where("user", 'user_email=? or user_login=? or user_phone=?', [
            $data['user_email'], $data['user_login'], $data['user_phone']
        ]);

        if($user)
        {
            if($user->user_id != $data['user_id'])
            {
                _message(300, $this->return->user_already);
            }
        }

        $data += ['user_updated_at' => date('Y-m-d H:i:s')];

        $return = $this->db->update('user', $data, [
            'id' => 'user_id',
        ]);

        if($return['status'] == TRUE)
        {
            _message(200, 'user '.$this->return->updated,
                $this->db->t1where('user', 'user_id=?', [$data['user_id']])
            );
        }else
        {
            _message(404, $this->return->error);
        }
    }

    public function __status($id)
    {
        $return = $this->db->whereupdate('user', 'user_status=?', 'user_id=?', [
            $this->db->t1where('user', 'user_id=?', [$id])->user_status == 0 ? 1 : 0, $id
        ]);

        return $return['status'] == 1 
            ? _message(200, $this->return->status_success) 
            : _message(404, $this->return->status_error);
    }

    public function _delete($user_id)
    {
        $return = $this->db->wheredelete('user', 'user_id=?', [$user_id]);

        if($return['status'] == TRUE)
        {
            $this->db->wheredelete('orders', 'user_id=?', [
                $user_id
            ]);

            $this->db->wheredelete('cart', 'user_id=?', [
                $user_id
            ]);

            _message(200, 'user '.$this->return->deleted);
        }else
        {
            _message(404, $this->return->error);
        }
    }
}
