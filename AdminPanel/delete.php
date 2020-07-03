<?php
    session_start();
    if( isset($_SESSION['selectedid']) || isset($_POST['deleteBtnTapped']) ){
       echo "session $_SESSION[selectedid] ";
       $con1 =  mysqli_connect("localhost","root","","webProject");
       $sql = "DELETE FROM users WHERE id= $_SESSION[selectedid]";
       $result1= mysqli_query($con1,$sql);

       if($result1){
       echo "record deleted";
       } else {
     	echo "can not delete";
       }
    }
?>