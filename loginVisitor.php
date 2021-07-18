<?php
session_start();
?>
<!DOCTYPE html>
<?php require_once("connection.php"); ?>
<html lang="en">
<head>
     <?php include 'link.php' ?>
     <link rel="stylesheet" href="css/loginn.css">
    <title>Login In Visitor</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div class="login_form">
 	<form action="login_process.php" method="POST">
  <div class="form-group">
      <h3 class=" text-info text-center font-weight-bold my-3">Login In(Visitors)</h3> <br>
      <h4 class=" text-info text-center font-weight-bold my-1">Welcome,to Blood Bank</h4> <br>
<?php 
if(isset($_GET['loginerror'])) {
	$loginerror=$_GET['loginerror'];
}
 if(!empty($loginerror)){  echo '<p class="errmsg">Invalid login credentials, Please Try Again..</p>'; } ?>

    <label class="label_txt text-danger">Email*</label>
    <input type="email" name="login_var" value="<?php if(!empty($loginerror)){ echo  $loginerror; } ?>" class="form-control" required="">
  </div>
  <div class="form-group">
    <label class="label_txt text-danger">Password* </label>
    <input type="password" name="password" class="form-control" required="">
  </div>
  <button type="submit" name="sublogin" class="btn btn-primary btn-group-lg form_btn">Login</button>
</form>
<p style="font-size: 1.2rem;text-align: center;margin-top: 3vh;"><a href="forgot-password.php" style="color:cyan;">Forgot Password?</a> </p>
   <br> 
    <p style="font-size: 1.2rem;text-align: center;margin-top: -2vh;font-weight-bold;">Don't have an account ? <a href="signuppVisitor.php">Sign Up</a> </p>
		</div>
		<div class="col-sm-4">
		</div>
		</div>
	</div>
</div> 

</body>
</html>
<?php

include 'connection.php';
if(isset($_POST['sublogin'])){
    $uname=$_POST['login_var'];
    $password=$_POST['password'];
    $name="SELECT * from `sample_blood` WHERE Email Id='$uname' ";
    $query=mysqli_query($con,$name);
}
?>


