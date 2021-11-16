<?php

if(resolve('/')){
    render('site/home', 'site');
}elseif(resolve('/contato')){
    echo 'Contato';
}else{
    http_response_code(404);
    echo 'Página não encontrada!';
}
