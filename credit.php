<?php
include("include/header.php");
include("include/connection.php");
include("include/nav.php");
 ?>
 <div class="container mt-3">
   <div class="row">
     <div class="col-md-2 card-header header-elements-inline mt-2 mr-8 ">
       <button type="button" name="button" class="btn btn-success btn-xs form-control" data-toggle="modal" data-target="#studentaddmodal">
           Add Creditors Data +
       </button>

     </div>
     <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="ModalLabel">Add Credit</h5>
         <button type="button" name="button" class="close" data-dismiss="modal" arial-label="close">
            <span aria-hidden="true">&times;</span>
         </button>
       </div>
      <div class="modal-body">
      <form class="form-group" method="post" action="insertcredit.php">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="">Name of Creditor </label> <br>
            <input type="text" name="name" value="" value="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="">Item </label><br>
            <input type="text" name="item" value="" value="form-control">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="">Quantity </label><br>
            <input type="text" name="quantity" value="" value="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="">Amount</label><br>
            <input type="text" name="amount" value="" value="form-control">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="">Date</label><br>
            <?php include('include/date.php');?>
            <input type="text" name="date" value="<?= $d; ?>" value="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="">Given-By </label><br>
            <input type="text" name="given_by" value="" value="form-control">
          </div>
        </div>

        <div class="form-group">
          <label for="">Status</label><br>
          <input type="text" name="status" value="" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" name="submit_btn" class="btn btn-info">Add Credit</button>
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
             <h2 class="bg-info" style="width:300px;margin-left:500px;">List of creditors</h2>
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
                 <th>Given</th>
                 <th>Status</th>
                 <th>Edit</th>
                 <th>Cancel</th>
               </tr>
             </thead>
             <tbody>
               <?php
               include("code.php");
                 $query = "SELECT * FROM `credit`";
                 $query_run = mysqli_query($conn,$query);
                 if(mysqli_num_rows($query_run)>0){
                   while($row = mysqli_fetch_assoc($query_run)){
                     $status = $row['status'];

                     if($status == 1){
                         $result = '<button type="button" name="button" class="btn btn-primary btn-xs form-control">
                              Debtor
                          </button>';
                     }elseif($status == 0)
                     {
                         $result = '<button type="button" name="button" class="btn btn-warning btn-xs form-control">
                              Debt cleard
                          </button>';
                     }
                ?>
               <tr>
                 <td><?= $row['name'];?></td>
                 <td><?= $row['item'];?></td>
                 <td><?= $row['quantity'];?></td>
                 <td>GH<?= $row['amount'];?></td>
                 <td><?= $row['date'];?></td>
                 <td><?= $row['given_by'];?></td>
                 <td><?= $result;?></td>
                 <td>
                   <a href="editcredit.php?edit_id=<?= $row['id'];?>">
                     <i class="fas fa-edit"></i>
                   </a>
                 </td>

                 <td>
                   <form class="" action="code.php" method="post">
                     <input type="hidden" name="update" value="<?= $row['id'];?>">
                     <button type="submit" name="btn" class="btn btn-secondary">Cancel Request</button>
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
