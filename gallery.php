<?php
    session_start();
include("database/configDatabase.php");
    if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
          echo " session  is available, Welcome $_SESSION[userid] ";
          } else {
          echo "ფოტოების სანახავად გაიარეთ ავტორიზაცია ან რეგისტრაცია";
          exit;
      }
    $result = $con->query("SELECT * FROM images WHERE uid=$_SESSION[userid]");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" />
    <title>გალერეა</title>
    <meta name="author" content="რეზო ჯოგლიძე">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>

<?php include("header/header.php"); ?>

<div id="gallery-content">
  <?php if($result->num_rows > 0){ ?>
  <div class="gallery" style= "width: 50%; margin: 20px auto; border: 1px solid #cbcbcb;">

      <?php while($row = $result->fetch_assoc()){ ?>
           <div id='gallery-img_div'>
        	 <img class="gallery-img" src="data:image/jpg charset=utf8; base64,<?php echo base64_encode($row['image']) ?>" />
              	 <p> <?php echo $row['image_text']?>  </p>
          </div>
      <?php } ?>
  </div>
  <?php }else{ ?>
  <p class="status error">Image(s) not found...</p>
  <?php } ?>


  <form class="gallery-form" method="POST" action="uploadFiles/upload.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div class="gallery-form-div">
  	  <input type="file" name="image">
  	</div>
  	<div class="gallery-form-div">
      <textarea id="text" cols="40" rows="4" name="image_text" placeholder="Say something about this image..."></textarea>
  	</div>
  	<div class="gallery-form-div">
  		<button type="submit" name="submit">POST</button>
  	</div>
  	 </form>
  </div>
</body>
</html>