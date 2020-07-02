<?php
// Include the database configuration file
include("../database/configDatabase.php");
session_start();


// If file upload form is submitted
$status = $statusMsg = '';
if(isset($_POST["submit"])){
    $status = 'error';
    if(!empty($_FILES["image"]["name"])) {
        // Get file info
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)){
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            $image_text = $_POST['image_text'];


            // Insert image content into database
            $insert = $con->query("INSERT into images (image, image_text) VALUES ('$imgContent', '$image_text')");

            if($insert){
                $status = 'success';
                $statusMsg = "File uploaded successfully.";
                header("Location: http://localhost:8080/webProject/uploadFiles/imageView.php");

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

// Display status message
echo $statusMsg;
?>