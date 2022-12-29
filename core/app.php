<?php 
namespace core;

class app
{
    protected $now_path;
    protected $now_method;
    protected static $routes = [];
    protected static $middleware;
    protected $home;
    protected $data = [];

    public function __construct($config)
    {
        $this->now_path = $_SERVER['REQUEST_URI'];
        $this->now_method = $_SERVER['REQUEST_METHOD'];
        $this->home = $config;
        $this->run();
    }

    public static function get($link, $path, $area='main', $middleware = [])
    {
        self::$routes[] = ['GET', $link, $path, $area, $middleware];
    }

    public static function post($link, $path, $area='main', $middleware = [])
    {
        self::$routes[] = ['POST', $link, $path, $area, $middleware];
    }

    public function run()
    {
        foreach (self::$routes as $routes)
        {
            list($method, $link, $path, $area, $middleware) = $routes;
            $method_check = $this->now_method == $method;
            $path_check = preg_match("@^{$link}$@", $this->now_path, $params);
            if($method_check && $path_check)
            {
                $uri = explode('/', $path);
                array_shift($uri);
                list($active_modul, $active_method) = $uri;

                if($this->now_path == '/')
                {
                    $module     = $this->home->modul;
                    $controller = $this->home->modul.'Controller';
                    $method     = $this->home->method;
                }
                else
                {
                    $module     = $active_modul;
                    $controller = $active_modul.'Controller';
                    $method     = $active_method;
                }

                if(file_exists($file = "../moduls/{$area}/{$module}/controller/{$controller}.php"))
                {
                    if(class_exists('moduls\\'.$area.'\\'.$module.'\controller\\'.$controller))
                    {
                        $call_class = "moduls\\".$area."\\{$module}\\controller\\{$controller}";
                        $class = new $call_class;

                        if(method_exists($class, $method))
                        {   
                            if(count($middleware) != 0)
                            {
                                $middlewares = require_once '../config/return/middleware.php';
                                foreach($middleware as $key => $value)
                                {
                                    \library\middleware::call($middlewares[$value], function($return){
                                        return $return;
                                    });
                                }
                            }
                            array_shift($params);
                            return call_user_func_array([$class, $method], array_values($params));
                        }
                        else
                        {
                            redirect('error/method', 1);
                        }
                    }
                    else
                    {
                        redirect('error/class', 1);
                    }
                }
                else
                {
                    redirect('error/controller', 1);
                }
            }
        }
        redirect('404');
    }
}

