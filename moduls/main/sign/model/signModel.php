<?php 

namespace moduls\main\sign\model;
use core\model;
use \library\cookies;
use \Valitron\Validator as v;

class signModel extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function __signin()
    {
    	$POST = xss(peel($_POST));
        $user_login    = $POST['user_login'];
        $user_password = $POST['user_password'];

        v::lang($_COOKIE['lang'] ?? 'ru');

        $v = new v($POST);

        $v->rule('required', [
            'user_login',
            'user_password',
        ]);

        valitronErrors($v);

        $user = $this->db->t1where("user", 'user_login=? && user_password=?', [
            $user_login, $user_password
        ]); 

        if($user)
        {
            $this->db->whereupdate('user', 'user_ip=?, user_updated_at=?', 'user_id=?', [
                remote_addr(), date('Y-m-d H:i:s'), $user->user_id
            ]);
        }else
        {
            _message(300, $this->return->user_not_found);
        }

        create_user_session($user);

        cookies::c('user', json_encode([
            'user_login' => $user->user_login,
            'user_password' => $user->user_password,
        ]));
        
        _message(200, $this->return->logined);
    }   

    public function _signout()
    {
        unset($_SESSION['USER']); 

        if(ulogin())
        {
            message(404, $this->return->error);
            http_referer(1);
        }
        else
        {
            message(200, $this->return->signout);
            redirect('', 1);
        }
    }   

    public function __signup()
    {
        $POST = xss(peel($_POST));

        v::lang($_COOKIE['lang'] ?? 'ru');

        $v = new v($POST);

        $v->rule('required', [
            'user_email',
            'user_login',
            'user_phone',
            'user_address',
            'user_password',
            'confirm_password',
        ]);

        $v->rule('ipv6', 'user_ip');
        $v->rule('lengthMin', 'user_login', 3);
        $v->rule('lengthMax', 'user_login', 20);

        $v->rule('min', 'user_phone', 994502000000);
        $v->rule('max', 'user_phone', 994999999999);
        
        $v->rule('lengthMin', 'user_password', 3);
        $v->rule('lengthMax', 'user_password', 20);
        $v->rule('emailDNS', 'user_email');

        $v->rules([
            'equals' => [
                ['user_password', 'confirm_password']
            ]
        ]);

        valitronErrors($v);

        $user = $this->db->t1where("user", 'user_email=? or user_login=? or user_phone=?', [
            $POST['user_email'], $POST['user_login'], $POST['user_phone']
        ]); 

        if($user)
        {
            _message(300, $this->return->user_already);
        }

        unset($POST['confirm_password']);
        $POST += ['user_ip' => remote_addr()];

        $return = $this->db->create('user', $POST);

        if($return['status'] == TRUE)
        {
            $user = $this->db->t1where("user", 'user_email=? &&user_login=? && user_password=?', [
                $POST['user_email'], $POST['user_login'], $POST['user_password']
            ]); 

            if($user)
            {
                $this->db->whereupdate('user', 'user_updated_at=?', 'user_id=?', [
                    date('Y-m-d H:i:s'), $user->user_id
                ]);

                create_user_session($user);

                cookies::c('user', json_encode([
                    'user_login' => $user->user_login,
                    'user_password' => $user->user_password,
                ]));
                
                _message(200, $this->return->sign_up_in, false, false, 3);
            }
        }
        else
        {
            _message(404, $this->return->error, false, false, 2);
        }
    }
}
