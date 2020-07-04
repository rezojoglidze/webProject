<?php
// Include the database configuration file
include("../database/configDatabase.php");
session_start();
   if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
          echo " session  is available, Welcome $_SESSION[userid] ";
          } else {
          echo " No Session , Please Login ";
          exit;
      }


// If file upload form is submitted
    $status = $statusMsg = '';
    if(isset($_POST["submit"])){
       $status = 'error';
       if(!empty($_FILES["image"]["name"])) {
            $fileName = basename($_FILES["image"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            $allowTypes = array('jpg','png','jpeg','gif');
            if(in_array($fileType, $allowTypes)){

            $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
            $imgContent = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_text = $_POST['image_text'];

            $id =rand();
            $sql = "INSERT INTO `images` (`id`,`uid`, `image`, `image_text`) VALUES ('$id','$_SESSION[userid]', '{$image}', '{$image_text}')";
            if (mysqli_query($con,$sql)) { // Error handling
                  header("Location: http://localhost:8080/webProject/gallery.php");
            }else{
                    $statusMsg = "File upload failed, please try again.";
                }
            }else{
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            }
         }else{
            $statusMsg = 'Please select an image file to upload.';
     }
}

echo $statusMsg;
?>