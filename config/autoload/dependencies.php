<?php

declare(strict_types=1);

use App\CodeFec\Menu\Menu;
use App\CodeFec\Header\Header;
use App\CodeFec\Menu\MenuInterface;
use App\CodeFec\Header\HeaderInterface;

/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    MenuInterface::class => Menu::class,
    HeaderInterface::class => Header::class
];
