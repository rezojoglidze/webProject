<?php

$server = "localhost";
$usernm = "root";
$password = "";
$dbname = "webProject";


$con = new mysqli($server, $usernm, $passwd, $dbname);

if($con->connect_error) {
	die("Connection failed " . $con->connect_error);
}

$id = 3;
$email = stripcslashes($_POST["email"]);
$email = mysqli_real_escape_string($con,$email);

$password = stripcslashes($_POST["psw"]);
$password = mysqli_real_escape_string($con,$password);



$sql = $con->prepare(" INSERT INTO registration(id,email,password) VALUES(?,?,?) ");

$sql->bind_param("iss", $id, $email, $password);

if($sql->execute()) {
	echo "record added";
} else {
	echo "something went wrong " . $con->mysqli_error;
}


?>