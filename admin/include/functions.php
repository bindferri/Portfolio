<?php

function redirect($location){
    header("Location: ".$location);
}

function trimContent($content){
    if ($content <= 200){
        return $content;
    }else{
        return substr($content,0,200) . '...';
    }
}