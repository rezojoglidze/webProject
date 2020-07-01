<?php
    session_start()
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>შესახებ</title>
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

<div class="content" id="content"> </div>

    <section>
        <div>
            <iframe class="map-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.136096887863!2d44.78282485047135!3d41.71758198332214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472d4fa5b02d7%3A0xced15c2c7992ceb5!2sGeoLab!5e0!3m2!1sen!2sge!4v1544182328441" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
</section>

<section class="contact-session">
    <h2 class="contact">საკონტაკტო ინფორმაცია</h2>
    <ol>
        <li class="about-li-tag">
            <span>მისამართი</span>
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.136096887863!2d44.78282485047135!3d41.71758198332214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472d4fa5b02d7%3A0xced15c2c7992ceb5!2sGeoLab!5e0!3m2!1sen!2sge!4v1544182328441" target="_blanck">10 მერაბ ალექსიძის ქუჩა, თბილისი 0193</a>
        </li>

        <li class="about-li-tag">
            <span>ტელეფონის ნომერი</span>
            <a>555 69 43 48</a>
        </li>

        <li class="about-li-tag">
            სამუშაო საათები: 9:00-დან 20:00-მდე
        </li>
    </ol>
</section>


<footer class="socialIcons">
    <a href="http://www.facebook.com" >
        <img class=social-fb src="img/facebook-logo.svg" alt="facebook-logo isn't responding">
    </a>
    <a href="http://www.youtube.com">
        <img class=social-yt src="img/youtube-logo.svg" alt="not responding">
    </a>
</footer>


<script>
    let element = document.createElement('h1');
    element.style.color = "green";
    element.style.fontSize = "14px";
    element.style.fontFamily = "Arial, Helvetica, sans-serif";
    element.style.fontWeight = "normal";
    element.style.margin = "30px";
    element.innerText = "H1 Created from javascript";
    document.getElementById("content").appendChild(element);

</script>
</body>
</html>