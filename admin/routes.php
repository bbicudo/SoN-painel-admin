<?php

if($path == '/admin'){
    echo 'Administração';
    //require __DIR__ . '/site/admin.php';
}else{
    echo 'Página não encontrada!';
}