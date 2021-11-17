<?php

function resolve($route){
   
    $path = $_SERVER['REQUEST_URI'] ?? '/';
    
    $route = '/^' . str_replace('/', '\/', $route) . '$/';
    
    if(preg_match($route, $path, $params)){
        return $params;
    }

    return false;
}