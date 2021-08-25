<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"aman");
$q="select * from add_time";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res); 

if($num>0)
{
	?> <select name="time"> <?php 
	while($row=$res->fetch_assoc())
	{
       ?> 
	<option value="<?php echo $row['time'] ?>"><?php echo $row['time'] ?></option>
	
 <?php 	
	 }
	 
	?> </select> <?php
}
 


?>

