<?php
include("include/connection.php");
//delete customer details

  $delete_id = $_GET['delete_id'];

  $delete_cust = "DELETE FROM `customer` WHERE `customer_id` ='$delete_id'";
  $query_delete = mysqli_query($conn,$delete_cust);
  if($query_delete)
  {
         $message = "Your data is deleted";
         header('location: customer.php');
}
else{
       $message = "Your data is not deleted";
       header('location: index.php');
}


 ?>
