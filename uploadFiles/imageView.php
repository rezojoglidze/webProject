<?php

include("uploadImage/config.php");

// Get image data from database
$result = $con->query("SELECT image FROM images");
?>




<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 40px auto;
   	border: 3px solid #cbcbcb;
    box-shadow: rgba(0, 0, 0, 0.75) 5px 5px 5px 0px;
   }

   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	height: 100px;
   }
</style>
</head>
<body>
<div id="content">
  <?php if($result->num_rows > 0){ ?>
  <div class="gallery" style= "width: 50%; margin: 20px auto; border: 1px solid #cbcbcb;">
      <?php while($row = $result->fetch_assoc()){ ?>
           <div id='img_div'>
        	 <img src="data:image/jpg charset=utf8; base64,<?php echo base64_encode($row['image']) ?>" />
              	 <p> here is a text </p>
          </div>
      <?php } ?>
  </div>
  <?php }else{ ?>
  <p class="status error">Image(s) not found...</p>
  <?php } ?>


  <form method="POST" action="upload.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea
      	id="text"
      	cols="40"
      	rows="4"
      	name="image_text"
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="submit">POST</button>
  	</div>
  </form>
</div>
</body>
</html>