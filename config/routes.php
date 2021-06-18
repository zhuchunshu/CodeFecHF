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

use App\Controller\AdminController;
use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

Router::get('/test', function () {
    return \App\CodeFec\Header\functions::header()->get();
});

Router::addGroup("/admin/",function(){
    Router::get("login",[AdminController::class,"login"]);
    Router::post("login",[AdminController::class,"loginPost"]);
});

