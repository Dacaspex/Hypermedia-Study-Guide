<?php

class Language
{
    const EN = 'en';
    const NL = 'nl';

    public static function getLocale()
    {
        if (!isset($_COOKIE['locale'])) {
            self::setLocale(Language::EN);
            return Language::EN;
        }

        return $_COOKIE['locale'];
    }

    public static function setLocale($locale)
    {
        setcookie('locale', $locale, self::getExpiry(), null, null, true, true);
    }

    private static function getExpiry()
    {
        return time() + 365 * 24 * 60 * 60;
    }
}