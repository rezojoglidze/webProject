<?php
    session_start();
    include("../database/configDatabase.php");
    $result = $con->query("SELECT * FROM users");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css" />
    <title>გალერეა</title>
    <meta name="author" content="რეზო ჯოგლიძე">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
 <header class="header">
     <h1> <p>იუზერები</p> </h1>
 </header>

<div id="gallery-content">
  <div class="gallery">

      <form action="delete.php" method="post">
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
</div>


<p class="users-p"> ყველა იუზერი </p>
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
            $conn = mysqli_connect("localhost", "root", "", "webProject");
            // Check connection
              if ($con->connect_error) {
              die("Connection failed: " . $conn->connect_error);
              }
                  $result = $con->query("SELECT * FROM users");

                if ($result->num_rows > 0) {

                 // output data of each row
                      while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["email"] . "</td><td>"
                . $row["password"]. "</td><td>" . $row["firstName"]. "</td><td>" . $row["lastName"]. "</td><td>" . $row["isAdmin"]. "</td></tr>";
                }
                echo "</table>";
              } else { echo "0 results"; }
            $conn->close();
           ?>
    </table>


           <!-- /* get userid from choosen user */ -->
           <?php
             if(isset($_POST['deleteBtnTapped'])){
             echo "shignit";
             $selected_val = $_POST['userSelect'];
             echo $selected_val;
             $_SESSION['selecteduserid'] = $_POST['userSelect'];
             echo $_SESSION['selecteduserid'];
             }
             ?>

    <script type="text/javascript">

         function getUserDetails() {
            selectElement = document.querySelector('#select1');
            output = selectElement.value;
            fullName = document.getElementById("select1");
            document.querySelector('.id').textContent = output;
            document.querySelector('.fullName').textContent = fullName.options[fullName.selectedIndex].text;
        }
    </script>
</body>
</html>