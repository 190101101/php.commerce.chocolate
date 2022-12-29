<?php 

namespace middleware;

class login
{
	public static function handle($next)
	{
		if(!get_user())
		{
            redirect();
            exit;
		} 
		return $next;
	}
}

