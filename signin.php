<?php
include("include/connection.php");
session_start();
if(isset($_POST['login_btn']))
{
    $email= $_POST['email'];
    $password= $_POST['password'];

    $query = "SELECT *FROM `user` WHERE `email`='$email' AND `password`='$password'";
    $query_run = mysqli_query($conn,$query);
    if (mysqli_num_rows($query_run)>0) {

      while($row=mysqli_fetch_assoc($query_run)) {
        $_SESSION['email'] = $row['email'];
        header('location: dashboard.php');
      }
    }else {
      echo "<div class='alert alert-danger'>Invalid email or password</div>";
    }
  }


 ?>
