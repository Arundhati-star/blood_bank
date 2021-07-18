<?php
// session_start();
$username="root";
$password="";
$server="localhost:3307";
$db="blood request";


$con=mysqli_connect($server,$username,$password,$db);
if($con){
    // echo "connection successful";
    ?>
    <script>
        alert('connection successful')
        </script>
        <?php
}else{
    // <!-- echo "no connection"; -->
    die("No Connection".mysqli_connect_error());
}