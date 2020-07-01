<?php

   include("../database/configDatabase.php");

    if(isset($_POST['submit'])){

        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql=("SELECT * FROM registration WHERE email='".$email."'AND password='".$password."' limit 1");

        $result=$con->query($sql);

        if( $result->num_rows > 0){
            echo "You Have Successfully Logged in  ";
            $row = $result->fetch_assoc();
            session_start();
            $userId = $row['id'];

//             $value = filter_input(INPUT_POST, '$userId');
//             if (!isset($_POST['$userId'])) {
//                 $value = $userId;
//             } elseif (is_array($_POST['$userId'])) {
//                 $value = $userId;
//             } else {
//                 $value = $_POST['$userId'];
//             }


            echo "userId";
            echo $value;

           if( $row['isAdmin'] == true ) {
             $_SESSION['email'] = $_POST['email'];
             $_SESSION['id'] = $_POST['value'];
             echo $_POST['value'];

            header("Location: http://localhost:8080/webProject/AdminPanel/admin.php");
             exit();
           } else {
              $_SESSION['email'] = $_POST['email'];
            //  $_SESSION['id'] = $_POST['id'];
              header("Location: http://localhost:8080/webProject/index.php");
              exit();
           }
        } else {
            echo "არასწორი პაროლი ან ლოგინი";
            exit();
        }
    }
?>