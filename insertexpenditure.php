<?php
include("include/connection.php");
if(isset($_POST['submit_btn'])){

  $item= $_POST['item'];
  $quantity = $_POST['quantity'];
  $amount= $_POST['amount'];
  $purchasedb= $_POST['purchasedb'];
  $purchasedf= $_POST['purchasedf'];
  $date= $_POST['date'];

  $query = "INSERT INTO `expenditure`(`item`,`quantity`,`amount`,`purchasedb`,`purchasedf`,`date`)
  VALUES('$item','$quantity','$amount','$purchasedb','$purchasedf','$date')";
  $query_run = mysqli_query($conn,$query);
  if($query_run ){
    $message = "Values added";
    header('location: expenditure.php');
  }else{
    $message = "Values not added";
    header('location: dashboard.php');
  }


}

 ?>
