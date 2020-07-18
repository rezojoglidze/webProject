<?php
    session_start();
    include("../database/configDatabase.php");
    if(isset($_SESSION['isAdmin']) && isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
          if($_SESSION['isAdmin'] == 1) {
//           echo " session  is available, Welcome $_SESSION[userid] ";
          } else {
          echo " თქვენ არ გაქვთ ადმინის უფლება";
          exit;
      }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header class="header">
    <div class="admin-headers-div">ადმინის პანელი</div>

   <div class="headers-auth-fields">
     <form  action="../Auth/logOut.php" method="post">
            <button class="logOut_btn" type="submit" name="logout-submit">გასვლა</button>
     </form>
   </div>
</header>


        <nav style="margin-top: 70px; margin-left: 20px" class="Main-Font" class="admin-title-center ">
                <li><a class="menu-a" href="users.php">იუზერები</a></li>
                <li><a class="menu-a">ფოტოები</a></li>
        </nav>
</body>
</html>