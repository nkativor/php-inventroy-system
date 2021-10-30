<?php
include("include/header.php");
include("include/connection.php");
include("include/nav.php");
 ?>
<div class="container mt-3">
  <div class="row">
    <div class="col-md-3 card-header header-elements-inline mt-2 mr-8 ">
      <button type="button" name="button" class="btn btn-warning btn-xs form-control" data-toggle="modal" data-target="#studentaddmodal">
          Add Stock Data +
      </button>

    </div>
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Add Stock Items</h5>
        <button type="button" name="button" class="close" data-dismiss="modal" arial-label="close">
           <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">
       <form class="" action="insertstock.php" method="post">
         <div class="form-row">
           <div class="form-group col-md-6">
             <label for="">Item</label>
             <input type="text" name="item" value="" class="form-control" placeholder="Add item" st required>
           </div>
           <div class="form-group col-md-6">
             <label for="">Quantity</label>
             <input type="number" name="quantity" value="" class="form-control" placeholder="Add Quantity"  required>
           </div>
         </div>
         <div class="form-row">
           <div class="form-group col-md-6 ">
             <label for="">Brand</label>
             <input type="text" name="brand" value="" class="form-control" placeholder="Add Brand" required>
           </div>
           <div class="form-group col-md-6">
             <label for="">Supplier</label>
             <input type="text" name="supplier" value="" class="form-control" placeholder="Add Suppplier" required>
           </div>
         </div>
         <div class="form-row">
           <div class="form-group col-md-6">
             <label for="">Company</label>
             <input type="text" name="company" value="" class="form-control" placeholder="Add Company Name" required>
           </div>
           <div class="form-group col-md-6">
             <label for="">Date</label>
             <?php include("include/date.php"); ?>
             <input type="text" name="date" value="<?= $d;?>" class="form-control"  required>
           </div>
         </div>
         <div class="form">
           <div class="form-group">
             <label for="">Unit Price</label>
             <input type="number" name="unit_price" value="" class="form-control" placeholder="Add Unit Price" required>
           </div>
         </div>
         <div class="form">
           <button type="submit" name="submit_btn" class="btn btn-info">Add Button</button>
         </div>
       </form>
     </div>

      </div>

    </div>
  </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-header text-center">
          <h2 class="bg-info">List of stock Items</h2>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Brand</th>
                <th>Supplier</th>
                <th>Company</th>
                <th>Date</th>
                <th>Unit-Price</th>
                <th>Edit</th>
                <th>Del</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $query = "SELECT * FROM `stock`";
                $query_run = mysqli_query($conn,$query);
                if(mysqli_num_rows($query_run)>0){
                  while($row = mysqli_fetch_assoc($query_run)){

               ?>
              <tr>
                <td><?= $row['item'];?></td>
                <td><?= $row['quantity'];?></td>
                <td><?= $row['brand'];?></td>
                <td><?= $row['supplier'];?></td>
                <td><?= $row['company'];?></td>
                <td><?= $row['date'];?></td>
                <td><?= $row['unit_price'];?></td>

                <td>
                  <a href="editstock.php?edit_id=<?= $row['stock_id'];?>">
                      <i class="fas fa-edit"></i>
                  </a>
                </td>
                <td>
                 <a href="deletestock.php?delete_id=<?= $row['stock_id'];?>">
                   <i class="fas fa-trash-alt" style="color:red;"></i>
                 </a>
                </td>

              </tr>
              <?php
      }}
               ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
 <?php
include("include/footer.php");
  ?>
