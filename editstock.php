<?php
include("include/header.php");
include("include/connection.php");
include("include/nav.php");
 ?>
 <?php

    $edit_id = $_GET['edit_id'];
    $query = "SELECT * FROM `stock` WHERE `stock`.`stock_id` = '$edit_id'";
    $query_run = mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($query_run)){
      $name = $row['item'];
      $quantity = $row['quantity'];
      $brand = $row['brand'];
      $supplier = $row['supplier'];
      $company = $row['company'];
      $date = $row['date'];
      $price = $row['unit_price'];
      $id = $row['stock_id'];
    }

  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header text-center">
             <h5 style="width:400px;margin-left:250px" class="bg-info">Edit Customer Info</h5>
          </div>
          <div class="card-body" style="margin-left:50px;">
            <form class="" action="updatestock.php" method="post">
              <div class="form-row">
                <div class="form-group">
                  <label for="">Item</label>
                  <input type="text" name="item" value="<?= $name; ?>" class="form-control" placeholder="Add item" style="width:350px">
                </div>
                <div class="form-group">
                  <label for="">Quantity</label>
                  <input type="number" name="quantity" value="<?= $quantity; ?>" class="form-control" placeholder="Add Quantity" style="width:350px">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group ">
                  <label for="">Brand</label>
                  <input type="text" name="brand" value="<?= $brand; ?>" class="form-control" placeholder="Add Brand" required style="width:350px">
                </div>
                <div class="form-group">
                  <label for="">Supplier</label>
                  <input type="text" name="supplier" value="<?= $supplier; ?>" class="form-control" placeholder="Add Suppplier" required style="width:350px">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="">Company</label>
                  <input type="text" name="company" value="<?= $company; ?>" class="form-control" placeholder="Add Company Name" required style="width:350px">
                </div>
                <div class="form-group">
                  <label for="">Date</label>
                  <?php include("include/date.php"); ?>
                  <input type="text" name="date" value="<?= $date;?>" class="form-control" required style="width:350px">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="">Unit Price</label>
                  <input type="number" name="unit_price" value="<?= $price; ?>" class="form-control" placeholder="Add Unit Price" required style="width:350px">
                </div>
              </div>
              <div class="form-row">
                <input type="hidden" name="update_id" value="<?= $id; ?>">
                <button type="submit" name="update_btn" class="btn btn-info">Update Button</button>
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
