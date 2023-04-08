<!-- Підключення до бази даних -->
<?php
    require_once '..\Config\connect.php';
    session_start();
?>
<!------------------------------------->
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style_zero.css">
    <link rel="stylesheet" href="Gallery_CSS/gallery_style.css">
    <!------------------------------------Fonts------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-----Іконка вкладки сайту----->
    <link rel="shortcut icon" href="../IMG/favicon.ico">
    <title>Gallery</title>
</head>
<body>
    <div class="video_wrapper">
        <div class="video">
            <video class="video_media" src="../IMG/video.mp4" autoplay muted loop>
                
            </video>
        </div>
    </div>
    <!------------------------------------Шапка сторінки------------------------------------>
    <div class="main_wrapper">
        <header class="header">
            <h1>
                <a class = "main_page_link" href="../index.php">DYMAR</a>
                <hr>
            </h1>
            <h2 class="suptitle_text">Gallery</h2>
            <?php if (isset($_SESSION['user_name']) && $_SESSION['user_admin'] == 1) {?>
                <div class="buttons_wrapper">
                    <a href="album_creating_page.php" class="button button_create">Створити</a>   
                 </div>
            <?php } ?>
        </header>

        <div class="albums_wrapper">
        <!------------------------------------Альбоми галереї------------------------------------>
        <?php 
            $query = "SELECT * FROM `Albums`"; //змінна $query містить в собі запит до таблиці `Albums` бази даних
            // змінній $clients_request присвоюємо результат виконання 
            // вбудованої функції mysqli_query, що здійснює запит до бази даних 
            // і в котру ми передаємо два параметри:
            // змінну $connect для з'єднання із відповідною базою даних, а також
            // змінну $query, що містить наш запит до конкретної таблиці бази.
            $clients_request = mysqli_query($connect, $query);
            //-----------------------------------------------------
            // переприсвоюємо значення змінної результатом виконання
            // функції mysqli_fetch_all у котру передаємо попереднє 
            // значення даної змінної в якості параметру
            // ----------------------------------------------------
            // функція mysqli_fetch_all зчитує рядки з результуючого
            // набору і поміщає їх в масив (асоціативний, чи числовий)
            // в даному випадку ми отримуємо масив із його підмасивами,
            // де кожен підмасив містить один рядок бази даних
            $clients_request = mysqli_fetch_all ($clients_request);

            // перебираємо масив використовуючи цикл foreach
            // першим параметром є сам масив, котрий ми перебираємо
            // другий параметр буде зберігати значення поточного елементу масива
            // на кожній ітерації циклу
            //---------------------------------------------------------
            // в даному випадку на кожній ітерації ми отримуємо підмасив
            // кожен з яких містить ключі і відповідні їм значення
            // які ми підставляємо у відповідні комірки таблиці
            foreach ($clients_request as $clients_requests) {
                ?>
                    <div class="album_wrapper">
                    <?php if (isset($_SESSION['user_name']) && $_SESSION['user_admin'] == 1) {?>
                        <a href="..\Vendor\album_delete.php?id=<?= $clients_requests[0]?>">
                            <img class="delete_icon" src="..\IMG\Icons\delete.png" alt="">
                        </a>
                    <?php } ?>
                        <div class="album_preview">
                            <a href="Gallery_album_page.php?id=<?= $clients_requests[0]?>">
                                <img src="<?= $clients_requests[2]?>" alt="" class="album_img">
                            </a>
                        </div>
                        <div class="album_title">
                            <?= $clients_requests[1]?>
                        </div>
                    </div>
                <?php
                 
            };

        ?>
        </div>  
    </div>
        
</body>
</html>