<?php


include 'connection.php';


$user_mobile=$_POST['user_mobile'];
$feedback=$_POST['feedback'];



echo $user_mobile."<br>";
echo $feedback."<br>";




$sql= "INSERT INTO feedback(user_mobile,feedback) VALUES('$user_mobile','$feedback')";

    
  if(!mysqli_query($con,$sql))
      {
         echo 'data not inserted';
      
      }
    else
    {
    	header('location:home_new1.html');
    }

  
?>