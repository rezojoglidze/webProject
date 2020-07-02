<?php
    include("../database/configDatabase.php");

    $isAdmin = 0;
    $firstName = stripcslashes($_POST["firstName"]);
    $firstName = mysqli_real_escape_string($con,$firstName);

    $lastName = stripcslashes($_POST["lastName"]);
    $lastName = mysqli_real_escape_string($con,$lastName);

    $email = stripcslashes($_POST["email"]);
    $email = mysqli_real_escape_string($con,$email);

    $password = stripcslashes($_POST["psw"]);
    $password = mysqli_real_escape_string($con,$password);

     $insert = $con->query("INSERT into users (email,password,firstName,lastName,isAdmin) VALUES ('$email', '$password','$firstName','$lastName','$isAdmin')");

     if($insert) {
         session_start();
         $_SESSION['email'] = $_POST['email'];
         header("Location: http://localhost:8080/webProject/index.php");
    } else {
        echo "something went wrong " . $con->mysqli_error;
    }

?>