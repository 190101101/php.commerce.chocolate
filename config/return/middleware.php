<?php 

return [
	'login' => new \middleware\login,
    'notlogin' => new \middleware\notLogin,
    'admin' => new \middleware\admin,
    'cart' => new \middleware\cart,
    'signIn' => new \middleware\signIn,
    'user' => new \middleware\user,
    'robot' => new \middleware\robot,
];

