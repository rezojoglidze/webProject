<?php

   include("../database/configDatabase.php");

    if(isset($_POST['submit'])){

        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql=("SELECT * FROM registration WHERE email='".$email."'AND password='".$password."' limit 1");

        $result=$con->query($sql);

        if( $result->num_rows > 0){
            session_start();
            echo "You Have Successfully Logged in  ";
            $row = $result->fetch_assoc();


            $userid=$row['id'];
            $_SESSION['userid']=$userid;

           if( $row['isAdmin'] == true ) {
             $_SESSION['email'] = $_POST['email'];


           header("Location: http://localhost:8080/webProject/AdminPanel/admin.php");
             exit();
           } else {
              $_SESSION['email'] = $_POST['email'];
             header("Location: http://localhost:8080/webProject/index.php");
              exit();
           }
        } else {
            echo "არასწორი პაროლი ან ლოგინი";
            exit();
        }
    }
?>