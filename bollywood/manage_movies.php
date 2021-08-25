<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"aman");

$q="select * from add_movie";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res); ?>
<center>
<h2 style="background-color:yellow;"> All Movies </h2>
<table border='1px solid black'>
<tr style="background-color:black; color:white; font-size:150%;">
<td> Movie  </td>
<td> Gold Price  </td>
<td> Description  </td>
<td> Poster  </td>
<td colspan="2"> Operations  </td>
</tr>
 <?php

if($num>0)
{
	while($row=$res->fetch_assoc())
	{
		?><tr> 
		<td style="font-size:120%;"> <?php echo $m= $row['movie_name']."</br>";  ?></td>
		<td style="font-size:120%;"> <?php echo $g= $row['goldprice']."</br>";  ?></td>
		<td style="font-size:120%;"> <?php echo $d= $row['description']."</br>";  ?></td>
		<td style="font-size:120%;"> <a href="data/<?php echo $row['poster'].".jpg"?>"> <?php echo $row['poster'] ?></a></td>
		<td> <a href="movie_update.php?m=<?php echo $row['movie_name'] ?>&g=<?php echo $row['goldprice'] ?>&d=<?php echo $row['description'] ?> "> Update</a> </td>
		<td> <a href="movie_delete.php?m=<?php echo $row['movie_name'] ?>">Delete</a> </td>
		</tr>
	<?php }
}
 ?> </table></center> <?php 


?>