<?php

include 'connection.php';

$sql="select * from worker";
$res=mysqli_query($con,$sql);


echo "<link rel='stylesheet' href='css/bootstrap.min.css'>";
echo "<a class='btn btn-danger' href='indexlogin.html'>BACK</a>";
echo"<script src='js/bootstrap.min.js'></script>";
echo "<table align='center' border='1'class='table thead-dark'>";
echo "<tr bgcolor='blue'>

<th><font color='white'>Serial No.</font></th> 
<th><font color='white'>Username</font></th> 
<th><font color='white'>Fullname</font></th> 
<th><font color='white'>Mobile No.</font></th>
<th><font color='white'>Address</font></th>
<th><font color='white'>Service</font></th>
<th><font color='white'>Specialization</font></th>
<th><font color='white'>Email</font></th>";
//<th><font color='white'>Delete</font></th>



$sn=1;
while($row=mysqli_fetch_array($res))
{
	if($row[6]=='')
	{
echo"
<tr bgcolor='skyblue'class='table table-hover'>
	<td>$sn</td>
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
	<td>$row[4]</td>
	<td>$row[5]</td>
	<td>$row[6]</td>";
	
	//<td><p align='center'><a class='btn btn-success' href='wdelete.php?mobile=$row[3]'>Delete</p></a></td>
}
else
	{
	echo "<tr class='table-success'><td>$sn</td>
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
	<td>$row[4]</td>
	<td>$row[5]</td>
	<td>$row[6]</td></tr>";

	
	
		//<td><p align='center'><a class='btn btn-danger' href='wdelete.php?mobile=$row[3]'>Delete</p></a></td></tr>";
	
}
	$sn++;
}


?>
