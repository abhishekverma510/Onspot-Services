

<?php

include 'connection.php';


session_start();
$s=$_SESSION['mobile'];


if(isset($_SESSION['mobile']))
{
 
$sql="select * from registration";
$res=mysqli_query($con,$sql);
echo "<p align='right' style='margin-left:80%;'><a href='#'><font color='red' size='6px'>LOG OUT</font></a></p>";
echo "<h1 align='center'>Student's Login Details</h1>";
echo "<table align='center' border='1'>";
echo "<tr bgcolor='blue'><th><font color='white'>S.No.</font></th> 
<th><font color='white'>Name</font></th>
<th><font color='white'>Mobile</font></th>
<th><font color='white'>Gmail</font></th>
<th><font color='white'>Password</font></th>
<th><font color='white'>Verify</font></th>
<th colspan='2'><font color='white'>approve</font></th>";
$sn=1;
while($row=mysqli_fetch_array($res))
{
	if($row[4]=='0')
	{
	echo "<tr bgcolor='skyblue'><td>$sn</td>
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
	<td>$row[4]</td>
	<td colspan='2'><a href='approve.php?mobile=$row[1]'><font color='#b406cf' size='4'>approve</font></a></td>";
	}
	else
		{
	echo "<tr bgcolor='grey'><td>$sn</td>
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
	<td>$row[4]</td>
	
	<td><a href='sdelete.php?mobile=$row[1]'><font color='blue' size='4'>delete</font></a></td>
	<td><a href='reject.php?mobile=$row[1]'><font color='red' size='4'>reject</font></a></td></tr>";
	}
	$sn++;
}

echo "</table><br>";
}
?>

