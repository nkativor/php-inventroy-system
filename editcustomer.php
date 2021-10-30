<?php
include("include/header.php");
include("include/connection.php");
include("include/nav.php");
 ?>
 <?php

    $edit_id = $_GET['edit_id'];
    $query = "SELECT * FROM `customer` WHERE `customer`.`customer_id` = '$edit_id'";
    $query_run = mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($query_run)){
      $name = $row['name'];
      $address = $row['address'];
      $phone = $row['phone'];
      $email = $row['email'];
      $occupation = $row['occupation'];
      $id = $row['customer_id'];
    }

  ?>
 <div class="container">
   <div class="row">
     <div class="col-md-10">
       <div class="card" style="margin-left:100px;">
         <div class="card-header text-center bg-warning">
            <h5 style="color:purple;width:300px;margin-left:300px">Edit Customer Info</h5>
         </div>
         <div class="card-body">
           <form class="form-group" method="post" action="updatecustomer.php">
             <div class="form-row">
               <div class="col-md-6 mb-3">
                 <label for="validationCustom01">Name</label>
                 <input type="text" class="form-control" name="name" value="<?= $name;?>" required >

               </div>

               <div class="col-md-6 mb-3">
                 <label for="">Address</label>
                 <input type="text" name="address" value="<?= $address;?>" class="form-control" required>
               </div>
             </div>
             <div class="form-row">
               <div class="col-md-6 mb-3">
                 <label for="validationCustom03">Phone No:</label>
                 <input type="text" name="phone" value="<?= $phone;?>" class="form-control" required>
               </div>
               <div class="col-md-6 mb-3">
                 <label for="validationCustom04">Email</label>
                 <input type="text" name="email" value="<?= $email;?>" class="form-control">
               </div>
             </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom04">Occupation</label>
                <input type="text" name="occupation" value="<?= $occupation;?>" class="form-control">
              </div>
            </div>
            <input type="hidden" name="update_id" value="<?= $id;?>">
             <button class="btn btn-secondary" type="submit" name="update_btn" style="margin-left:200px;width:250px">Update form</button>
           </form>
         </div>
       </div>
     </div>

   </div>
 </div>
<?php
include("include/footer.php");
 ?>
