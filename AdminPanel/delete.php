<?php
    session_start();
    if( isset($_SESSION['selecteduserid'])){
       echo "session $_SESSION[selecteduserid] ";
//        $con1 =  mysqli_connect("localhost","root","","webProject");
//        $sql = "DELETE FROM users WHERE id=$_SESSION[selectedid]";
//        $result1= mysqli_query($con1,$sql);
//
//        if($result1){
//        echo "record deleted";
//        } else {
//      	echo "can not delete";
//        }
    }
?>