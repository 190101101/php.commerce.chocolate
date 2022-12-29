<?php 

session_start();
ob_start();

/*vendor*/
require_once 'vendor/autoload.php';

/*config*/
require_once 'config/global/global.php';
require_once 'config/const/setting.php';
require_once 'config/const/const.php';
require_once 'config/const/db.php';

/*dev*/
require_once 'boot/dev/xcode.php';
require_once 'boot/dev/array_function.php';
require_once 'boot/dev/binded_function.php';
require_once 'boot/dev/callback_function.php';
require_once 'boot/dev/const_function.php';
require_once 'boot/dev/engine_function.php';
require_once 'boot/dev/http_function.php';
require_once 'boot/dev/seo_function.php';
require_once 'boot/dev/user_function.php';

/*router*/
require_once 'routes/main.php';
require_once 'routes/admin.php';
require_once 'routes/general.php';

