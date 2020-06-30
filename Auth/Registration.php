<?php

$server = "localhost";
$usernm = "root";
$password = "";
$dbname = "webProject";


// connect to the database
$con = new mysqli($server, $usernm, $password, $dbname);

if($con->connect_error) {
	die("Connection failed " . $con->connect_error);
}

$id = 5;
$email = stripcslashes($_POST["email"]);
$email = mysqli_real_escape_string($con,$email);

$password = stripcslashes($_POST["psw"]);
$password = mysqli_real_escape_string($con,$password);



$sql = $con->prepare(" INSERT INTO registration(id,email,password) VALUES(?,?,?) ");

$sql->bind_param("iss", $id, $email, $password);

if($sql->execute()) {
	echo "New record created successfully";
} else {
	echo "something went wrong " . $con->mysqli_error;
}

?>