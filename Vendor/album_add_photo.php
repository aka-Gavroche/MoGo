<?php
    require_once '..\Config\connect.php';

    //створюємо змінні, в які зберігаємо отримані значення 
    //методом post із відповідних input'іт
    $albumID = $_POST['album_id'];
    $photo = $_POST['photo'];

    //створюємо змінну, в яку поміщаємо наш запит до таблиці бази даних
    //у відповідні поля таблиці поміщаємо відповідні змінні
    
    $query = "INSERT INTO `Photos` (`ID`, `AlbumID`, `Image`) VALUES (NULL, '$albumID', '$photo')";

    //фукнція mysqli_query - виконує запит до бази данних.
    mysqli_query ($connect, $query);

    //повертаємось на головну сторінку
    $comeback = "Location:..\Gallery\Gallery_album_page.php?id=$albumID";
    header ($comeback);

    //------------------------------------------------------------------------------------------------------------------ 
?>

