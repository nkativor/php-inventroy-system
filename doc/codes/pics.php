<?php
if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  $filename = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp-name'];
  $filesize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.',$filename);
  $fileActualExt = strtolower(end($fileExt));
  $allowed = array('jpeg','jpg','svg','png');
  if (in_array($fileActualExt,$allowed)) {
    if ($fileError===0) {
      if ($filesize<100000) {
        $fileNameNew = uniqid('',true).".".$fileActualExt;
        $fileDestination = "upload/".$fileNameNew;
        move_uploaded_file($fileTmpName,$fileDestination);
        header("location: index.php");
      }else{
        echo "your file is too big";
      }else{
        echo "There was an error uploading image";
      }
    }else{
      echo "There was an error uploading file";
    }
  }

}


 ?>
