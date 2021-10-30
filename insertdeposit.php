<?php
include("include/connection.php");

// add depositor into database
if(isset($_POST['submit_btn'])){

  $name = $_POST['name'];
  $item = $_POST['item'];
  $quantity = $_POST['quantity'];
  $amount = $_POST['amount'];
  $date = $_POST['date'];
  $status = $_POST['status'];

  $query ="INSERT INTO `deposit` (`name`, `item`, `quantity`, `amount`, `date`, `status`) VALUES
  ('$name', '$item', '$quantity', '$amount', '$date','$status')";
  $query_run = mysqli_query($conn,$query);
  if($query_run){
    $message = "depositor data inserted";
    header("location: deposit.php");
  }else{
    $message = "error inserting data";
    header("location: deposit.php");
  }
}

 ?>
