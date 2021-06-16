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

// app.js
mix.js(resources_path("js/app.js"),"js").version();

// vue.js
mix.js(resources_path("js/vue.js"),"js").version();



// app.css
mix.sass(resources_path("sass/app.scss"),"css").version();




// 设置public目录
mix.setPublicPath(public_path());

mix.setResourceRoot(resources_path());

