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

use App\CodeFec\Menu\Menu;
use Hyperf\Di\Annotation\Inject;
use Hyperf\View\RenderInterface;
use App\CodeFec\Menu\MenuInterface;
use App\Controller\AbstractController;

class IndexController extends AbstractController
{
    
    public function __construct()
    {
        menu()->add(214,[
            "a" => 1
        ]);
    }

    public function index(RenderInterface $render)
    {
        menu()->add(2,[
            "a" => 1
        ]);
        menu()->add(3,[
            "a" => 1
        ]);
        return menu()->get();
        //return $this->userService->getId(11);
    }
}
