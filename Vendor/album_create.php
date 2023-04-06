<?php
    require_once '..\Config\connect.php';

    //створюємо змінні, в які зберігаємо отримані значення 
    //методом post із відповідних input'іт
    $albumTitle = $_POST['album_title'];
    $albumPreview = $_POST['album_preview'];

    //створюємо змінну, в яку поміщаємо наш запит до таблиці бази даних
    //у відповідні поля таблиці поміщаємо відповідні змінні
    
    $query = "INSERT INTO `Albums` (`ID`, `Title`, `ImagePreview`) VALUES (NULL, '$albumTitle', '$albumPreview')";

    //фукнція mysqli_query - виконує запит до бази данних.
    mysqli_query ($connect, $query);

    //повертаємось на головну сторінку
    $comeback = "Location:..\Gallery\Gallery_main_page.php";
    header ($comeback);

    //------------------------------------------------------------------------------------------------------------------ 
?>

