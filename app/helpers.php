<?php

declare(strict_types=1);
/**
 * CodeFec - Hyperf
 * public 文件路径
 *
 * @link     https://github.com/zhuchunshu
 * @document https://codefec.com
 * @contact  laravel@88.com
 * @license  https://github.com/zhuchunshu/CodeFecHF/blob/master/LICENSE
 * @param string $path
 * @return string
 */
function public_path($path = ''): string
{
    if ($path != '') {
        return config('server.settings.document_root') . '/' . $path;
    }
    return config('server.settings.document_root');
}
