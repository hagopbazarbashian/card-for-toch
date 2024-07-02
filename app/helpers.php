<?php

use App\Models\translation;
use Illuminate\Support\Facades\Cache;

if (!function_exists('translate')) {
    function translate($key, $locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        $translation = translation::where('key', $key)->where('locale', $locale)->first();
        return $translation ? $translation->value : $key;
    }
}

if (!function_exists('testHelper')) {
    function testHelper()
    {
        return 'Helper is loaded';
    }
}