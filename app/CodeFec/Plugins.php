<?php
namespace App\CodeFec;

class Plugins {

    public static function GetAll(){
        $arr = getPath(plugin_path());
        $plugin_arr = [];
        foreach ($arr as $value) {
            if(file_exists(plugin_path($value."/".$value.".php"))){
                $plugin_arr[$value]['path']=plugin_path($value."/");
                $plugin_arr[$value]['file']=plugin_path($value."/".$value.".php");
            }
        }
        return $plugin_arr;
    }

}