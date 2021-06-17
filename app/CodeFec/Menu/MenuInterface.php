<?php
namespace App\CodeFec\Menu;

interface MenuInterface{
    public function get();
    public function add(int $id,array $arr);
}