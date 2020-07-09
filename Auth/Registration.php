<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/style.css">
    <meta name="author" content="რეზო ჯოგლიძე">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
<header class="header">
    <h1>
        <a href="../index.php"><img class="head-banner" src="../img/head-banner.svg" alt="head-banner is missing"></a>
    </h1>
</header>

<form id="form" action="#" method="post">
    <div class="container">
        <h1 class="registration-h1">რეგისტრაცია</h1>
        <p id="error">შეავსეთ ყველა ველი.</p>
        <hr>


        <label for="firstName"><b>სახელი</b></label>
        <input type="text" placeholder="შეიყვანე სახელი" name="firstName" id="firstName" required>

        <label for="lastName"><b>გვარი</b></label>
        <input type="text" placeholder="შეიყვანე გვარი" name="lastName" id="lastName" required>

        <label for="email"><b>ელ-ფოსტა</b></label>
        <input type="text" placeholder="შეიყვანე ელ-ფოსტა" name="email" id="email" required>

        <label for="psw"><b>პაროლი</b></label>
        <input type="password" placeholder="შეიყვანეთ პაროლი" name="psw" id="psw" required>

        <label for="psw-repeat"><b>გაიმეორეთ პაროლი</b></label>
        <input type="password" placeholder="გაიმეორეთ პაროლი" name="psw-repeat" id="psw-repeat" required>
        <hr>

        <button type="submit" name="submit" class="registerbtn">რეგისრტაცია</button>
    </div>

    <div class="container signin">
        <p>უკვე გაქვთ მომხარებელი? <a href="LogIn.php">შესვლა</a>.</p>
    </div>
</form>


<script>

    const name = document.getElementById('email')
    const password = document.getElementById('psw')
    const passwordRepeat = document.getElementById('psw-repeat')
    const form = document.getElementById('form')
    const errorElement = document.getElementById('error')

    form.addEventListener('submit', (e) => {
        let messages = []
        if (name.value.length < 4 ) {
             messages.push('Name must be longer than 6 characters')
        }

        if(password.value != passwordRepeat.value) {
            messages.push('პაროლები ერთმანეთს არ ემთხვევა')
        }

        if (password.value.length <= 6) {
          messages.push('Password must be longer than 6 characters')
        }

        if (password.value.length >= 20) {
          messages.push('Password must be less than 20 characters')
        }

         if (password.value === 'password') {
         messages.push('Password cannot be password')
         }

        if (messages.length > 0) {
           e.preventDefault()
          errorElement.innerText = messages.join(', ')
     }
    })

</script>

<?php
    include("../database/configDatabase.php");
    if(isset($_POST['submit'])){

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
     $con->close();
   }
?>
</body>
</html>