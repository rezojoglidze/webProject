<?php
    session_start();
include("database/configDatabase.php");
    if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
          echo " session  is available, Welcome $_SESSION[userid] ";
          } else {
          echo "შენს შესახებ დეტალების სანახავად გაიარეთ ავტორიზაცია ან რეგისტრაცია";
          exit;
      }
    $result = $con->query("SELECT * FROM users WHERE id=$_SESSION[userid]");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" />
    <title>ჩემს შესახებ</title>
    <meta name="author" content="რეზო ჯოგლიძე">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php include("header/header.php"); ?>

    <div class="abouts-form">
      <form action="#" method="post">
          <p>
             <select name="userSelect"; onChange="myNewFunction(this.selectedIndex);"  style="margin-bottom: 5px"; id="select1">
               <?php while($row = $result->fetch_assoc()){ ?>
                <option value="<?php echo $row['id']?>"><?php echo $row['firstName']; echo "   "; echo $row['lastName'] ?> </option>
               <?php } ?> </select>
             </p>
                <button name="deleteBtnTapped" class="registerbtn">წაშლა</button>
                <button name="updateBtnTapped" class="registerbtn">განახლება</button>
      </form>
    </div>


    <table class="about-table">
        <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Password</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>isAdmin</th>

        </tr>
            <?php
                $result = $con->query("SELECT * FROM users WHERE id=$_SESSION[userid]");
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


  </body>
</html>
