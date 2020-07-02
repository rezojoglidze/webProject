<?php
    session_start();
include("../database/configDatabase.php");
    if(isset($_SESSION['isAdmin']) && isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
          if($_SESSION['isAdmin'] == 1) {
          echo " session  is available, Welcome $_SESSION[userid] ";
          } else {
          echo " თქვენ არ გაქვთ ადმინის უფლება";
          exit;
      }
      }
//     $result = $con->query("SELECT image FROM images WHERE uid=$_SESSION[userid]");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header class="header">
     <h1>
        <p>AdminPanel</p>
     </h1>

        <nav style="margin-top: 50px;" class="Main-Font" class="admin-title-center ">
                <li><a class="menu-a" href="users.php">იუზერები</a></li>
                <li><a class="menu-a">ადმინი</a></li>
        </nav>
</header>
</body>
</html>