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
namespace App\Controller;

use App\Model\AdminPlugin;
use Hyperf\DbConnection\Db;
use Illuminate\Support\Arr;
use App\Middleware\AdminMiddleware;
use Hyperf\HttpServer\Annotation\Middleware;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\RequestInterface;

/**
 * @AutoController
 * Class ApiController
 */
class ApiController
{
    public function avatar(RequestInterface $request): array
    {
        $email = $request->input('email');
        return Json_Api(200, true, ['avatar' => 'https://dn-qiniu-avatar.qbox.me/avatar/' . md5($email)]);
    }

    /**
     * @Middleware(AdminMiddleware::class)
     */
    public function menu()
    {
        return Json_Api(200,true,menu()->get());
    }

    /**
     * @Middleware(AdminMiddleware::class)
     */
    public function AdminPluginList()
    {
        $array = AdminPlugin::query()->where("status",1)->get();
        $result = [];
        foreach ($array as $key => $value) {
            $result[]=$value->name;
        }
        return Json_Api(200,true,['data' => $result]);
    }

    public function AdminErrorRedirect(){
        $list = [
            "/admin" => "/admin/login",
            "/admin/login" => "/admin"
        ];
        if(request()->input("path",null)){
            $path = request()->input("path",null);
            if(Arr::has($list,$path)){
                return Json_Api(200,true,["data" => $list[$path]]);
            }else{
                return Json_Api(403,false,["data" => "#"]);
            }
        }else{
            return Json_Api(403,false,["data" => "#"]);
        }
    }
}
