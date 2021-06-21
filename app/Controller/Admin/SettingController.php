<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\CodeFec\Admin\Ui;
use App\CodeFec\Admin\Ui\Card;
use Hyperf\HttpServer\Annotation\Middleware;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\HttpServer\Annotation\Controller;

/**
 * Class SettingController
 * @Controller()
 * @Middleware(\App\Middleware\AdminMiddleware::class)
 * @package App\Controller\Admin
 */
class SettingController
{
    /**
     * 个人设置
     * @RequestMapping(path="im", methods="get")
     */
    public function im(Ui $ui , Card $card): \Psr\Http\Message\ResponseInterface
    {
        return $ui
            ->title("个人设置")
            ->ImportJs([mix("js/admin/setting.js")])
            ->body($card->title("个人设置")
            ->content(view("admin.setting.im"))
            ->render())
            ->render();
    }
}
