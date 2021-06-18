<?php

namespace App\CodeFec\Header;

class functions
{
    public static function header()
    {
        $container = \Hyperf\Utils\ApplicationContext::getContainer();
        return $container->get(HeaderInterface::class);
    }

    public static function left()
    {
        $arr = [];
        foreach (\App\CodeFec\Header\functions::header()->get() as $value) {
            if($value['type']==0){
                $arr[]=$value;
            }
        }
        return $arr;
    }

    public static function right()
    {
        $arr = [];
        foreach (\App\CodeFec\Header\functions::header()->get() as $value) {
            if($value['type']==1){
                $arr[]=$value;
            }
        }
        return $arr;
    }

    public static function headerBtn()
    {
        $arr = [];
        foreach (\App\CodeFec\Header\functions::header()->get() as $value) {
            if($value['type']==2){
                $arr[]=$value;
            }
        }
        return $arr;
    }
}
