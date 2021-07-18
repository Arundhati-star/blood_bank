<?php
include_once 'connection.php';
  $insertquery="SELECT * FROM `sample_blood`";
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Info Page</title>
    <?php include 'link.php' ?>
     <style>
    <?php include 'css/table.css' ?>
    </style>
</head>
<body>

<h2 class=" text-info font-weight-bold my-3 text-center">Available Blood Sample</h2>
<button type="submit" name="sublogin" class="btn btn-danger btn-group-lg form_btn ml-4"><a href="loginVisitor.php" style="color: #00376b; text-decoration:none">Request Sample</a> </button>
<table class="content-table">
  <thead>
    <tr>
        <th><h4>ID</h4></th>
    <th><h4>Blood Group</h4></th>
   
    </tr>
  </thead>
  <tbody>
    <?php 
      while($rows = $res->fetch_assoc()){
        ?>
        <tr>
          <td><?php echo $rows['ID'];?></td>
          <td><?php echo $rows['Blood Group'];?></td>
        </tr>
        <?php
      }
      ?>
  </tbody>
</table>
</body>
</html>