<?php

if(resolve('/')){
    render('site/home', 'site');
}else{
    http_response_code(404);
    echo 'Página não encontrada!';
}
