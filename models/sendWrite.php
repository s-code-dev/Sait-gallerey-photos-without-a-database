<?php

// проверяем оправку данных с формы обратной связи

if(isset($_POST) && $_POST['text'] !== ''){
    //берем дату
    $date = date(DATE_ATOM);
    // Берем текст с формы обратной связи
    $letter = $_POST['text'];
    // обращаемся к папки с письмамы
    $pathLetters = __DIR__.'/../private/letters.php';
    //кладем в папку с письмами переданный текс
    $result = file_put_contents($pathLetters, $date.PHP_EOL.$letter.PHP_EOL.PHP_EOL, FILE_APPEND) != false;
    //если письмо не отправленно выводим текст
    if(false === $result){
        echo 'письмо не отправленно, повторите попытку';
    }

}
?>