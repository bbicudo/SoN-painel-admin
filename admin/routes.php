<?php

if(resolve('/admin')){
    render('admin/home', 'admin');
}elseif(resolve('/admin/pages')){
    render('admin/pages', 'admin');
}elseif(resolve('/admin/pages/create')){
    render('admin/pages', 'admin');
}elseif(resolve('/admin/pages/(\d)+')){
    render('admin/pages', 'admin');
}elseif(resolve('/admin/pages/(\d)+/edit')){
    render('admin/pages', 'admin');
}elseif(resolve('/admin/pages/(\d)+/delete')){
    render('admin/pages', 'admin');
}else{
    http_response_code(404);
    echo 'Página não encontrada!';
}

