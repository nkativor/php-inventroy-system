<?php
include("include/connection.php");


  $id = $_GET['delete_id'];

  $query = "DELETE FROM `expenditure` WHERE id='$id'";
  $query_run = mysqli_query($connection,$query);
  if($query_run)
  {
         $message = "Your data is deleted";
         header('location: expenditure.php');
}
else{
       $message = "Your data is not deleted";
       header('location: dashboard.php');
}


?>
