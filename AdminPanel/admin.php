<?php
    session_start()
?>

<?php
    if(isset($_SESSION['email'])){
         echo 'გამარჯობა '; echo $_SESSION['email'];
    }
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