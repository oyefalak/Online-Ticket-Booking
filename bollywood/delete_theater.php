<?php 
$error="";
$movie=$_GET['m'];
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"aman");

	
	
	$query="delete from add_theater WHERE theater_name='$movie'";
	$res=mysqli_query($con,$query);
	header("location:manage_theater.php");
	



?>