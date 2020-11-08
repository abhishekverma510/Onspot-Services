<?php
include 'connect2.php';


$mobile=$_GET['mobile'];

$sql="update registration set verify='0' where mobile='$mobile'";
mysqli_query($con,$sql);


header('location:display_records.php');





?>