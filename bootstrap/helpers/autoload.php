<?php

if(!defined('DS')){
    define(DS, DIRECTORY_SEPARATOR);
}

if(!function_exists('AutoLoadFiles')){

    function AutoLoadFiles($PATH)
    {
        $DIRS = glob($PATH .DS. "*");

        foreach($DIRS as $path){

            if($path == __FILE__){
                continue;
            }
            if(is_dir($path)){
                AutoLoadFiles($path);

            } else {
                require_once $path;
            }
        }

    }
}

AutoLoadFiles ( __DIR__ );
