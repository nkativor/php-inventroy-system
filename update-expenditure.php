<?php
include("include/connection.php");
if(isset($_POST['update_btn']))
{
    $item= $_POST['item'];
    $quantity = $_POST['quantity'];
    $amount= $_POST['amount'];
    $purchasedb= $_POST['purchasedb'];
    $purchasedf= $_POST['purchasedf'];
    $date= $_POST['date'];
    $id = $_POST['update'];

  $query = "UPDATE expenditure SET item = '$item', quantity= '$quantity', amount = '$amount', purchasedb = '$purchasedb',
   purchasedf = '$purchasedf',`date` = '$date' WHERE id = '$id'";
  $query_run = mysqli_query($conn,$query);
  if($query_run)
  {
         $message = "values updated";
         header('location: expenditure.php');
}
else{
       $message = "values not updated";
       header('location: editexpenditure.php');
}

}
?>
