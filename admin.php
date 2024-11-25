<?php
// авторизация на сайте
if(!empty($_POST))
{
    // подключаем файл для авторизации
    include __DIR__ . '/models/avtorization.php';
    $name = $_POST['name'] ?? '';
    $password=$_POST['password'] ?? '';

    /**
     * checkUsersData функция проверяет имя и пароль админа
     * @param string $name имя админа
     * @param int $password пароль админа
     * @return bool
     */

    if (checkUsersData($name, $password)) {
        // если все успешно то добавляем имя и пароль в куки
        setcookie('name', $name, 0, '/');
        setcookie('password', $password, 0, '/');
        // и делаем редирект
        header('Location: /admin.php');
    } else {
        $error = 'Ошибка авторизации';
    }



}
// подключаем файл для работы с зашрузкой фотографий
 $letter = include __DIR__ . '/models/uploadingFiles.php';
 include __DIR__ . '/models/avtorization.php';
 

// функция checkdateCoociesUse проверяет есть ли админ в COOKIE

 $result = checkdateCoociesUser(); 
 if($result){
     
     $title = 'Форма загрузки фотографий на сайт';
 }
 else{
     $title = 'Галерея фотографии';
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;1,400;1,500&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Галерея фотографий</title>
</head>
<body>
    <div class="app">
    <header>
<h1><?=$title?></h1>
    
<!-- подключаем меню сайта -->
<?php include __DIR__ . '/templates/menu.php';?>
</header>
    <main class="img-div">
    <?php
    if($letter){
        echo  $letter;
    }
    elseif($error ){
        echo 'ошибка авторизации';
    }

    ?>
    <?php if($result === null):?>

    <form action="/admin.php" method="POST">
    <label for="x1">
        <input type="text" name="name">
    </label>
    <label for="x2">
        <input type="password" name="password">
    </label>
    <input type="submit" value="Войти">
    </form>
    <?php else:?>
    <form action="/admin.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" id="">
    <input type="submit" value="Загрузить">
    </form>
    <?php endif;?>
    </main> 
    <div class="cls"></div>
    </div>
    <!-- подключаем footer -->
    <?php include __DIR__ . '/templates/footer.php' ?>
</body>
</html>