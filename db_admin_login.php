<?php

include 'connection.php';
 

  $mobile=$_POST['mobile'];
  $pass=$_POST['pass'];

 $sql="SELECT * from admin1 WHERE mobile='$mobile' AND pass='$pass'";


 $res=mysqli_query($con,$sql);

 //$row=mysqli_fetch_array($res);

 //echo "<br>db data = ".$row[0];
 //echo "<br>db data = ".$row[1];


    if($row=mysqli_fetch_array($res))
    {  	

 	   //if($mobile==$row[0])
 	 //{
        session_start();
        
  
        $_SESSION['mobile']=$row[0];
       header('location:index_admin.html');

 	}

    else
{
    	//header('location:admin_login.php') ;
     
  }



?>