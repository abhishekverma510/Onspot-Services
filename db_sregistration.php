                                                                                                                                                                                                                           <?php


include 'connection.php';



$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['emailid'];
$pass=$_POST['pass'];


echo $name."<br>";
echo $mobile."<br>";
echo $email."<br>";
echo $pass."<br>";


$sql= "INSERT INTO registration(name,mobile,emailid,pass) VALUES('$name','$mobile',
          '$email','$pass')";

    
  if(mysqli_query($con,$sql))
      {
     $to = $email;
	$subject = " From : onspot service";
	$message = "Your Login Detals \n User ID : ".$email." \nPassword : ".$pass." \nYou can Not Login untill admin Verifiction";
	$headers = " From : Onspot services";

	mail($to, $subject, $message, $headers);

	$message = "Registration Sucessfull & login Details Send To Your Email.";
	echo "<script type='text/javascript'>alert('$message')</script>";
	header('location:home_new1.html');
      
      }
    else
    {
    	header('location:registration_r.html');
    }

  
?>

