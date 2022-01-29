<?php

//Loading Classes Dynamically
function autoLoader($class){
    $path = 'classes/'.$class.'.php';

    if (file_exists($path)){
        require_once $path;
    }elseif (file_exists("../".$path)){
        require_once "../".$path;
    }elseif (file_exists("admin/".$path)){
        require_once "admin/".$path;
    }
    else{
        die('your path is wrong');
    }
}

spl_autoload_register('autoLoader');