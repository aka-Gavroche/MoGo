<?php
    require_once '..\Config\connect.php';

    $albumID = $_GET['id']; 

    //створюємо змінну, в яку поміщаємо наш запит до таблиці бази даних
    //у відповідні поля таблиці поміщаємо відповідні змінні
    $query = "DELETE FROM `Albums` WHERE `Albums`.`ID` = '$albumID'";

    //фукнція mysqli_query - виконує запит до бази данних.
    mysqli_query ($connect, $query);

    //повертаємось на головну сторінку
    $comeback = "Location:..\Gallery\Gallery_main_page.php";
    header ($comeback);
    //------------------------------------------------------------------------------------------------------------------ 
?>

