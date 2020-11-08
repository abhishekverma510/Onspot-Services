<?php


include 'connection.php';



$username=$_POST['username'];
$fullname=$_POST['fullname'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$service=$_POST['service'];
$special=$_POST['special'];
$email=$_POST['email'];


echo $username."<br>";
echo $fullname."<br>";
echo $mobile."<br>";
echo $address."<br>";
echo $service."<br>";
echo $special."<br>";
echo $email."<br>";



$sql= "INSERT INTO worker(username,fullname,mobile,address,service,special,email) VALUES('$username','$fullname',
          '$mobile','$address','$service','$special','$email')";

    
  if(!mysqli_query($con,$sql))
      {
         echo 'data not inserted';
      
      }
    else
    {
    	header('location:home_new1.html');
    }

  
?>