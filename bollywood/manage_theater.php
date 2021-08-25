<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"aman");
$q="select * from add_theater";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res); ?>
<center>
<h2 style="background-color:yellow;"> All Movies </h2>
<table border='1px solid black'>
<tr style="background-color:black; color:white; font-size:150%;">
<td> Theater  </td>
<td colspan="2"> Operation  </td>

</tr>
 <?php

if($num>0)
{
	while($row=$res->fetch_assoc())
	{
		?><tr> 
		<td style="font-size:120%;"> <?php echo $row['theater_name']."</br>";  ?></td>
		<td> <a href="update_theater.php?m=<?php echo $row['theater_name'] ?> "> Update</a> </td>
		<td> <a href="delete_theater.php?m=<?php echo $row['theater_name'] ?>">Delete</a> </td>
		</tr>
	<?php }
}
 ?> </table></center> <?php 


?>

