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

use App\Request\Admin\LoginRequest;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;


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
        
    }
}
