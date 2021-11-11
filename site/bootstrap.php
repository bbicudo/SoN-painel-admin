<?php

$path = $_SERVER['PATH_INFO'] ?? '/';

if($path == '/'){
    require __DIR__ . '/routes.php';
}else{
    echo 'Página não encontrada!';
}