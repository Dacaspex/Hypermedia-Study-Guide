<?php

class Language
{
    const EN = 'en';
    const NL = 'nl';

    public static function getLocale()
    {
        if (!isset($_COOKIE['locale'])) {
            setcookie('locale', self::EN, self::getExpiry());
        }

        return $_COOKIE['locale'];
    }

    public static function setLocale($locale)
    {
        setcookie('locale', $locale, self::getExpiry());
    }

    private static function getExpiry()
    {
        return time() + 365 * 24 * 60 * 60;
    }
}