 <?php
 function checkdateCoociesUser(){

    $name = $_COOKIE['name'] ?? '';
    $password = $_COOKIE['password'] ?? '';

    include __DIR__ . '/avtorization.php';

    if(checkUsersData($name, $password)){

        return $name;
    }
    else{
        return null;
    }

 }