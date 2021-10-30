<?php
include("include/header.php");
include("include/connection.php");
include("include/nav.php");
 ?>
 <?php

    $edit_id = $_GET['edit_id'];
    $query = "SELECT * FROM `deposit` WHERE `deposit`.`deposit_id` = '$edit_id'";
    $query_run = mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($query_run)){
      $name = $row['name'];
      $item = $row['item'];
      $quantity = $row['quantity'];
      $amount = $row['amount'];
      $date = $row['date'];
      $status = $row['status'];
      $id = $row['deposit_id'];
    }

  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header text-center">
             <h5 style="background-color:orange;color:#fff;width:300px;margin-left:300px" >Edit Depositor Info</h5>
          </div>
          <div class="card-body" style="margin-left:50px;">
            <form class="" action="updatedeposit.php" method="post">
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationCustom01">Name of Depositor</label>
                  <input type="text" class="form-control" value="<?= $name; ?>" name="name" required>

                </div>

                <div class="col-md-6 mb-3">
                  <label for="">Item</label>
                  <input type="text" name="item" value="<?= $item; ?>" class="form-control" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationCustom03">Quantity</label>
                  <input type="number" name="quantity" value="<?= $quantity; ?>" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationCustom04">Amount</label>
                  <input type="text" name="amount" value="<?= $amount; ?>" class="form-control">
                </div>
              </div>
             <div class="form-row">
               <div class="col-md-6 mb-3">
                 <label for="validationCustom04">Date</label>
                 <?php include("include/date.php");?>
                 <input type="text" name="date" value="<?= $date; ?>" class="form-control">
               </div>

               <div class="col-md-6 mb-3">
                 <label for="validationCustom04">Status</label>
                 <input type="number" name="status" value="<?= $status; ?>" class="form-control">
               </div>
             </div>
             <div class="">
               <input type="hidden" name="update_id" value="<?= $id; ?>">
                <button class="btn btn-primary" type="submit" name="update_btn">Update form</button>
             </div>

            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <?php
 include("include/footer.php");
   ?>
