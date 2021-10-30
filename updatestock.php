<?php
include("include/connection.php");

//update stock
if(isset($_POST['update_btn'])){
  $update_id = $_POST['update_id'];
  $item = $_POST['item'];
  $qty = $_POST['quantity'];
  $brand = $_POST['brand'];
  $supplier = $_POST['supplier'];
  $company = $_POST['company'];
  $date = $_POST['date'];
  $unit_price = $_POST['unit_price'];

  $update = "UPDATE `stock` SET `item` = '$item', `quantity` = '$qty', `brand` = '$brand', `supplier` = '$supplier',
   `company` = '$company', `date` = '$date', `unit_price` = '$unit_price' WHERE `stock`.`stock_id` = '$update_id'";
  $query_run = mysqli_query($conn,$update);
  if($query_run){
    $message = "stock updated";
    header("location: stock.php");
  }else{
    $message = "error updating stock";
    header("location: editstock.php");
  }
}
 ?>
