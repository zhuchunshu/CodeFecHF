<?php
namespace App\CodeFec\Menu;

use Illuminate\Support\Arr;

class Menu implements MenuInterface{

    public $list=[
        0 => [
            "url" => "/",
            "name" => "仪表盘",
            "icon" => ""
        ],
        1 => [
            "url" => "/",
            "name" => "仪表盘",
            "icon" => "",
            "parent_id" => 0
        ]
    ];

    public function get(){
        return $this->list;
    }

    public function add(int $id, array $arr){
        $this->list = Arr::add($this->list,$id,$arr);
        return true;
    }

}