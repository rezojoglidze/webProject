
<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" />
    <title>მთავარი</title>
    <meta name="author" content="რეზო ჯოგლიძე">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
<header class="header">
    <div>
        <div class="head-banner">
            <h1>
                <img src="img/head-banner.svg" alt="head-banner is missing">
            </h1>
        </div>

        <div class="headers-auth-fields">
            <?php
                include("AuthLogic.php");
            ?>
        </div>
    </div>

    <nav class="title-center">
        <ul class="Main-Font">
            <li><a class="menu-a" href="index.php">მთავარი</a></li>
            <li><a class="menu-a" href="news.php">სიახლეები</a></li>
            <li><a class="menu-a" href="about.php">კონტაქტი</a></li>
            <li><a class="menu-a" href="pantrionCompany.php">პანტრიონი კომპანია</a></li>
        </ul>
    </nav>
</header>

<section class="banner-s" >
    <img src="img/shuala.svg" class = "index-page-main-photo" alt="shuala isn't respoding">
</section>

<footer class="socialIcons">
    <a href="http://www.facebook.com">
        <img class=social-fb src="img/facebook-logo.svg" alt="facebook-logo isn't responding">
    </a>
    <a href="http://www.youtube.com">
        <img class=social-yt src="img/youtube-logo.svg"  alt="not responding">
    </a>
</footer>
</body>
</html>