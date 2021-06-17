<?php
namespace App\CodeFec\Header;

use Illuminate\Support\Arr;

class Header implements HeaderInterface {

    public $list =[
        // 0 =>[
        //     "type" => 0,
        //     "view" => "shared.header.left"
        // ],
        // 1 => [
        //     "type" => 1,
        //     "view" => "shared.header.right"
        // ]
    ];

    public function get(){
        return $this->list;
    }

    public function add(int $id, array $arr)
    {
        $this->list = Arr::add($this->list,$id,$arr);
        return true;
    }

}