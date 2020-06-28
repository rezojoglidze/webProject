<?php

    $host="localhost";
    $user="root";
    $password="";
    $db="webProject";


    if(isset($_POST['submit'])){

        $email=$_POST['email'];
        $password=$_POST['password'];

        // Create connection
        $con= new mysqli('localhost','root','','webProject'); //or die(mysql_error());
        $sql=("select * from registration where email='".$email."'AND password='".$password."' limit 1");

        $result=$con->query($sql);

        if( $result->num_rows > 0){
            echo " You Have Successfully Logged in";
            exit();
        } else {
            echo " You Have Entered Incorrect Password";
            exit();
        }
    }
?>
