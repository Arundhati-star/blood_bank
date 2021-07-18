<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
         <?php include 'link.php' ?>
         <style>
    <?php include 'css/style.css' ?>
    </style>
</head>
<body>
    <section class="my-5">
    <div class="alert alert-success py-5">
        <h3 class="text-center">Request for a blood Sample</h3>
</div>
<div class="container-fluid add-bg">
 <div class="row ">
<div class="col-lg-12 col-md-12 col-12">
  <div class="pull-right">
         <h2 class="text-danger font-weight-bold pull-right ml-2 my-4">Request for a blood</h2>
      
</div>
  
</div>
 <div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-12">
		</div>
		<div class="col-lg-12 col-md-12 col-12">
			<div class="login_form">
 	<form action="" method="POST">
  <div class="form-group">
      <h3 class=" text-info text-center font-weight-bold my-2">Request for blood sample</h3> <br>
      <h4 class=" text-info text-center font-weight-bold my-1 font-size='1rem'">Welcome,to Blood Bank</h4> <br>
<?php 
if(isset($_GET['loginerror'])) {
	$loginerror=$_GET['loginerror'];
}
 if(!empty($loginerror)){  echo '<p class="errmsg">Invalid login credentials, Please Try Again..</p>'; } ?>

    <label class="label_txt text-danger">Username*</label>
    <input type="text" name="login_var" value="<?php if(!empty($loginerror)){ echo  $loginerror; } ?>" class="form-control" required="">
  </div>
                            <div class="form-group">
                                <label class="label_txt text-danger">Blood Group* </label>
                                <input type="text" class="form-control"
                                name="blood" value="" required/>
                            </div>
  <button type="submit" name="sublogin" class="btn btn-primary btn-group-lg form_btn">Request</button>
</form>
       <ul style="list-style:none;mb-5;">
           <li class="text-danger font-weight-bold pull-right">
               <a href="index.php" class="btn btn-danger mt-4">Go to Homepage</a>

</li>

</ul> 
		</div>
		<div class="col-lg-12 col-md-12 col-12">
		</div>
		</div>
	</div>
</div> 

</div>

</div>


</section>
</body>
</html>
<?php
include_once 'connectionview.php';
if(isset($_POST['sublogin'])){
     $name=$_POST['login_var'];
       $blood=$_POST['blood'];
            $insertquery="INSERT INTO `blood`(`fname`, `Blood Group`) VALUES (' $name','$blood')";
             $res=mysqli_query($con,$insertquery);
                    if($res){
            ?>
            <script>
                alert("data inserted successfuly");
                // window.location="loginVisitor.php"
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
