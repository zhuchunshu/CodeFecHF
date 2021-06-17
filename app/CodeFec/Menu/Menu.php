<?php
namespace App\CodeFec\Menu;

use Illuminate\Support\Arr;

class Menu implements MenuInterface{

    public $list=[
        1 => [
            "id" => 1
        ]
    ];

    public function get(){
        return $this->list;
    }

    public function add(int $id, array $arr){
        $this->list = Arr::add($this->list,$id,$arr);
    }

}