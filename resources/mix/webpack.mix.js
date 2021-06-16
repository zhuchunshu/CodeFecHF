/**
 * @author Inkedus
 * @licence MIT
 * @link https://github.com/zhuchunshu/CoedFecHF
 * @type {Api | {Api: Api; VueConfig: VueConfig; readonly default: Api}}
 */
let mix = require('laravel-mix');

function public_path(path=""){
    return "../../public"+path;
}

mix.js('../js/app.js', public_path("/js")).version();

mix.setPublicPath(public_path());

mix.setResourceRoot("../");