<?php

function find_user_login_password(string $login,string $password):array{
    $user = json_to_array("users");
    foreach($users as $user){
        if($user['login']==$login && $user['password']==$password){
            return $user;
        }
        return [];
    }
}

