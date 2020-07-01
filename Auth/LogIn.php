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
        $sql=("SELECT * FROM registration WHERE email='".$email."'AND password='".$password."' limit 1");

        $result=$con->query($sql);

        if( $result->num_rows > 0){
            echo "You Have Successfully Logged in";
            $row = $result->fetch_assoc();
            session_start();
            
           if( $row['isAdmin'] == true ) {
             echo "admin aris";
           } else {
              $_SESSION['email'] = $_POST['email'];

              header("Location: http://localhost:8080/webProject/index.php");
           }



        // Temporarily in $_POST structure.
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];

      //  header("Location: http://localhost:8080/webProject/index.php");
            exit();
        } else {
            echo "არასწორი პაროლი ან ლოგინი";
            exit();
        }
    }
?>