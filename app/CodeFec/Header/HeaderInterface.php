<?php
namespace App\CodeFec\Header;

interface HeaderInterface{
    /**
     * 获取页头菜单数组
     *
     * @return array
     */
    public function get();
    /**
     * 新增页头菜单
     *
     * @param integer 菜单id $id
     * @param array 菜单内容 $arr
     * @return boolean
     */
    public function add(int $id,array $arr);
}