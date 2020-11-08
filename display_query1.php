<?php

include 'connection.php';

$sql="select * from query1";
$res=mysqli_query($con,$sql);


echo "<link rel='stylesheet' href='css/bootstrap.min.css'>";
echo "<a class='btn btn-danger' href='index_admin.html'>BACK</a>";
echo"<script src='js/bootstrap.min.js'></script>";
echo "<table align='center' border='1'class='table thead-dark'>";
echo "<tr bgcolor='blue'>

<th><font color='white'>Serial No.</font></th> 
<th><font color='white'>Mobile</font></th> 
<th><font color='white'>Query</font></th>";
//<th><font color='white'>Delete</font></th>



$sn=1;
while($row=mysqli_fetch_array($res))
{
	if($row[1]=='')
	{
echo"
<tr bgcolor='skyblue'class='table table-hover'>
	<td>$sn</td>
	<td>$row[0]</td>
	<td>$row[1]</td>";
	
	//<td><p align='center'><a class='btn btn-success' href='wdelete.php?mobile=$row[3]'>Delete</p></a></td>
}
else
	{
	echo "<tr class='table-success'><td>$sn</td>
	<td>$row[0]</td>
	<td>$row[1]</td></tr>";

	
	
		//<td><p align='center'><a class='btn btn-danger' href='wdelete.php?mobile=$row[3]'>Delete</p></a></td></tr>";
	
}
	$sn++;
}


?>
