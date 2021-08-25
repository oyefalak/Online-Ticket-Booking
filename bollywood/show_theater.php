<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"aman");
$q="select * from add_theater";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res); 

if($num>0)
{
	?> <select name="theater"> <?php 
	while($row=$res->fetch_assoc())
	{
       ?> 
	<option value="<?php echo $row['theater_name'] ?>"><?php echo $row['theater_name'] ?></option>
	
 <?php 	
	 }
	 
	?> </select> <?php
}
 


?>

