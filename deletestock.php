<?php
include("include/connection.php");



// delete stock

  $delete_id = $_POST['delete_id'];

  $query = "DELETE FROM `stock` WHERE stock_id ='$delete_id'";
  $query_run = mysqli_query($conn,$query);
  if($query_run)
  {
         $message = "Your data is deleted";
         header('location: stock.php');
}
else{
       $message = "Your data is not deleted";
       header('location: dashboard.php');
}


 ?>
