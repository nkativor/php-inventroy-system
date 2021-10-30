<?php
include("include/connection.php");

if(isset($_POST['update_btn'])){
  $update_id = $_POST['update_id'];
  $name = $_POST['name'];
  $item = $_POST['item'];
  $quantity = $_POST['quantity'];
  $amount = $_POST['amount'];
  $date = $_POST['date'];
  $status = $_POST['status'];

  $update = "UPDATE `deposit` SET `name` = '$name', `item` = '$item', `quantity` = '$quantity', `amount` = '$amount',
   `date` = '$date', `status` = '$status' WHERE `deposit`.`deposit_id` = '$update_id'";
  $query_run = mysqli_query($conn,$update);
  if($query_run){
    $message = "depositor updated";
    header("location: deposit.php");
  }else{
    $message = "error updating depositor";
    header("location: editdeposit.php");
  }
}
 ?>
