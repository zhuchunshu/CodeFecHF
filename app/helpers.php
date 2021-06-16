<?php

declare(strict_types=1);
/**
 * CodeFec - Hyperf
 *
 * @link     https://github.com/zhuchunshu
 * @document https://codefec.com
 * @contact  laravel@88.com
 * @license  https://github.com/zhuchunshu/CodeFecHF/blob/master/LICENSE
 */

use App\CodeFec\Helpers;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Hyperf\HttpServer\Contract\RequestInterface;

function public_path($path = ''): string
{
    if ($path != '') {
        return config('server.settings.document_root') . '/' . $path;
    }
    return config('server.settings.document_root');
}

if (!function_exists('mix_manifest')) {
    function mix_manifest()
    {
        return file_get_contents(public_path('mix-manifest.json'));
    }
}

if (!function_exists('mix')) {
    function mix($path)
    {
        $list = mix_manifest();
        $result = json_decode($list, true);
        if (Arr::has($result, '/' . $path)) {
            return $result['/' . $path];
        }
        return null;
    }
}

if (!function_exists("request")) {
    function request()
    {
        return new Hyperf\HttpServer\Request();
    }
}

if (!function_exists("path_class")) {
    function path_class()
    {
        $path = request()->path();
        $result = str_replace("/","-",$path);
        $result = Str::before($result, '.');
        if($result=="-"){
            return "main";
        }
        return $result;
    }
}
