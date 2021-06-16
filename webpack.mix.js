let mix = require('laravel-mix');

function public_path($path){
    if($path){
        return "./public/"+$path;
    }else{
        return "./public"
    }
}
function resources_path($path){
    if($path){
        return "./resources/"+$path;
    }else{
        return "./resources"
    }
}

mix.js(resources_path("js/app.js"),public_path("js")).version();
mix.js(resources_path("js/vue.js"),public_path("js")).version();

// 设置public目录
mix.setPublicPath(public_path());

mix.setResourceRoot(resources_path());
