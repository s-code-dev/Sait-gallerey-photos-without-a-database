<?php

/**
 * функция проверяет имя и пароль админа
 * @param string $name имя админа
 * @param int $password пароль админа
 * @return bool
 */
 function checkUsersData($name, $password): bool{

    $adminIs = require __DIR__.'/../private/adminPassword/adminDB.php'; 


 foreach($adminIs as $admin){
    if($name === $admin['admin'] && $password === $admin['password']){

        return true;
    }
    else{
        return false;
    }

 }
}

/**
 * функция проверяет есть ли админ в COOKIE
 */


 function checkdateCoociesUser(){

    $name = $_COOKIE['name'] ?? '';
    $password = $_COOKIE['password'] ?? '';


    /**
     * идет проверка пароля и логина 
     */

    if(checkUsersData($name, $password)){

        return $name;
    }
    else{
        return null;
    }

 }

?>