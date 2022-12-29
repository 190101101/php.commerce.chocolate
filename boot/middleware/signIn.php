<?php 

namespace middleware;

class signIn
{
    public static function handle($next)
    {
        if(!get_user())
        {
            _message(404, 'need signIn');
        }
        return $next;
    }
}

