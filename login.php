<!DOCTYPE html>
<?php require_once("connectionhos.php"); ?>
<html>
<head><br>
<title> Login Page</title>
 <?php include 'link.php' ?>
<link rel="stylesheet" href="css/register.css">
</head>
<body>
<div class="container">
	<div class="row">
  
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div class="login_form">
                
 	<form action="" method="POST">
  <div class="form-group">
      <h3 class=" text-info text-center font-weight-bold my-3">Login Page</h3> 
      <br>
      
<?php 
if(isset($_GET['loginerror'])) {
	$loginerror=$_GET['loginerror'];
}
 if(!empty($loginerror)){  echo '<p class="errmsg">Invalid login credentials, Please Try Again..</p>'; } ?>

    <label class="label_txt">Email </label>
    <input type="email" name="login_var" value="<?php if(!empty($loginerror)){ echo  $loginerror; } ?>" class="form-control" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Password </label>
    <input type="password" name="password" class="form-control" required="">
  </div>
  <button type="submit" name="sublogi" class="btn btn-primary btn-group-lg form_btn">Login</button>
</form>
<p style="font-size:1rem;text-align: center;margin-top:3vh;"><a href="forgot-password.php" style="color: #00376b;">Forgot Password?</a> </p>
   <br> 
    <p>Don't have an account? <a href="signupHospital.php">Sign up</a> </p>
		</div>
		<div class="col-sm-4">
		</div>
		</div>
	</div>
    <!-- <p style="font-size:1.2 rem;text-align: center;margin-top:3vh;">Check available blood sample ? <a href="tabledata.php">Available Blood Sample</a> </p> -->
</div> 
</body>
</html>
<?php

include 'connectionhos.php';
if(isset($_POST['sublogi'])){
    $uname=$_POST['login_var'];
    $password=$_POST['password'];
    $name="SELECT * from `hospital` WHERE email='$uname' ";
    $query=mysqli_query($con,$name);
    $email_count=mysqli_num_rows($query);
    if($email_count){
        $email_pass=mysqli_fetch_assoc($query);
        $db_pass=$email_pass['password'];
        $pass_decode=password_verify($password, $db_pass);
        if($pass_decode){
           
           ?>
            <script>
                alert("Email already exists");
                window.location="table.php"
                </script>
            <?php
        }else{
           ?>
            <script>
                alert("EmailId doesnot exist please signup");
                window.location="signupHospital.php"
                </script>
            <?php
            // echo "incorrect";
        }
    }else{
        echo "INVALID EMAIL";
    }
}
?>
