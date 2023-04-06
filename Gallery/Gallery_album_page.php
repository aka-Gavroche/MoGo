
 <!-- Підключення до бази даних -->
<?php
    require_once '..\Config\connect.php';

    $album_id = $_GET['id'];
    
    $query = "SELECT * FROM `Photos` WHERE `AlbumID` = '$album_id'"; 
    $clients_request = mysqli_query ($connect, $query);
    $clients_request = mysqli_fetch_all ($clients_request);

    $queryTitle = "SELECT * FROM `Albums` WHERE `ID` = '$album_id'";
    $TitleFor = mysqli_query ($connect, $queryTitle);
    $TitleFor = mysqli_fetch_assoc ($TitleFor);


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
            <h2 class="suptitle_text"><a href="Gallery_main_page.php">Gallery</a></h2>
            <h3 class="album_name"><?= $TitleFor['Title']?></h3>
            <div class="buttons_wrapper">
                <a href="album_adding_photo.php?id=<?=$album_id?>" class="button button_create">Створити</a>   
            </div>
        </header>
    
        <div class="suptitle">
            <h2 class="suptitle_text suptitle_text--second">Gallery</h2>
        </div>
    
        <div class="suptitle_list">
            <div class="suptitle_list_block">
                <div class="suptitle_list_block_header">
                    <div class="close_button">X</div>
                </div>
                <div class="suptitle_list_content">
                    <p id="suptitleItem1">Альбом #1</p>
                    <p id="suptitleItem2">Альбом #2</p>
                    <p id="suptitleItem3">Альбом #3</p>
                    <p id="suptitleItem4">Альбом #4</p>
                    <p id="suptitleItem5">Альбом #5</p>
                </div>
            </div>
        </div>
    
        <div id = "top_button" class="top_button">
        </div>
    
        <!------------------------------------Фотографії альбому------------------------------------>
        <div class="photos_wrapper">
        <?php 
           
            foreach ($clients_request as $clients_requests) {
                ?>
                    <div class="photo_block">
                        <form action="..\Vendor\photo_delete.php" method="post">
                            <!-- <a href="..\Vendor\photo_delete.php?id=<?=$clients_requests[0]?>">
                                <img class="delete_icon" src="..\IMG\Icons\delete.png" alt="">
                            </a> -->
                            <input type="hidden" name="photo_id" value="<?=$clients_requests[0]?>">
                            <input type="hidden" name="album_id" value="<?=$album_id?>">
                            <button class="delete_icon" type="submit"></button>
                        </form>
                        
                        <img class="full_frame" src="<?= $clients_requests[2]?>" alt="">
                    </div>
               
                <?php
                 
            };
        ?>


               
        </div>
    </div>
        
    <!------------------------------------Скрипти на чистому JS------------------------------------>
    <script src="../Blog/Blog_JS/blog_main_page_script.js"></script>
    <script src="../Blog/Blog_JS/blog_nav_list_script.js"></script>
</body>
</html>