<?php
include("include/connection.php");

if(isset($_POST['submit_btn'])){
  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $occupation = $_POST['occupation'];

 $insert_query = "INSERT INTO `customer` (`name`, `address`, `phone`, `email`, `occupation`)
 VALUES ('$name', '$address', '$phone', '$email', '$occupation')";

 $query_run = mysqli_query($conn,$insert_query);
 if($query_run){
   $message = "customer data inserted successfully";
   header("location: customer.php");
 }else{
   $message = "customer data insert fail";
   header("location: dashboard.php");
 }
}
 ?>
