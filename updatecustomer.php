<?php
include("include/connection.php");
if(isset($_POST['update_btn'])){
  $update_id = $_POST['update_id'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $occupation = $_POST['occupation'];

  $update = "UPDATE `customer` SET `name` = '$name', `address` = '$address', `phone` = '$phone', `email` = '$email',
  `occupation` = '$occupation'
  WHERE `customer`.`customer_id` = '$update_id'";
  $update_query = mysqli_query($conn,$update);
  if($update_query){
    $message = "customer data updated successfully";
    header("location: customer.php");
  }else{
    $message = "update failed";
    header("location: editcustomer.php");
  }
}
 ?>
