<?php

if(resolve('/')){
    echo 'Home';
}elseif(resolve('/contato')){
    echo 'Contato';
}else{
    echo 'Página não encontrada!';
}
