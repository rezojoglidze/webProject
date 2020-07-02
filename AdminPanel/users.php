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

    <p>
        <select style="margin-bottom: 5px"; id="select1">
        <?php while($row = $result->fetch_assoc()){ ?>
        <option value="<?php echo $row['id'] ?>"><?php echo $row['firstName']; echo "   "; echo $row['lastName'] ?> </option>
        <?php } ?> </select>
     </p>

    <p style="margin-bottom: 5px";> The value of the option selected is: <span class="output"></span> </p>
    <button onclick="getOption()"> Check option </button>
    <button onclick="getOption()"> Check option </button>
  </div>

  <form class="gallery-form" method="POST" action="" enctype="multipart/form-data">
  		<button type="submit" name="submit">POST</button>
  </form>
</div>

    <script type="text/javascript">
        function getOption() {
            selectElement = document.querySelector('#select1');
            output = selectElement.value;
            document.querySelector('.output').textContent = output;
        }
    </script>
</body>
</html>