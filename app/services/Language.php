<?php

class Language
{
    const EN = 'en';
    const NL = 'nl';

    public static function getLocale()
    {
        return $_COOKIE['locale'];
    }

    public static function setLocale($locale)
    {
        $expiry = time() + 365 * 24 * 60 * 60;
        setcookie('locale', $locale, $expiry);
    }
}