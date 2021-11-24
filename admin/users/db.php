<?php

$users_all = function () use ($conn){
    $result = $conn->query('SELECT * FROM users');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$users_one = function () use ($conn){
    
};

$users_create = function () use ($conn){

};

$users_update = function () use ($conn){

};

$users_delete = function () use ($conn){

};