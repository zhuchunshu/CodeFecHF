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

use App\Model\AdminUser;
use App\Request\Admin\LoginRequest;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use HyperfExt\Hashing\Hash;

class AdminController
{
    public function index(RequestInterface $request, ResponseInterface $response): \Psr\Http\Message\ResponseInterface
    {
        return $response->raw('Hello Hyperf!');
    }

    public function login(): \Psr\Http\Message\ResponseInterface
    {
        return view('admin.login');
    }

    public function loginPost(LoginRequest $request)
    {
        $username = $request->input("username");
        $password = $request->input("password");
        if(!AdminUser::query()->where("username",$username)->count()){
            return Json_Api(403,false,["用户不存在"]);
        }
        // 数据库里的密码
        $d_pwd = AdminUser::query()->where("username",$username)->first()->password;
        if(Hash::check($password, $d_pwd)){
            return Json_Api(200,true,["msg"=>"登陆成功!","url"=>"/admin"]);
        }else{
            return Json_Api(401,false,["密码错误"]);
        }
    }
}
