<?php 

namespace library;
use \library\cookies;

class language
{
    public $return;
    public $lang = ['ru', 'en', 'az'];

    public static function choiseLang()
    {
        return self::ifTheCookieExists($_COOKIE['lang'] ?? null);
    }

    public static function ifTheCookieExists($language)
    {
        if(in_array($language, ['ru', 'en', 'az']))
        {
            return require_once "../public/resources/lang/{$language}.php";
        }
        else
        {
            return require_once '../public/resources/lang/ru.php';
        }
    }

    public static function changeLanguage($language)
    {
        if(in_array($language, ['ru', 'en', 'az']))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
}