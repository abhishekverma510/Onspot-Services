<?php
include 'connect2.php';
$id=$_GET['del'];
$sql="delete from worker where mobile='$mobile'";
mysqli_query($con,$sql);
header('location:display_wrecords.php');

?>