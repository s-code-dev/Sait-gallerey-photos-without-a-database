
<?php
if(!empty($_FILES)){
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $filePath = __DIR__ . '/../private/img/'. $fileName;
    $fileSize = $file['size'];

    $fileType = ['jpg','png'];
    $extension = pathinfo($filePath, PATHINFO_EXTENSION);

    if(!in_array($extension, $fileType)){
        return 'не поддерживает данный формат';
    }
    elseif(file_exists($filePath)){
        return 'Файл уже существует';

    }
    elseif($fileSize > 8000000){
        return 'Cлишком большой файл';

    }

    elseif($file['error'] !== UPLOAD_ERR_OK){
        return 'ошибка при загрузки файла';
    }

    elseif(!move_uploaded_file($file['tmp_name'], $filePath)){

        return 'ошибка при загрузки файла';

    }
    else{

        return 'файл загружен';
        
    }

}