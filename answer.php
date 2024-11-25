<?php
// подключаем файл с работой post запросо при отправки письма 
include __DIR__ . '/models/sendWrite.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
     <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;1,400;1,500&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="app">

<header>
<h1>Форма обратной связи</h1>
<!-- подключаем меню сайта -->
<?php include __DIR__ . '/templates/menu.php';?>
</header>
<main class="img-div">
    <!-- форма обратной связи -->
    <form class="form-answer" action="" method="POST">

        <label for="x1">
            <textarea name="text" id="x1" cols="30" rows="10"></textarea>
        </label>
        <input class="input-answer" type="submit" value="Отправить">

    </form>
</main> 
<div class="cls"></div>
</div>
<!-- подключаем footer -->
<?php include __DIR__ . '/templates/footer.php' ?> 
</body>
</html>