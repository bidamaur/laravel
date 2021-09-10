<?php
if(!function_exists('page_title')){
    function page_title(?string $title=null){
 return $title ? $title.' - '.config('app.name'):config('app.name');
    }
}
if(!function_exists('getIp')){
    function getIp(){
        return $_SERVER['REMOTE_ADDR'];
    }
}
if(!function_exists('houre')){
function houre(){
    return date('M/D/Y h:i:s');
}
}