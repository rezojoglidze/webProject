<?php
    session_start()
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>პანტრიონი კომპანია</title>
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

<div class="header">
    <div class="header-content">
        <div class="pantrion-logo">
            <img src="img/cows.png" alt="">
        </div>
    </div>
</div>

<div class="pantrion-black-gradient"></div>

<div class="pantrion-post">
    <div class="content">
        <div class="design-posts">
            <div >
                <div class="company-box" ></div>
                <div class="text"><h3>Max Morgan</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quia?</p>
                    <p style="color:#1abc9c;">Email: dan@agencyone.eu</p>
                </div>
            </div>
            <div>
                <div class="text"><h3>Max Morgan</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quia?</p>
                    <p style="color:#1abc9c;">Email: dan@agencyone.eu</p>
                </div>
            </div>
        </div>

        <div class="pantrion-main-text">
            <h1 class="transform-exmpl">transform exmpl with gradient</h1>
            <h3>Our expertise is in providing a bespoke Pan-EMEA service, working closely with our clients to understand their business, their culture and strategy so that we select the best candidates to put forward</h3>
            <p>
                Agency One is made up of experienced in-house recruiters who understand our clients and how the recruitment lifecycle affects them. This recruitment experience is complimented by individuals from industry, with knowledge and understanding of the market place. This all means a much more comprehensive approach and more efficient service.
            </p>
            <p>We deliver the candidates our clients need to drive their businesses forward and that is why our clients continue to work with us.</p>
        </div>
    </div>
</div>

</body>
</html>