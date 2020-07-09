<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LogIn</title>
    <link rel="stylesheet" href="../css/style.css">
    <meta name="author" content="რეზო ჯოგლიძე">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
<header class="header">
    <h1>
        <a href="../index.php"><img class="head-banner" src="../img/head-banner.svg" alt="head-banner is missing"></a>
    </h1>
</header>

<form action="#" method="post">
    <div class="container">
        <h1 class="registration-h1">შესვლა</h1>
        <p value="<?php echo htmlentities($errorMsg); ?>" >შეავსეთ ყველა ველი.</p>

        <hr>
        <label for="email"><b>ელ-ფოსტა</b></label>
        <input type="text" placeholder="შეიყვანე ელ-ფოსტა" name="email" id="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="psw" required>
        <hr>

        <button type="submit" name="submit" class="registerbtn">შესვლა</button>
    </div>

    <div class="container signin">
        <p>არ გაქვთ მომხმარებელი? <a href="Registration.php">რეგისტრაცია</a>.</p>
    </div>
</form>

<?php

   include("../database/configDatabase.php");

    if(isset($_POST['submit'])){

        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql=("SELECT * FROM users WHERE email='".$email."'AND password='".$password."' limit 1");

        $result=$con->query($sql);

        if( $result->num_rows > 0){
        echo "You Have Successfully Logged in  ";
        $row = $result->fetch_assoc();

        session_start();
        $_SESSION['userid']= $row['id'];
        $_SESSION['isAdmin']= $row['isAdmin'];
        $_SESSION['email'] = $_POST['email'];

        if( $row['isAdmin'] == true ) {
            header("Location: http://localhost:8080/webProject/AdminPanel/admin.php");
            exit();
           } else {
             header("Location: http://localhost:8080/webProject/index.php");
             exit();
          }
        } else {
          echo "არასწორი პაროლი ან ლოგინი";
          exit();
         }
      $con->close();
    }
        ?>
</body>
</html>