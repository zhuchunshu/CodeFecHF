<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
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

