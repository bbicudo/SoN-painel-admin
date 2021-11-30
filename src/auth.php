<?php

    function get_user(){
        return $_SESSION['auth'] ?? null;
    }

    function auth_protection(){
        $user = get_user();

        if(empty($user) && !resolve('/admin/auth.*')){
            header('location: /admin/auth/login');
            die();
        }
    }

    function logout(){
        unset($_SESSION['auth']);
        flash('Desconectando!', 'success');
        header('location: /admin/auth/login');
        echo "OIE";
        die();
    }