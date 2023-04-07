
<!-- Підключення до бази даних -->
<?php
    require_once 'Config\connect.php';
    session_start();
?>
<!------------------------------------->

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------------------------------------Підключення стилів------------------------------------>
    <link rel="stylesheet" href="../CSS/style_zero.css">
    <link rel="stylesheet" href="Blog\Blog_CSS\blog_style.css">
    <link rel="stylesheet" href="CSS\admin_style.css">
    <!------------------------------------Fonts------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-----Іконка вкладки сайту----->
    <link rel="shortcut icon" href="../IMG/favicon.ico">
    <title>Admin</title>
</head>
<body>
    <!------------------------------------Відеофон сайту------------------------------------>
    <div class="video_wrapper">
        <div class="video">
            <video class="video_media" src="../IMG/video.mp4" autoplay muted loop>
                
            </video>
        </div>
    </div>
    <!-------------------------------------------------------------------------------------->

    <!------------------------------------Головна обгортка сайту------------------------------------>
    <div class="main_wrapper">
        <!------------------------------------Шапка сайту------------------------------------>
        <header class="header">
            <h1>
                <a class = "main_page_link" href="../index.php">DYMAR</a>
                <hr>
            </h1>
            <h2 class="suptitle_text">ADMIN</h2>
        </header>
        
        <div class="article_wrapper">
            <div class="block">
                <form class="admin_form" action="Vendor\admin_access.php" method="post">
                    <input type="hidden" name="action" value="login">
                    <p class="input_title">Логін</p>
                    <input class="input admin_input" type="email" name="email">
                    <span class="invalid-feedback"><?php if(isset($_SESSION['message'])) { echo $_SESSION['message']['email_err'];} ?></span>

                    <p class="input_title">Пароль</p>
                    <input class="input admin_input" type="password" name="password">
                    <span class="invalid-feedback"><?php if(isset($_SESSION['message'])) {echo $_SESSION['message']['password_err'];} ?></span>

                    <button class="admin_button"  type="submit">Увійти</button>
                </form>
            </div> 
        </div>
        
    </div>
    
    <!------------------------------------Скрипти на чистому JS------------------------------------>
    <script src="Blog_JS\blog_main_page_script.js"></script>
    <!-- <script src="Blog_JS/blog_nav_list_script.js"></script> -->
</body>
</html>