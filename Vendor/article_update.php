<?php
    require_once '..\Config\connect.php';

    //створюємо змінні, в які зберігаємо отримані значення 
    //методом post із відповідних input'іт
    $articleID = $_POST['article_id'];      
    $articleTitle = $_POST['article_title'];
    $articleImage = $_POST['article_image'];
    $articleDescripton = $_POST['article_description'];
    $articleText = $_POST['article_text'];

    //створюємо змінну, в яку поміщаємо наш запит до таблиці бази даних
    //у відповідні поля таблиці поміщаємо відповідні змінні
    $query = "UPDATE `Articles` SET `Title` = '$articleTitle', `Annotation` = '$articleDescripton', 
            `Image` = '$articleImage', `Text` = '$articleText' WHERE `Articles`.`id` = '$articleID'";

    //фукнція mysqli_query - виконує запит до бази данних.
    mysqli_query ($connect, $query);

    //повертаємось на головну сторінку
    $comeback = "Location:../Blog/blog_main_page.php";
    header ($comeback);

    //------------------------------------------------------------------------------------------------------------------ 
?>

