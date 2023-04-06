<?php
    require_once '..\Config\connect.php';

    //створюємо змінні, в які зберігаємо отримані значення 
    //методом post із відповідних input'іт
    $articleTitle = $_POST['article_title'];
    $articleImage = $_POST['article_image'];
    $articleDescripton = $_POST['article_description'];
    $articleText = $_POST['article_text'];

    //створюємо змінну, в яку поміщаємо наш запит до таблиці бази даних
    //у відповідні поля таблиці поміщаємо відповідні змінні
    
    $query = "INSERT INTO `Articles` (`ID`, `Title`, `Annotation`, `Image`, `Text`, `AddedTime`) 
    VALUES (NULL, '$articleTitle', '$articleDescripton', '$articleImage', '$articleText', '2023-04-04 23:11:32.000000')";

    //фукнція mysqli_query - виконує запит до бази данних.
    mysqli_query ($connect, $query);

    //повертаємось на головну сторінку
    $comeback = "Location:../Blog/blog_main_page.php";
    header ($comeback);

    //------------------------------------------------------------------------------------------------------------------ 
?>

