<?php
use App\Models\Translation;
use Illuminate\Support\Facades\Cache;

if (!function_exists('translate')) {
    function translate($key, $locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        $cacheKey = "translation_{$locale}_{$key}";

        return Cache::rememberForever($cacheKey, function () use ($key, $locale) {
            $translation = Translation::where('key', $key)->where('locale', $locale)->first();
            return $translation ? $translation->value : $key;
        });
    }
}