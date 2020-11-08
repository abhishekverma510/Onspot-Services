<?php

include 'connection.php';

 $mobile=$_POST['mobile'];
 $pass=$_POST['pass'];


 $sql="SELECT * from registration WHERE mobile='$mobile' AND pass='$pass'";


 $res=mysqli_query($con,$sql);

 

    if($row=mysqli_fetch_array($res))
  {  	

 	   if($mobile==$row[1] and $row[4]=='1')
 	{
        session_start();
        $_SESSION['user_mob']=$mobile;
        header('location:service3.html');

 	}

    else

    	header('location:user_login.html') ;

  }



?>