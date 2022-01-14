<?php

if(!function_exists('test')){
    function test(){
       echo 'Helper Function';
    }
}

if(!function_exists('addMedia')){
    function addMedia($file,$loc){
        $img_name = $file->getClientOriginalName();
        $filename = date('his') . '-' . $img_name;
        $img_name = $file->storePubliclyAs($loc, $filename,'public');
        return $img_name;
    }
}