<?php
include("include/connection.php");

if(isset($_POST['update_btn'])){
  $update_id = $_POST['update_id'];
  $name = $_POST['name'];
  $item = $_POST['item'];
  $quantity = $_POST['quantity'];
  $amount = $_POST['amount'];
  $date = $_POST['date'];
  $given = $_POST['given_by'];
  $status = $_POST['status'];

  $update = "UPDATE `credit` SET `name` = '$name', `item` = '$item', `quantity` = '$quantity', `amount` = '$amount',
   `date` = '$date', `given_by`='$given',`status` = '$status' WHERE `credit`.`id` = '$update_id'";
  $query_run = mysqli_query($conn,$update);
  if($query_run){
    $message = "Creditor updated";
    header("location: credit.php");
  }else{
    $message = "error updating Creditor";
    header("location: editcredit.php");
  }
}
 ?>
