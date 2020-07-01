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

$id = rand();
$firstName = stripcslashes($_POST["firstName"]);
$firstName = mysqli_real_escape_string($con,$firstName);

$lastName = stripcslashes($_POST["lastName"]);
$lastName = mysqli_real_escape_string($con,$lastName);

$email = stripcslashes($_POST["email"]);
$email = mysqli_real_escape_string($con,$email);

$password = stripcslashes($_POST["psw"]);
$password = mysqli_real_escape_string($con,$password);



$sql = $con->prepare(" INSERT INTO registration(id,email,password,firstName,lastName) VALUES(?,?,?,?,?) ");

$sql->bind_param("issss", $id, $email, $password,$firstName,$lastName);

if($sql->execute()) {
	echo "New record created successfully";
	 session_start();
     $_SESSION['email'] = $_POST['email'];

     header("Location: http://localhost:8080/webProject/index.php");
} else {
	echo "something went wrong " . $con->mysqli_error;
}

?>