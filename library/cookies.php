<?php
namespace library;

class cookies
{
    public static function c($key, $value, $expire = false, $path = '/', $domain = '', $secure = 0, $httponly = true)
    {
        if (!$expire) 
        {
            $expire = time() + (3600 * 365);
        }
        setcookie($key, $value, $expire, $path, $domain, $secure, $httponly);
        return true;
    }
 
    public static function r($cookie)
    {
        if(isset($_COOKIE[$cookie]))
        {
            return $_COOKIE[$cookie];
        }
    }

    public static function d($key, $value = '', $expire = 1, $path = '/', $domain = '', $secure = 0, $httponly = false) 
    {
        setcookie($key,$value,$expire,$path,$domain,$secure, $httponly);
        return true;
    }
}
