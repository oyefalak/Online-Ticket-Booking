<?php
session_start();
$_SESSION['cnt']=0;
$_SESSION['count']=array();
$_SESSION['gold']=$_GET['g'];
$_SESSION['poster']=$_GET['poster'];

if(isset($_POST['submit']))
{
	$_SESSION['name']=$_POST['name'];
	$_SESSION['mobile']=$_POST['mobile'];
	$_SESSION['email']=$_POST['email'];
	$_SESSION['date']=$_POST['date'];
	
$_SESSION['seat_type'] = $_POST['Color'];
$_SESSION['theater'] = $_POST['theater'];
$_SESSION['time'] = $_POST['time'];

header("location:seat_server.php");
}
?>

<html>
<head>
<style>
body{
	background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(117, 19, 93, 0.73)),url("body.jpg");
	
}
.btn{
	font-size:120%;
	background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(117, 19, 93, 0.73));
	border:1px solid black;
}
.btn:hover
{
	background-color:red;
}
.hello
{
	background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(117, 19, 93, 0.73));
	height:100%;
}
</style>
</head>
<body>

<div style="height:80%; width:80%;  margin-left:8%;margin-top:5%; border:2px solid black;">
	<div>
<img style="height:100%; width:55%; border:2px solid black;" src="data/<?php echo $_GET['poster'].".jpg"?>" />

	</div>
	
	<div class="hello" style="margin-left:55.4%; margin-top:-45.8%;">
	<form method="post">
	<b><center style="font-size:200%;">Submit Details </b></center><hr><br>
	<center><table border="2px solid black" style="font-size:150%;">
	<tr>
	<td><b> Enter Your Name:  </td></b>
	<td> 
	<input type="text" name="name"/>
	<?php //echo $_GET['m']; ?>  </td>
	</tr>
	
	<tr>
	<td><b> Enter Mobile :  </td></b>
	<td> 
	<input type="text" name="mobile"/>
	<?php //echo $_GET['m']; ?>  </td>
	</tr>
	
	
	<tr>
	<td><b> Enter Email :  </td></b>
	<td> 
	<input type="text" name="email"/>
	<?php //echo $_GET['m']; ?>  </td>
	</tr>
	
	
	<tr>
	<td><b> Select Theater  </td>
	<td> 
	<?php include("show_theater.php"); ?>
	</td>
    </tr>
	
	<tr>
	<td><b> Select Time  </td>
	<td> 
	<?php include("show_time.php"); ?>
	</td>
    </tr>
	
	
	<tr>
	<td><b> Movie Date</b></td>
	
	<td>  
<input type="date" name="date"></td>
	</tr>
	
	
	<tr>
	<td><b> Seat  </td>
	
	
	<td> 
<select name="Color">
<option value="gold-screen 1">Gold-Screen 1</option>
 </select>

</td>

	  
	</tr>
	
	
	
	
	
	</table></br></br>
     <input class="btn" type="submit" value="Next" name="submit"/></a>
	</center>
	</form>
	</div> 
</div>

</body>
</html>