<?php
namespace library;

class session
{
    public static function c($session, $key)
    {
        $_SESSION[$session] = $key;
    }

    public static function r($session, $key = FALSE)
    {
        if(self::h($session) == TRUE)
        {
            if($key == FALSE)
            {
                return $_SESSION[$session];
            }
            else
            {   
                return $_SESSION[$session][$key];
            }
        }
    }

    public static function u($session, $key, $value)
    {
        if(self::h($session) == TRUE)
        {
            return $_SESSION[$session][$key] = $value;
        }
    }

    public static function d($session)
    {
        if(self::h($session) == TRUE)
        {
            unset($_SESSION[$session]);
        }
    }

    public static function h($session)
    {
        return isset($_SESSION[$session]) ? TRUE : FALSE;
    }
}