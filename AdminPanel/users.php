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
  <div class="gallery" style= "width: 80%; margin: 20px auto; border: 1px solid #cbcbcb; padding: 50px">

 <form>
     <button style="border-radius: 25px" onclick="getUserDetails()" class="registerbtn">იუზერის დეტალები</button>
</form>

      <form action="delete.php" method="post">
      <p>
         <select name="userSelect"; onChange="myNewFunction(this.selectedIndex);"  style="margin-bottom: 5px"; id="select1">
           <?php while($row = $result->fetch_assoc()){ ?>
            <option value="<?php echo $row['id']?>"><?php echo $row['firstName']; echo "   "; echo $row['lastName'] ?> </option>
           <?php } ?> </select>
         </p>
               <p style="margin-bottom: 5px";> მომხარებლის id: <span class="id"></span> </p>
               <p style="margin-bottom: 5px";> სახელი და გვარი: <span class="fullName"></span> </p>
            <button style="border-radius: 25px" name="deleteBtnTapped" class="registerbtn">წაშლა</button>
            <button style="border-radius: 25px" name="updateBtnTapped" class="registerbtn">განახლება</button>
       </form>
   </div>
</div>

           <!-- /* get userid from choosen user */ -->
           <?php
             if(isset($_POST['deleteBtnTapped'])){
             $selected_val = $_POST['userSelect'];
             echo "You have selected : $selected_val";
             $_SESSION['selectedid'] = $_POST['userSelect'];
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