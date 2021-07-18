<?php
include_once 'connectionview.php';
  $insertquery="SELECT * FROM `blood`";
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

<h2 class=" text-info font-weight-bold my-3 text-center">View Requests Page</h2>
<table class="content-table">
  <thead>
    <tr>
        <th><h4>ID</h4></th>
    <th><h4>Name</h4></th> 
    <th><h4>Blood Group</h4></th>
   
    </tr>
  </thead>
  <tbody>
    <?php 
      while($rows = $res->fetch_assoc()){
        ?>
        <tr>
          <td><?php echo $rows['ID'];?></td>
            <td><?php echo $rows['fname'];?></td>
          <td><?php echo $rows['Blood Group'];?></td>
        </tr>
        <?php
      }
      ?>
  </tbody>
</table>
</body>
</html>