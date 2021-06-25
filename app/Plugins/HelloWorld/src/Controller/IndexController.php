<?php
namespace App\Plugins\HelloWorld\src\Controller;

use App\CodeFec\Admin\Ui;
use Hyperf\HttpServer\Annotation\AutoController;
use App\Middleware\AdminMiddleware;
use Hyperf\HttpServer\Annotation\Middleware;

/**
 * Class IndexController
 * @AutoController(prefix="/admin/plugins/HelloWorld")
 * @Middleware(AdminMiddleware::class)
 * @package App\Plugins\HelloWorld\src\Controller
 */
class IndexController {

    public function index(Ui $ui,Ui\Card $card): \Psr\Http\Message\ResponseInterface
    {
        return $ui->title("HelloWorld")
            ->body($card->titleType(1)->title("HelloWorld")->content("当你看到此消息,说明插件运行成功!")->render())
            ->render();
    }

}