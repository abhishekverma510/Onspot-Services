
<?php
include 'connection.php';      
$mobile=$_POST['user_mob'];
$stype=$_POST['query'];


echo $user_mob."<br>";
echo $query."<br>";


$sql= "INSERT INTO query(user_mob,query) VALUES('$user_mob','$query')";
    
  if(!mysqli_query($con,$sql))
      {
         echo 'data not inserted';
      
      }
    else
    {
    	header('location:home_new1.html');
    
    }

  
?>

