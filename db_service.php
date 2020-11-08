<?php


include 'connection.php';



$mobile=$_POST['mobile'];
$stype=$_POST['stype'];
$special=$_POST['special'];


echo $mobile."<br>";
echo $stype."<br>";
echo $special."<br>";



$sql= "INSERT INTO service(mobile,stype,special) VALUES('$mobile','$stype','$special')";

    
  if(!mysqli_query($con,$sql))
      {
         echo 'data not inserted';
      
      }
    else
    {
    	header('location:home_new1.html');
    }

  
?>

