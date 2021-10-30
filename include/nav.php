<?php
ob_start();
session_start();
include("include/header.php");
include("include/connection.php");
if(!isset($_SESSION['email'])){
  header("location:index.php");
}
 ?>

 <nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-fixed-top">
  <a class="navbar-brand" href="#">INVENTORY SYSTEM

  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

  </div>
  <ul class="navbar-right mr-3">
<img src="images/ele.jpg" alt="" style="width:150px;height:70px">
</ul>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
  <a class="navbar-brand" href="trial.php">DASHBOARD
  <i class="fas fa-home" style="font-size:20px;"></i>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" style="margin-left:700px">
    <ul class="navbar-nav" style="padding-right:100px">
      <li class="nav-item active">

        <a class="nav-link" href="create_invoice.php">INVOICE <span class="sr-only">(current)</span>
           <i class="fas fa-cart-plus" style="font-size:20px;"></i>
        </a>

      </li>
      <li class="nav-item active">

        <a class="nav-link " href="stock.php">STOCK
         <i class="fas fa-layer-group" style="font-size:20px;"></i>
        </a>
      </li>
      <li class="nav-item active">

        <a class="nav-link" href="credit.php">CREDIT
      <i class="far fa-credit-card" style="font-size:20px;"></i>
        </a>
      </li>
      <li class="nav-item active">

        <a class="nav-link" href="deposit.php">DEPOSIT
          <i class="fas fa-piggy-bank" style="font-size:20px;"></i>
        </a>
      </li>
      <li class="nav-item active">

        <a class="nav-link " href="expenditure.php">EXPENDITURE
         <i class="fab fa-stack-exchange" style="font-size:20px;"></i>
        </a>
      </li>
      <li class="nav-item active">

        <a class="nav-link " href="customer.php">CUSTOMER
        <i class="fas fa-fire" style="font-size:20px;"></i>
        </a>
      </li>
      <li class="nav-item active">

        <a class="nav-link " href="logout.php">LOGOUT
         <i class="fas fa-sign-out-alt" style="font-size:20px;"></i>
        </a>
      </li>
    </ul>
  </div>
</nav>
<?php
ob_end_flush();
 ?>
