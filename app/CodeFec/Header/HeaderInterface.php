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
     * 新增页头钩子
     *
     * @param integer 唯一id $id
     * @param integer 类型(0:左,1:右,2:页头按钮) $type
     * @param string 视图名称 $view
     * @return boolean
     */
    public function add(int $id,int $type,string $view);
}