<?php

namespace App\CodeFec\Ui;

class functions
{
    public static function header()
    {
        $container = \Hyperf\Utils\ApplicationContext::getContainer();
        return $container->get(HeaderInterface::class);
    }

    public static function get($type)
    {
        $arr = [];
        foreach (\App\CodeFec\Header\functions::header()->get() as $value) {
            if($value['type']==$type){
                $arr[]=$value;
            }
        }
        return $arr;
    }
}
