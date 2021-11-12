<?php

if(resolve('/')){
    render('site/home', 'site');
}elseif(resolve('/contato')){
    echo 'Contato';
}else{
    echo 'Página não encontrada!';
}
