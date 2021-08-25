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
<td> Box Price  </td>
<td> Description  </td>
<td> Poster  </td>
</tr>
 <?php

if($num>0)
{
	while($row=$res->fetch_assoc())
	{
		?><tr> 
		<td style="font-size:120%;"> <?php echo $row['movie_name']."</br>";  ?></td>
		<td style="font-size:120%;"> <?php echo $row['goldprice']."</br>";  ?></td>
		<td style="font-size:120%;"> <?php echo $row['boxprice']."</br>";  ?></td>
		<td style="font-size:120%;"> <?php echo $row['description']."</br>";  ?></td>
		<td style="font-size:120%;"> <a href="data/<?php echo $row['poster'].".jpg"?>"> <?php echo $row['poster'] ?></a></td>
		</tr>
	<?php }
}
 ?> </table></center> <?php 


?>