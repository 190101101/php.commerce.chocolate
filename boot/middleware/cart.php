<?php 

namespace middleware;

class cart
{
	public static function handle($next)
	{
        if(!get_user())
        {
            _message(300, 'чтобы добавить продукт в корзину нужно войти в аккунт');
        }
		return $next;
	}
}

