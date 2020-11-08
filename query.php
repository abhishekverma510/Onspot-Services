<html>
<head>
	<title>Query</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	 <div class="contact-title">
  <h1 style="color:#FF0000;">Query-form </h1>
 </div>
 <div class="contact-form">
  <form id="contact-form" method="post" action="#">
    
  <textarea name="qry1" class="form-control" placeholder="Enter your query !!"
  rows="4" required></textarea><br>
  <input type="Submit" class="form-control sumbit" name="submit" value="SUBMIT YOUR QUERY">
</form>
</div>
<div>
	
<?php
session_start();
if (isset($_POST['submit']))
{

$con=mysqli_connect('localhost','abhishek','12345','onspotservices');

       //$_SESSION['mobile']=$row[0];
      //$user_mob=$_POST['user_mob'];
$user_mob=$_SESSION['user_mob'];
$query=$_POST['qry1'];

//echo $user_mob;

//echo $user_mob."<br>";
//echo $query."<br>";



$sql= "INSERT INTO query(user_mob,query) VALUES('$user_mob','$query')";
//echo $sql;
    
  if(!mysqli_query($con,$sql))
  {
         echo "Query Send..";
      
  }
    else
    {
 		echo "Error";
    }

 }//end if 
?>


</div>
</body>
</html>