<?php
namespace App\CodeFec\Menu;

interface MenuInterface{
    /**
     * 获取菜单数组
     *
     * @return array
     */
    public function get();
    /**
     * 新增菜单
     *
     * @param integer 菜单id $id
     * @param array 菜单内容 $arr
     * @return boolean
     */
    public function add(int $id,array $arr);
}