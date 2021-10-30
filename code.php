<?php
include("include/connection.php");


//handling request
if(isset($_POST['request_btn'])){
  $id = $_POST['update_id'];
  $query = "UPDATE `deposit` SET `status`=0 WHERE `deposit`.`deposit_id`='$id'";
  $query_run = mysqli_query($conn,$query);
  if($query_run){
    $message = "request cancelled successfully";
    header("location: deposit.php");
  }else{
    $message = "request failed";
    header("location: deposit.php");
  }
}
//handling credit request
if(isset($_POST['btn'])){
  $id = $_POST['update'];
  $update = "UPDATE `credit` SET `status`=0 WHERE `credit`.`id`='$id'";
  $query_update = mysqli_query($conn,$update);
  if($query_update){
    $message = "request cancelled successfully";
    header("location: credit.php");
  }else{
    $message = "request failed";
    header("location: credit.php");
  }
}

 ?>
