<?php 

namespace moduls\general\general\model;
use core\model;
use \library\cookies;
use \library\language;

class generalModel extends model
{
    public function noticeUser()
    {
        $notice = $this->db->t1where('notice', 'user_id=? && notice_type=? && notice_status=1  ORDER by notice_id DESC', [
            get_user_id(), 'user'
        ]);

        if($notice)
        {
            $this->db->whereupdate('notice', 'notice_status=0', 
                'notice_status=1 && notice_type=? ORDER by notice_id DESC LIMIT 1', ['user']);
        }

        if($notice != false)
        {
            notification(200, $notice);
        }
        else
        {
            notification(404, $notice);
        }
    }       


    public function noticeAll()
    {
        $notice = $this->db->t1where('notice', 'notice_type=? && notice_status=1  ORDER by notice_id DESC', [
            'all'
        ]);

        if($notice)
        {
            $this->db->whereupdate('notice', 'notice_status=0', 'notice_status=1 && notice_type=? ORDER by notice_id DESC LIMIT 1',['all']);
        }

        if($notice != false)
        {
            notification(200, $notice);
        }
        else
        {
            notification(404, $notice);
        }
    }   

    public function lang($language)
    {
        $return = language::changeLanguage($language);

        if($return == TRUE)
        {
             cookies::c('lang', $language);
             _message(200, $this->return->success);
        }
        else
        {
             cookies::c('lang', 'ru');
             _message(404, $this->return->success);
        }
    }
}
