<?php include("include/nav.php");
include("include/connection.php");
?>
<section class="content pt-5">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-info" style="height:200px;width:400px">

          <div class="inner">
            <?php
            include("include/connection.php");
             $query = "SELECT * FROM `customer`";
             $query_run = mysqli_query($conn,$query);
             $total = mysqli_num_rows($query_run);
             ?>
            <h3><?= number_format($total); ?></h3>

            <p>TOTAL ACTIVE CUSTOMERS</p>
          </div>
          <div class="icon">
             <i class="ion ion-person-add" style="font-size:150px"></i>
          </div>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-success" style="height:200px;width:400px">
          <div class="inner">
            <?php
              include("include/connection.php");
              $total_exp_per_day =0;
              $query="SELECT * FROM `expenditure` WHERE `date`
             >= DATE_SUB(CURDATE(), INTERVAL 1 DAY)";
              $query_run = mysqli_query($conn,$query);
              while($row=mysqli_fetch_array($query_run)){
                $quanity = $row['quantity'];
                $amount = $row['amount'];
                $total = $quanity*$amount;
                $total_exp_per_day+=$total;
              }
             ?>
            <h3>GHC<?=number_format($total_exp_per_day);?></h3>

            <p>EXPENSES</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars" style="font-size:150px"></i>
          </div>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-warning" style="height:200px;width:400px">

          <div class="inner">
            <?php
              include("include/connection.php");
              $total_sales_per_day =0;
              $query="SELECT `order_total_after_tax` FROM `invoice_order` WHERE `order_date`
             >= DATE_SUB(CURDATE(), INTERVAL 1 DAY)";
              $query_run = mysqli_query($conn,$query);
              while($row=mysqli_fetch_array($query_run)){
                $order_total_after_tax = $row['order_total_after_tax'];
                $total_sales_per_day+=$order_total_after_tax;
              }
             ?>
            <h3>GHC<?= number_format($total_sales_per_day);?></h3>

            <p>TOTAL DAILY SALES</p>
          </div>
          <div class="icon">

            <i class="ion ion-bag" style="font-size:150px"></i>
          </div>

        </div>
      </div>

      <!-- ./col -->
    </div>
    <div class="row">
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-danger" style="height:200px;width:400px">
          <div class="inner">
            <?php
            include("include/connection.php");
             $query = "SELECT * FROM `stock`";
             $query_run = mysqli_query($conn,$query);
             $total_stock = mysqli_num_rows($query_run);
             ?>
            <h3><?= number_format($total_stock);?></h3>

            <p>NUM. OF STOCK ITEMS</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-warning" style="height:200px;width:400px">
          <div class="inner">
            <?php
            include("include/connection.php");
             $query = "SELECT * FROM `deposit`";
             $query_run = mysqli_query($conn,$query);
             $total_depositors = mysqli_num_rows($query_run);
             ?>
            <h3><?= number_format($total_depositors);?></h3>

            <p>TOTAL DEPOSITORS</p>
          </div>
          <div class="icon">
             <i class="ion ion-person-add" style="font-size:150px"></i>
          </div>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-success" style="height:200px;width:400px">

          <div class="inner">
            <?php
            include("include/connection.php");
             $query = "SELECT * FROM `credit`";
             $query_run = mysqli_query($conn,$query);
             $total_creditors = mysqli_num_rows($query_run);
             ?>
            <h3><?= number_format($total_creditors);?></h3>

            <p>TOTAL CREDITORS</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add" style="font-size:150px"></i>
          </div>

        </div>
      </div>
    </div>
</div>
</section>

<?php
include("include/footer.php");
?>
