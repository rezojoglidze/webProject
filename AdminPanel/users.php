<?php
    session_start();
    include("../database/configDatabase.php");
    if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
          echo " session  is available, Welcome $_SESSION[userid] ";
          } else {
          echo "შენს შესახებ დეტალების სანახავად გაიარეთ ავტორიზაცია ან რეგისტრაცია";
          exit;
      }
    $result = $con->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css" />
    <title>ჩემს შესახებ</title>
    <meta name="author" content="რეზო ჯოგლიძე">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="abouts-form">
      <form action="#" method="post">
          <p class="about-textView">აირჩიე იუზერი, რომლის წაშლა ან რომელიმე ველის განახლება გსურს.</p>
          <p>
             <select name="allUsersSelect" style="margin-bottom: 5px">
               <?php while($row = $result->fetch_assoc()){ ?>
                <option value="<?php echo $row['id']?>"><?php echo $row['id']; echo " "; echo $row['firstName']; echo " "; echo $row['lastName'] ?> </option>
               <?php } ?> </select>
             </p>
                <button name="deleteBtnTapped" class="registerbtn">წაშლა</button>
                <p class="about-p">აირჩიე რისი შეცვლა გინდა:</p>
                  <select name="updatesSelect">
                      <option value="email">email</option>
                      <option value="password">password</option>
                      <option value="firstName">firstName</option>
                      <option value="lastName">lastName</option>
                  </select>
                    <input type = "Text" name="inputTextField" placeholder = "შეიყვანეთ ტექსტი">
                <button name="updateBtnTapped" class="registerbtn">განახლება</button>
                <button name="downloadFileBtnTapped" class="registerbtn">ჩამოწერე ფაილში</button>
      </form>
    </div>


    <table class="about-table">
        <tr style="margin: 20px;">
        <th>Id</th>
        <th>Email</th>
        <th>Password</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>isAdmin</th>

        </tr>
            <?php
                $result = $con->query("SELECT * FROM users");
                if ($result->num_rows > 0) {
                 // output data of each row
                      while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["email"] . "</td><td>"
                . $row["password"]. "</td><td>" . $row["firstName"]. "</td><td>" . $row["lastName"]. "</td><td>" . $row["isAdmin"]. "</td></tr>";
                }
                echo "</table>";
              } else { echo "0 results"; }
           ?>
    </table>


           <?php
             if(isset($_POST['deleteBtnTapped'])){
                $selectedUserId = $_POST['allUsersSelect'];
                $sql = "DELETE FROM users WHERE id=$selectedUserId";
                $result1= mysqli_query($con,$sql);

               if($con->query($sql) === TRUE){
                 include("../Auth/logOut.php");
                 } else {
                  	echo "can not delete";
                }
                $con->close();
             }
           ?>


             <?php
               if(isset($_POST['updateBtnTapped']) && isset($_POST['inputTextField'])){
                $selectedUserField = $_POST['updatesSelect'];
                $inputTxtValue = $_POST['inputTextField'];
                $selectedUserId = $_POST['allUsersSelect'];
                if(!empty($_POST['inputTextField'])){
                $sql = "UPDATE users SET $selectedUserField='$inputTxtValue' WHERE id=$selectedUserId";
                   if ($con->query($sql) === TRUE) {
                        echo "წარმატებით განახლდა";
                    } else {
                      echo "პრობლემა განახლებისას: " . $con->error;
                    }
                } else {
                echo "textField არ უნდა იყოს ცარიელი!";
                }
               }
             ?>


             <?php
              if(isset($_POST['downloadFileBtnTapped'])){
               $selectedUserId = $_POST['allUsersSelect'];
               $result = $con->query("SELECT * FROM users WHERE id=$selectedUserId");
               if($row = $result->fetch_assoc()) {
                 $fp = fopen('file.txt', 'a');//opens file in append mode
                 fwrite($fp,'Id: ' .$row["id"].PHP_EOL);
                 fwrite($fp,'Email: ' .$row["email"].PHP_EOL);
                 fwrite($fp,'Password: ' .$row["password"].PHP_EOL);
                 fwrite($fp,'FirstName: ' .$row["firstName"].PHP_EOL);
                 fwrite($fp,'LastName: ' .$row["lastName"].PHP_EOL);
                 fwrite($fp,'isAdmin: ' .$row["isAdmin"].PHP_EOL);

                 fwrite($fp,''.PHP_EOL);
                 fwrite($fp,''.PHP_EOL);
                 fclose($fp);

                 echo "File appended successfully";
                }
              }
             ?>
  </body>
</html>
