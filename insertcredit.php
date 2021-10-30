<?php
include("include/connection.php");

// add depositor into database
if(isset($_POST['submit_btn'])){

  $name = $_POST['name'];
  $item = $_POST['item'];
  $quantity = $_POST['quantity'];
  $amount = $_POST['amount'];
  $date = $_POST['date'];
  $given = $_POST['given_by'];
  $status = $_POST['status'];

  $query = "INSERT INTO `credit` (`name`, `item`, `quantity`, `amount`, `date`, `given_by`, `status`)
   VALUES ('$name', '$item', '$quantity', '$amount', '$date', '$given', '$status')";
  $query_run = mysqli_query($conn,$query);
  if($query_run){
    $message = "credit data inserted";
    header("location: credit.php");
  }else{
    $message = "error inserting data";
    header("location: credit.php");
  }
}

 ?>
