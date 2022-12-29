<?php
namespace library;
use \library\cookies;

class guest 
{
    public static function read()
    {
        $guest = json_decode(cookies::r('guest'));

        if(isset($guest))
        {
            if($guest->guest_status == 0)
            {
                header('location: https://www.google.com');
            }
        }
        else
        {
            $guest = db()->t1where('guest', 'guest_ip=?', [
                $_SERVER['REMOTE_ADDR']
            ]);

            if($guest)
            {
                if($guest->guest_status == 0)
                {
                    header('location: https://www.google.com');
                    exit;
                }
                else
                {
                    cookies::c('guest', json_encode(
                        db()->t1desc('guest')
                    ));     
                }
            }
            else
            {
                $create = db()->create('guest', [
                    'guest_ip' => $_SERVER['REMOTE_ADDR'],
                ]);

                $create['status'] == FALSE ?:
                cookies::c('guest', json_encode(
                    db()->t1desc('guest')
                ));        
            }
        }
    }
}
