<?php
// cканируем приватную папку с картинками
$imgScan = scandir('private/img');

$imgArray = [];

// перебираем папку с картинками и выводим

foreach($imgScan as $img){

    if($img == '.' || $img == '..'){

        continue;
    }
    else{
        
        $imgArray[] = '/private/img/'. $img;

    }
}

