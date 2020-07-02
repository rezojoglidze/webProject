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
                 if(isset($_SESSION['email']) || isset($_SESSION['id'])) {

                            echo 'გამარჯობა '; echo $_SESSION['email'];
               //              echo ' id -> '; echo $_SESSION['id'];

                            echo '<form  action="Auth/logOut.php" method="post">
                                  <button class="logOut_btn" type="submit" name="logout-submit">გასვლა</button>
                                  </form>';
                       } else {
                              echo  '<ul>';
                              echo  '<form  action="Auth/LogIn.html" method="post">
                                                 <button class="logOut_btn" type="submit" name="logIn-submit">შესვლა</button>
                                                 </form>';
                              echo    '<p class="logOut_slash" style="margin-right: 1px; margin-left: 1px"> / </p>';

                              echo  '<form  action="Auth/Registration.html" method="post">
                                     <button class="logOut_btn" type="submit" name="registracion-submit">რეგისტრაცია</button>
                                      </form>';
                              echo   '</ul>';
                       }
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