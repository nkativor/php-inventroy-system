<?php
include("include/header.php");
include("include/connection.php");
include("include/nav.php");
 ?>
 <div class="container mt-3">
   <div class="row">
     <div class="col-md-2 card-header header-elements-inline  mr-8 ">
       <button type="button" name="button" class="btn btn-warning btn-xs form-control" data-toggle="modal" data-target="#addmodal">
           Add Depositor Info +
       </button>
       <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="ModalLabel">Add Depositor details</h5>
           <button type="button" name="button" class="close" data-dismiss="modal" arial-label="close">
              <span aria-hidden="true">&times;</span>
           </button>
         </div>
        <div class="modal-body">
          <div class="modal-body">
            <div class="modal-header">

            </div>
            <form class="form-group" method="post" action="insertdeposit.php">
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationCustom01">Name of Depositor</label>
                  <input type="text" class="form-control" name="name" required>

                </div>

                <div class="col-md-6 mb-3">
                  <label for="">Item</label>
                  <input type="text" name="item" value="" class="form-control" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationCustom03">Quantity</label>
                  <input type="number" name="quantity" value="" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationCustom04">Amount</label>
                  <input type="text" name="amount" value="" class="form-control">
                </div>
              </div>
             <div class="form-row">
               <div class="col-md-6 mb-3">
                 <label for="validationCustom04">Date</label>
                 <?php include("include/date.php");?>
                 <input type="text" name="date" value="<?= $d; ?>" class="form-control">
               </div>

               <div class="col-md-6 mb-3">
                 <label for="validationCustom04">Status</label>
                 <input type="number" name="status" value="" class="form-control">
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
 </div>
 <div class="col-md-12">
   <div class="card">
     <div class="card-header text-center">
       <h2 style="color:black" class="bg-info">List of Depositors</h2>
     </div>
     <div class="card-body">
       <table class="table table-bordered table-striped">
         <thead>
           <tr>
             <th>Name</th>
             <th>Item</th>
             <th>Quantity</th>
             <th>Amount</th>
             <th>Date</th>
             <th>Status</th>
             <th>Edit</th>
             <th>Cancel request</th>
           </tr>
         </thead>
         <tbody>
           <?php
           include("code.php");
             $query = "SELECT * FROM `deposit`";
             $query_run = mysqli_query($conn,$query);
             if(mysqli_num_rows($query_run)>0){
               while($row = mysqli_fetch_assoc($query_run)){
                 $status = $row['status'];

                 if($status == 1){
                     $result = '<button type="button" name="button" class="btn btn-primary btn-xs form-control">
                          Pending
                      </button>';
                 }elseif($status == 0)
                 {
                     $result = '<button type="button" name="button" class="btn btn-warning btn-xs form-control">
                          Confirmed
                      </button>';
                 }
            ?>
           <tr>
             <td><?= $row['name'];?></td>
             <td><?= $row['item'];?></td>
             <td><?= $row['quantity'];?></td>
             <td>GH<?= $row['amount'];?></td>
             <td><?= $row['date'];?></td>
             <td><?= $result;?></td>

             <td>
               <a href="editdeposit.php?edit_id=<?= $row['deposit_id'];?>">
                 <i class="fas fa-edit"></i>
               </a>
             </td>

             <td>
               <form class="" action="code.php" method="post">
                 <input type="hidden" name="update_id" value="<?= $row['deposit_id'];?>">
                 <button type="submit" name="request_btn" class="btn btn-secondary">Cancel Request</button>
               </form>
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
