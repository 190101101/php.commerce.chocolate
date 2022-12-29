<?php 

namespace middleware;

class notlogin
{
    public static function handle($next)
    {
        if(get_user())
        {
            redirect();
            exit;
        } 
        return $next;
    }
}

