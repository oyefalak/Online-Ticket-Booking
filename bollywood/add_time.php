<?php 
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"aman");
$error='';
if(isset($_POST['submit']))
{  
    $time=$_POST['theater_name'];
	
		$q="insert into add_time(time) values('$time')";
		mysqli_query($con,$q);
	$error="Time Added Succesfully";
	
}
?>

<html>
<head>
</head>

<body>
<center>
<div style="border:1px solid black; width:40%; background-color:yellow; ">
<h1> Add Time </h1>
<h3> <?php echo $error; ?> </h3>
<form action="" method="POST" enctype="multipart/form-data">
<table border="1px solid black" style="width:70%; height:10%;">
<tr>
<td>
<br><b>Enter Time: </b></td>
<td><b><input type="text" name="theater_name" style="width:90%;"/> </b></td>

</tr>


<tr>
<td colspan="2">
<center><input type="submit" name="submit" style="width:20%; background-color:white;"/> </td></tr> </center>
</table>
</form>
</center>
</div>
</body>
</html>