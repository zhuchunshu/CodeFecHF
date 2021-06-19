<?php
namespace App\CodeFec;

class CodeFec {

    public function handle(){
        $this->menu();
    }

    // 注册菜单
    public function menu(){

        require BASE_PATH."/app/CodeFec/Menu/list.php";

    }

}