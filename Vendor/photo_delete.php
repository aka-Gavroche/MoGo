<?php
    require_once '..\Config\connect.php';

    // $photoID = $_GET['id']; 
    $photoID = $_POST['photo_id'];
    $albumID = $_POST['album_id'];

    print_r($photoID);

    //створюємо змінну, в яку поміщаємо наш запит до таблиці бази даних
    //у відповідні поля таблиці поміщаємо відповідні змінні
    $query = "DELETE FROM `Photos` WHERE `Photos`.`ID` = '$photoID'";

    //фукнція mysqli_query - виконує запит до бази данних.
    mysqli_query ($connect, $query);

    //повертаємось на головну сторінку
    $comeback = "Location:..\Gallery\Gallery_album_page.php?id=$albumID";
    header ($comeback);
    //------------------------------------------------------------------------------------------------------------------ 
?>

