<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"aman");
$q="select * from add_time";
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
		<td style="font-size:120%;"> <?php echo $row['time']."</br>";  ?></td>
		<td> <a href="update_time.php?m=<?php echo $row['time'] ?> "> Update</a> </td>
		<td> <a href="delete_time.php?m=<?php echo $row['time'] ?>">Delete</a> </td>
		</tr>
	<?php }
}
 ?> </table></center> <?php 


?>

