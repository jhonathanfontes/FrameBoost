<?php
use Helper\UrlHelper;

if (!function_exists('base_url')) {
    function base_url(?string $path = null): string
    {
        // Usar a variável de ambiente APP_URL
        $base = env('APP_URL', 'http://localhost');
        
        if ($path) {
            return $base . '/' . trim($path, '/');
        }
        
        return $base;
    }
}

if (!function_exists('app_name')) {
    function app_name(): string
    {
        return env('APP_NAME', 'FramePhp');
    }
}

if (!function_exists('app_version')) {
    function app_version(): string
    {
        return env('APP_VERSION', '1.0.0');
    }
}

if (!function_exists('app_debug')) {
    function app_debug(): bool
    {
        return env('APP_DEBUG', false);
    }
}
