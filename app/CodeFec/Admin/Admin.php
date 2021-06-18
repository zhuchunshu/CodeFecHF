<?php
namespace App\CodeFec\Admin;

use App\Model\AdminUser;
use HyperfExt\Hashing\Hash;

class Admin {

    public static function SignIn(string $username,string $password){
        if(!AdminUser::query()->where("username",$username)->count()){
            return false;
        }
        // 数据库里的密码
        $user = AdminUser::query()->where("username",$username)->first();
        if(Hash::check($password, $user->password)){
            session()->set("admin",$user);
            return true;
        }else{
            return false;
        }
    }

    public static function data(){
        return session()->get("admin");
    }

    public static function Check(){
        return session()->has("admin");
    }

}