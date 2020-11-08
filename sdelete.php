<?php
include 'connect2.php';
$mobile=$_GET['mobile'];
$sql="delete from registration where mobile='$mobile'";
mysqli_query($con,$sql);
header('location:display_records.php');

?>