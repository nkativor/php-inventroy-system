<?php
include("include/header.php");
include("include/nav.php");
include("include/date.php");
 ?>
  <div class="container mt-3">
    <div class="row">

    <div class="col-md-2 card-header header-elements-inline mt-2 mr-8 ">
      <button type="button" name="button" class="btn btn-primary btn-xs form-control" data-toggle="modal" data-target="#studentaddmodal">
          Add Expenditure Data +
      </button>

    </div>
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Add Expenditure</h5>
        <button type="button" name="button" class="close" data-dismiss="modal" arial-label="close">
           <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">
       <form action="insertexpenditure.php" method="post">
     <div class="form-row">
       <div class="form-group col-md-6">
         <label for="inputEmail4">Item</label>
         <input type="text" class="form-control" name="item">
       </div>
       <div class="form-group col-md-6">
         <label for="inputPassword4">Quantity</label>
         <input type="text" class="form-control" name="quantity">
       </div>
     </div>
     <div class="form-group">
       <label for="inputAddress">Amount</label>
       <input type="text" class="form-control" name="amount" placeholder=" Amount">
     </div>
     <div class="form-group">
       <label for="inputAddress2">Purchased By</label>
       <input type="text" class="form-control" name="purchasedb">
     </div>
     <div class="row">
       <div class="form-group col-md-6">
         <label for="inputCity">Purchased From</label>
         <input type="text" class="form-control" name="purchasedf">
       </div>

       <div class="form-group col-md-4">
         <label for="inputState">Date</label>
         <input type="text" class="form-control" name="date" value="<?=$d;?>">
       </div>
     </div>

     <button type="submit" class="btn btn-secondary" name="submit_btn">Add details</button>
     </form>
     </div>

      </div>

    </div>
  </div>


</div>

</div>
<div class="card my-3 col-md-12 mx-4">
            <div class="card-header header-elements-inline mt-4">
                <h2 class="card-header text-center"> List Of All Expenditure</h2>
            </div>
<div class="card-body">
  <table class="table table-bordered table-striped" >
      <thead>
          <tr>
              <th class="text-center">ITEM</th>
              <th class="text-center">QUANTITY.</th>
              <th class="text-center">AMOUNT</th>
              <th class="text-center">PURCHASED BY</th>
              <th class="text-center">PURCHASED FROM:</th>
              <th class="text-center">DATE</th>
              <th class="text-center">EDIT</th>
              <th class="text-center">DELETE</th>
          </tr>
      </thead>
      <?php
       include("include/connection.php");
       $query = "SELECT *FROM `expenditure` ORDER BY item DESC";
       $query_run= mysqli_query($conn,$query);

       ?>
      <tbody>
        <?php
        $total = 0;
         if (mysqli_num_rows($query_run)>0)
          {
          while( $row=mysqli_fetch_assoc($query_run)) {
            $amount = $row['amount'];
            $total+=$amount;
           ?>

           <tr>
             <td> <?php echo $row['item']; ?></td>
             <td> <?php echo $row['quantity']; ?></td>
             <td> <?php echo $row['amount']; ?></td>
             <td> <?php echo $row['purchasedb']; ?></td>
             <td> <?php echo $row['purchasedf']; ?></td>
             <td> <?php echo $row['date']; ?></td>

            <td>
              <a href="editexpenditure.php?edit=<?= $row['id'];?>">
                <i class="fas fa-edit"></i>
              </a>
            </td>

             <td>
              <a href="delete-expenditure.php?delete_id=<?= $row['id'];?>">
                <i class="fas fa-trash-alt" style="color:red;"></i>
              </a>
             </td>

           </tr>
           <?php
          }
}

        ?>

      </tbody>
  </table>
</div>


            <div class="mx-10">
                <h6 >TOTAL AMOUNT: GHC <?= number_format($total,2) ?></h6>
            </div>

        </div>


</div>
