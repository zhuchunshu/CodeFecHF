<?php

declare(strict_types=1);

namespace App\Middleware;

use App\CodeFec\Admin\Admin;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class AdminMiddleware implements MiddlewareInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        if(!Admin::Check()){
            if(request()->input("data")=="json"){
                return $this->container->get(\Hyperf\HttpServer\Contract\ResponseInterface::class)->json(Json_Api(401,false,["msg" => "无权访问"]));
            }
            if(request()->isMethod("POST")){
                return $this->container->get(\Hyperf\HttpServer\Contract\ResponseInterface::class)->json(Json_Api(401,false,["msg" => "无权访问"]));
            }
            return view("admin.error");
        }
        return $handler->handle($request);
    }
}