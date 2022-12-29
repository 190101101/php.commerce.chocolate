<?php 

namespace library;
use \library\session;

class robot
{
    public static function robotPostCheck($return, $count = 5, $time = 10)
    {
        if(!isset($_SESSION['robot_time']))
        {
            session::c('robot_time', (time() - $time));
        }

        if(session::r('robot_time') < time())
        {
            session::c('robot_time', (time() + $time));
            session::c('robot_count', 0);
            session::c('robot_stop', 0);
        }
        
        else if(session::r('robot_time') > time())
        {            
            if(session::r('robot_stop') == 0)
            {
                session::c('robot_count', session::r('robot_count') + 1);
            }            

            if(session::r('robot_count') >= $count)
            {
                session::c('robot_count', 0);
                session::c('robot_stop', 1);

                if(session::r('robot_stop') == 1)
                {
                    _message(300, $return);
                }
            }

            if(session::r('robot_count') == 0)
            {
                session::c('robot_time', session::r('robot_time') + $time);
                _message(100);
            }
        }
    }

    public static function requestTimeCheck($time = 60)
    {
        if(session::r('request_time') < (time() - $time))
        {
            return TRUE;
        }
    }

    public static function sessionRequestCounterIncrement()
    {
        switch ($_SERVER['REQUEST_METHOD'])
        {
            case 'GET':
                session::c('get', session::r('get') + 1);
                break;
            case 'POST':
                session::c('post', session::r('post') + 1);
                break;
        }
    }

    public static function requestCounterWithTime($time, $get, $post)
    {
        if(self::requestTimeCheck($time))
        {
            if(session::r('get') > $get || session::r('post') > $post)
            {

                if(get_user_type() == 'admin' || get_user_type() == 'moderator')
                {
                    session::c('request_time', time());
                    session::c('get', 0);
                    session::c('post', 0);
                    $_SESSION['message'] = [
                        'code'    => 404, 
                        'message' => 'не смотря что вы администратор - не надо спамить',
                    ]; 
                }
                else
                {
                    $guest = json_decode(cookies::r('guest'));

                    $stmt = db()->t1where('guest', 'guest_ip=?',[
                        $guest->guest_ip
                    ]);

                    $return = db()->whereupdate('guest', 'guest_status=0', 'guest_ip=?',[
                        $guest->guest_ip
                    ]);    

                    if($return['status'] == TRUE)
                    {
                        cookies::d('guest');
                        header('location: https://www.google.com');
                    }
                }
            }
            else
            {
                session::c('request_time', time());
                session::c('get', 0);
                session::c('post', 0);
            }
        }
    }
}
