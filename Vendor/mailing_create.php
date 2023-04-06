<?php
    require_once '..\Config\connect.php';

    $client_email = $_POST['client_email'];
    

    $query = "INSERT INTO `Mailing` (`Address`) 
    VALUES ('$client_email')";

    mysqli_query ($connect, $query);

    $comeback = "Location:../index.php";
    header ($comeback);
?>