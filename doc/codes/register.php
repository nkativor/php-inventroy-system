<?php
include("include/connection.php");
session_start();
if(isset($_POST['sign_in']));
{
  $name = $_POST['name'];
  $password = $_POST['password'];


    // code...
    $query = "INSERT into admin(name,password)VALUES('$name','$password')";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      $_SESSION['success'] = "Admin profile added";
      header('location:dashboard.php');
    }else {
      $_SESSION['status'] = "Admin profile not added";
      header('location:signin.php');
    }
  }


 ?>
