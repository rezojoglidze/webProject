<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header class="header">
    <div>
        <div class="head-banner">
            <h1>
               <a href="index.php"> <img src="img/head-banner.svg" alt="head-banner is missing"> </a>
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
                <li><a class="menu-a" href="pantrionCompany.php">კომპანია</a></li>
                <li><a class="menu-a" href="gallery.php">გალერეა</a></li>
            </ul>
        </nav>
</header>
</body>
</html>