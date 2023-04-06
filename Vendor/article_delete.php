<?php
    require_once '..\Config\connect.php';

    $articleID = $_GET['id']; 

    //створюємо змінну, в яку поміщаємо наш запит до таблиці бази даних
    //у відповідні поля таблиці поміщаємо відповідні змінні
    $query = "DELETE FROM `Articles` WHERE `Articles`.`ID` = '$articleID'";

    //фукнція mysqli_query - виконує запит до бази данних.
    mysqli_query ($connect, $query);

    //повертаємось на головну сторінку
    $comeback = "Location:../Blog/blog_main_page.php";
    header ($comeback);
    //------------------------------------------------------------------------------------------------------------------ 
?>

