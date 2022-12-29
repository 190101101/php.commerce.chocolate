<?php 

namespace moduls\main\profile\model;
use core\model;
use \library\cookies;
use \Valitron\Validator as v;
use \library\robot;

class profileModel extends model
{
    public function __profileInfoUpdate()
    {
        $POST = xss(peel($_POST));
        robot::robotPostCheck($this->return->spam);
        
        $keys_update    = $POST;
        $keys_update   += ['user_ip' => get_user_ip()];
        $keys_update   += ['user_updated_at' => date('Y-m-d H:i:s')];

        $user = $this->db->t1where("user", 'user_phone=?', [
            $keys_update['user_phone']
        ]); 

        if($user)
        {
            if(get_user_phone() != $keys_update['user_phone'])
            {
                _message(300, $this->return->user_already);
            }
        }

        v::lang($_COOKIE['lang'] ?? 'ru');

        $v = new v($keys_update);

        $v->rule('required', [
            'user_phone',
            'user_address',
            'user_ip',
            'user_updated_at',
        ]);

        $v->rule('min', 'user_phone', 994502000000);
        $v->rule('max', 'user_phone', 994999999999);

        valitronErrors($v);

        $values_update  = $keys_update;
        $values_update += ['user_id' => get_user_id()];

        $return = $this->db->whereupdate('user', $this->db->keys($keys_update), 
            'user_id=?', $values_update);

        if($return['status'] == TRUE)
        {
            $user = $this->db->t1where('user', 'user_id=?', [get_user_id()]);
            cookies::c('user', json_encode($user));
            create_user_session($user);
            _message(200, $this->return->success, $user);
        }
        else
        {
            _message(404, $this->return->error);
        }
    }

    public function __profilePasswordUpdate()
    {
        $POST = xss(peel($_POST));
        $POST += ['user_ip' => get_user_ip()];
        $POST += ['user_updated_at' => date('Y-m-d H:i:s')];

        v::lang($_COOKIE['lang'] ?? 'ru');

        $v = new v($POST);

        $v->rule('required', [
            'new_password',
            'confirm_password',
            'user_ip',
            'user_updated_at',
        ]);

        $v->rule('lengthMin', 'new_password', 3);
        $v->rule('lengthMax', 'new_password', 20);

        $v->rules([
            'equals' => [
                ['new_password', 'confirm_password']
            ]
        ]);

        valitronErrors($v);

        $keys_update    = [];
        $keys_update   += ['user_password' => $POST['new_password']];
        $keys_update   += ['user_updated_at' => $POST['user_updated_at']];

        $values_update  = $keys_update;
        $values_update += ['user_id' => get_user_id()];


        $return = $this->db->whereupdate('user', $this->db->keys($keys_update), 
            'user_id=?', $values_update);

        if($return['status'] == TRUE)
        {
            $user = $this->db->t1where('user', 'user_id=?', [get_user_id()]);
            cookies::c('user', json_encode($user));
            create_user_session($user);
            _message(200, $this->return->success, $user);
        }
        else
        {
            _message(404, $this->return->error);
        }
    }
}
