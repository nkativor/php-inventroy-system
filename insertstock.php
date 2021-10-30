<?php
include("include/connection.php");
//insert stock into database
if(isset($_POST['submit_btn'])){

  $item = $_POST['item'];
  $qty = $_POST['quantity'];
  $brand = $_POST['brand'];
  $supplier = $_POST['supplier'];
  $company = $_POST['company'];
  $date = $_POST['date'];
  $unit_price = $_POST['unit_price'];

  $insert = "INSERT INTO `stock` (`item`, `quantity`, `brand`, `supplier`, `company`, `date`, `unit_price`)
  VALUES ('$item', '$qty', '$brand', '$supplier', '$company', '$date', '$unit_price')";
  $query_run = mysqli_query($conn,$insert);
  if($query_run){
    $message = "stock added";
    header('location: stock.php');
  }else{
    $message = "error adding stock";
    header('location: dashboard.php');
  }
}
 ?>
