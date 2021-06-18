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

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Hyperf\View\RenderInterface;
use App\CodeFec\Menu\MenuInterface;

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

if (!function_exists("arr_has")) {
    function arr_has($array, $keys)
    {
        return Arr::has($array, $keys);
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
        $result = str_replace("/", "-", $path);
        $result = Str::before($result, '.');
        if ($result == "-") {
            return "main";
        }
        return $result;
    }
}

if (!function_exists("menu")) {
    function menu()
    {
        $container = \Hyperf\Utils\ApplicationContext::getContainer();
        return $container->get(MenuInterface::class);
    }
}

if(!function_exists("view")){
    function view(string $view,array $data=[]){
        $container = \Hyperf\Utils\ApplicationContext::getContainer();
        return $container->get(RenderInterface::class)->render($view,$data);
    }
}

if (!function_exists("menu_pd")) {
    function menu_pd($id)
    {
        $i = 0;
        foreach (menu()->get() as $key => $value) {
            if (arr_has($value, "parent_id")) {
                if ($value['parent_id'] == $id) {
                    $i++;
                }
            }
        }
        return $i;
    }
}

if (!function_exists("menu_pdArr")) {
    function menu_pdArr($id)
    {
        $arr = [];
        foreach (menu()->get() as $key => $value) {
            if (arr_has($value, "parent_id")) {
                if ($value['parent_id'] == $id) {
                    $arr[]=$value;
                }
            }
        }
        return $arr;
    }
}

if(!function_exists("Json_Api")){
    function Json_Api(int $code=200,bool $success=true,array $result=[]){
        return [
            "code" => $code,
            "success" => $success,
            "result" => $result
        ];
    }
}