<?php
    session_start()
?>
<?php
    include("../database/configDatabase.php");
    $result = $con->query("SELECT * FROM registration");
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
     <h1>
        <p>იუზერები</p>
     </h1>
 </header>

<div id="gallery-content">
  <?php if($result->num_rows > 0){ ?>
  <div class="gallery" style= "width: 50%; margin: 20px auto; border: 1px solid #cbcbcb;">
      <?php while($row = $result->fetch_assoc()){ ?>
           <div id='gallery-img_div'>
             	 <p> <?php echo $row['firstName']; echo "   "; echo $row['lastName'] ?> </p>
          </div>
      <?php } ?>
  </div>
  <?php }else{ ?>
  <p class="status error">Image(s) not found...</p>
  <?php } ?>


  <form class="gallery-form" method="POST" action="" enctype="multipart/form-data">
  	<div class="gallery-form-div">
  		<button type="submit" name="submit">POST</button>
  	</div>
  </form>
</div>
</body>
</html>