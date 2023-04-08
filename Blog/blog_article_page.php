<!-- Підключення до бази даних -->
<?php
    require_once '..\Config\connect.php';

    $article_id = $_GET['id'];
    
    $query = "SELECT * FROM `Articles` WHERE `ID` = '$article_id'"; 
    $clients_request = mysqli_query ($connect, $query);
    $clients_request = mysqli_fetch_assoc ($clients_request);
?>
<!------------------------------------->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style_zero.css">
    <link rel="stylesheet" href="Blog_CSS/blog_style.css">
    <!------------------------------------Fonts------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-----Іконка вкладки сайту----->
    <link rel="shortcut icon" href="../IMG/favicon.ico">
    <title>Blog</title>
</head>
<body>
    <div class="video_wrapper">
        <div class="video">
            <video class="video_media" src="../IMG/video.mp4" autoplay muted loop>
                
            </video>
        </div>
    </div>

    <div class="main_wrapper">
        <header class="header">
            <h1>
                <a class = "main_page_link" href="../index.php">DYMAR</a>
                <hr>
            </h1>
            <h2 class="suptitle_text"><a href="blog_main_page.php">Blog</a></h2>
        </header>

        <!--Кнопка "Вверх"-->
        <a href="blog_article_page.php?id=<?= $article_id?>">
            <div id = "top_button" class="top_button">
            </div>
        </a>

        <!------------------------------Вміст статті------------------------------>

        <div class="article_wrapper">
            <div class="block">
                <h3 class="block-title"><?= $clients_request['Title']?></h3>
    
                <div class="article_background">
                        <!-- <img src="1.png" alt=""> -->
                        <img src="<?= $clients_request['Image']?>" alt="Тут була картинка =(">
                </div>
    
                <div class="block-content" >
                    <p>
                        <?= $clients_request['Text']?>
                    </p>
                </div>
                <p>
                    <?= $clients_request['AddedTime']?>
                </p>
            </div>
        </div>
        
    </div>
    
</body>
</html>