<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

/**
 * @AutoController()
 * Class ApiController
 * @package App\Controller
 */
class ApiController
{
    public function avatar(RequestInterface $request)
    {
        $email = $request->input("email");
        return Json_Api(200,true,["avatar" => "https://dn-qiniu-avatar.qbox.me/avatar/".md5($email)]);
    }
}
