<?php 

namespace middleware;

class admin
{
    public static function handle($next)
    {
        if(get_user_level() < 2)
        {
            redirect('404');
            exit;
        }
        return $next;
    }
}

