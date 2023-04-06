
<!-- Підключення до бази даних -->
<?php
    require_once '..\Config\connect.php';
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
    <link rel="stylesheet" href="Blog_CSS\blog_style.css">
    <link rel="stylesheet" href="..\CSS\admin_style.css">
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
            <h2 class="suptitle_text">Create</h2>
        </header>
        
        <div class="article_wrapper">
            <div class="block">
                <form class="admin_form" action="..\Vendor\article_create.php" method="post">
                    <p class="input_title">
                        Назва статті
                    </p>
                    <textarea class = "input input_article_title" name="article_title"></textarea>

                    <p class="input_title">Посилання на зображення</p>
                    <textarea class = "input input_article_title" name="article_image"></textarea>

                    <p class="input_title">Анотація статті</p>
                    <textarea class = "input input_article_description" name="article_description"></textarea>

                    <p class="input_title">Текст статті</p>
                    <textarea class = "input input_article_text" name="article_text"></textarea>

                    <button type="submit" class="admin_button">
                        Підтвердити
                    </button>
                </form>
                
            </div> 
        </div>
    </div>
    
</body>
</html>

