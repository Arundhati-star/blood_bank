<!DOCTYPE html>

<html lang="en">
<head>
     <?php include 'link.php' ?>
     <link rel="stylesheet" href="css/loginn.css">
    <title>Sign Up Visitor</title>
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
      <h3 class=" text-info text-center font-weight-bold my-3">Sign Up(Visitors)</h3> <br>
      <h4 class=" text-info text-center font-weight-bold my-1">Welcome,to Blood Bank</h4> <br>
<?php 
if(isset($_GET['loginerror'])) {
	$loginerror=$_GET['loginerror'];
}
 if(!empty($loginerror)){  echo '<p class="errmsg">Invalid login credentials, Please Try Again..</p>'; } ?>

    <label class="label_txt text-danger">Username*</label>
    <input type="text" name="login_var" value="<?php if(!empty($loginerror)){ echo  $loginerror; } ?>" class="form-control" required="">
  </div>
                            <div class="form-group">
                                <label class="label_txt text-danger">Address* </label>
                                <input type="text" class="form-control" name="address" value="" required/>
                            </div>
                            <div class="form-group">
                                <label class="label_txt text-danger">Mobile Number* </label>
                                <input type="tel" class="form-control" name="mobile" value="" required/>
                            </div>
                            <div class="form-group">
                                <label class="label_txt text-danger">Email Id* </label>
                                <input type="email" class="form-control"
                                 name="email" value="" required/>
                            </div>
                            <div class="form-group">
                                <label class="label_txt text-danger">Blood Group* </label>
                                <input type="text" class="form-control"
                                name="blood" value="" required/>
                            </div>

                            <div class="form-group">
                                <label class="label_txt text-danger">Member* </label>
                                <input type="text" class="form-control" placeholder="Hospital Member/Visitor"
                              name="member" value="" required/>
                            </div>
  <div class="form-group">
    <label class="label_txt text-danger">Password* </label>
    <input type="password" name="password" class="form-control" required="">
  </div>
  <button type="submit" name="sublogin" class="btn btn-primary btn-group-lg form_btn">Login</button>
 
</form>
   <br> 
    <p style="font-size: 1.2rem;text-align: center;margin-top: -2vh;">Already have an account? <a href="loginVisitor.php">Login In</a> </p>
		</div>
		<div class="col-sm-4">
		</div>
		</div>
	</div>
</div> 

</body>
</html>


<!-- <?php require_once("connection.php"); 
?> -->

<?php
include_once 'connection.php';
if(isset($_POST['sublogin'])){
     $name=$_POST['login_var'];
     $address=$_POST['address'];
         $mobile=$_POST['mobile'];
       $email=$_POST['email']; 
       $blood=$_POST['blood'];
       $member=$_POST['member'];
       $password=$_POST['password'];
       $pass=password_hash($password,PASSWORD_BCRYPT);
//         $sql="select * from sample_blood where (Name='$name' or Email Id='$email');";
//       $res=mysqli_query($con,$sql);
//    if (mysqli_num_rows($res) > 0) {
// $row = mysqli_fetch_assoc($res);

//      if($name==$row['Name'])
//      {
//            $error[] ='Username alredy Exists.';
//           } 
//        if($email==$row['Email Id'])
//        {
//             $error[] ='Email alredy Exists.';
//           } 
//         }
//    else{

            $insertquery="INSERT INTO `sample_blood`(`Name`, `Address`, `Mobile No`, `Email Id`, `Blood Group`, `Hospital Staff/Visitors`,`Password`) VALUES ('$name','$address','$mobile','$email','$blood','$member',' $pass')";
             $res=mysqli_query($con,$insertquery);
                    if($res){
            ?>
            <script>
                alert("data inserted successfuly");
                window.location="loginVisitor.php"
                </script>
            <?php
        }else{
               ?>
            <script>
                alert("data not inserted");
                </script>
            <?php
        }
 
}

?>