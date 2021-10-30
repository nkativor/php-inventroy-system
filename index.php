<?php
session_start();
include('include/header.php');
$loginError = '';
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	include 'Invoice.php';
	$invoice = new Invoice();
	$user = $invoice->loginUsers($_POST['email'], $_POST['pwd']);
	if(!empty($user)) {
		$_SESSION['user'] = $user[0]['first_name']."".$user[0]['last_name'];
		$_SESSION['userid'] = $user[0]['id'];
		$_SESSION['email'] = $user[0]['email'];
		$_SESSION['address'] = $user[0]['address'];
		$_SESSION['mobile'] = $user[0]['mobile'];
		header("Location:trial.php");
	} else {
		$loginError = "Invalid email or password!";
	}
}
?>
<div class="row">
	<div class="card  mt-5" style="margin-left:400px;" >
    <div class="card-body-image" style="width:600px;height:500px;padding:100px;background-color:grey;">
      <div class="login-form mt-3">
        <h4 class="">Inventory User Login:</h4>
        <form method="post" action="">
          <div class="form-group">
          <?php if ($loginError ) { ?>
            <div class="alert alert-warning"><?php echo $loginError; ?></div>
          <?php } ?>
          </div>
          <div class="form-group">
            <input name="email" id="email" type="email" class="form-control" placeholder="Email address" autofocus="" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="pwd" placeholder="Password" required>
          </div>
          <div class="form-group">
            <button type="submit" name="login" class="btn btn-info">Login</button>
          </div>
        </form>
        <br>
        <p><b>Email</b> : admin@nelly.com<br><b>Password</b> : 12345</p>
      </div>
    </div>
  </div>

</div>
</div>
