<?php

$pages_all = function(){
    //buscar todas as páginas
};

$pages_one = function($id){
    //buscar uma única página
};

$pages_create = function(){
    //cadastra uma página
    flash('Página criada com sucesso!', 'success');
};

$pages_edit = function($id){
    //edita uma página
    flash('Página atualizada com sucesso!', 'success');
};

$pages_delete = function($id){
    //deleta uma página
    flash('Página removida com sucesso!', 'success');
};