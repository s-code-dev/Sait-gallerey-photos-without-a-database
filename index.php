<!-- получаем картинки -->
<?php include __DIR__ . '/models/outPutimg.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;1,400;1,500&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <title>Главная</title>
</head>
<body>
<div class="app">
<header>
<h1>Галерея фотографий </h1>
<!-- подключаем меню сайта -->
<?php include __DIR__ . '/templates/menu.php';?>

</header>
<main class="img-div">

<!-- перебираем массив с названием картинок и выводим -->
    <?php foreach($imgArray as $img): ?>

            <img src="<?= $img ?>" alt="">

    <?php endforeach;?>
</main> 
<div class="cls"></div>
</div>
<!-- подключаем footer -->
<?php include __DIR__ . '/templates/footer.php' ?>
</body>
</html>