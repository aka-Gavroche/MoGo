<?php
    require_once '..\Config\connect.php';

    //підтягування логіну і паролю з таблиці бази данних 
    //для подальшої перевірки на вірність?
    //якщо логін та пароль вірні, то відбувається перехід на головну сторінку?

    //тимчасові паролі для реалізації перевірки
    $true_login = "Test01@gmail.com";
    $true_password = "Test01";

    $user_login = $_POST['user_login'];
    $user_password = $_POST['user_password'];

    if ($user_login != $true_login || $user_password != $true_password) {

        die("Невірно уведені дані. Спробуте ще раз.");

    } 

    $comeback = "Location:../index.php";
    header ($comeback);
?>
