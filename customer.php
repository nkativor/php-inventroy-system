<?php
include("include/header.php");
include("include/connection.php");
include("include/nav.php");
 ?>
<div class="container mt-3">
  <div class="row justify content-center">
    <div class="col-md-2 card-header header-elements-inline mt-2 mr-8 ">
      <button type="button" name="button" class="btn btn-primary btn-xs form-control" data-toggle="modal" data-target="#addmodal">
          Add Customer Info +
      </button>

    </div>
    <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Add Customer details</h5>
        <button type="button" name="button" class="close" data-dismiss="modal" arial-label="close">
           <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">
       <div class="modal-body">
         <div class="modal-header">

         </div>
         <form class="form-group" method="post" action="insertcustomer.php">
           <div class="form-row">
             <div class="col-md-6 mb-3">
               <label for="validationCustom01">Name</label>
               <input type="text" class="form-control" name="name" required>

             </div>

             <div class="col-md-6 mb-3">
               <label for="">Address</label>
               <input type="text" name="address" value="" class="form-control" required>
             </div>
           </div>
           <div class="form-row">
             <div class="col-md-6 mb-3">
               <label for="validationCustom03">Phone No:</label>
               <input type="text" name="phone" value="" class="form-control" required>
             </div>
             <div class="col-md-6 mb-3">
               <label for="validationCustom04">Email</label>
               <input type="text" name="email" value="" class="form-control">
             </div>
           </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom04">Occupation</label>
              <input type="text" name="occupation" value="" class="form-control">
            </div>
          </div>
           <button class="btn btn-primary" type="submit" name="submit_btn">Submit form</button>
         </form>
       </div>
     </div>

      </div>

    </div>
  </div>


</div>
  </div>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header text-center">
        <h2 style="color:black" class="bg-warning">List of Customers</h2>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Occupation</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = "SELECT * FROM `customer`";
              $query_run = mysqli_query($conn,$query);
              if(mysqli_num_rows($query_run)>0){
                while($row = mysqli_fetch_assoc($query_run)){

             ?>
            <tr>
              <td><?= $row['name'];?></td>
              <td><?= $row['address'];?></td>
              <td><?= $row['phone'];?></td>
              <td><?= $row['email'];?></td>
              <td><?= $row['occupation'];?></td>

              <td>
                <a href="editcustomer.php?edit_id=<?= $row['customer_id'];?>">
                  <i class="fas fa-edit"></i>
                </a>
              </td>

              <td>
               <a href="deletecustomer.php?delete_id=<?= $row['customer_id'];?>">
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
