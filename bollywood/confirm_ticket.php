<?php
session_start();
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"aman");

if(isset($_POST['submit']))
{
	$name=$_SESSION['name'];
	$mobile=$_SESSION['mobile'];
	$email=$_SESSION['email'];
	$theater=$_SESSION['theater'];
	$time=$_SESSION['time'];
	$date=$_SESSION['date'];
	$screen=$_SESSION['seat_type'];
	$seat=$_SESSION['str'];
	$amount=$_SESSION['amount'];
	
	
	$q="insert into ticketdata(name,mobile,email,theater,time,date,screen,seat,amount) values('$name','$mobile','$email','$theater','$time','$date','$screen','$seat','$amount')";
	$res=mysqli_query($con,$q);
	
	
	header("location:payment.php");
}

?>

<html>
<head>
<style>
body{
	background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(117, 19, 93, 0.73)),url("body.jpg");
	font-family:sans-serif;
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
<img style="height:100%; width:55%; border:2px solid black;" src="data/<?php echo $_SESSION['poster'].".jpg"?>" />

	</div>
	
	<div class="hello" style="margin-left:55.4%; margin-top:-45.850%;">
	<form method="post">
	
	<b><center style="font-size:200%;"> Payment </b></center><hr><br>
	<center>
	<table border="1px solid black" style="width:80%; height:60%;">
	<tr>
		<td> Name: </td>
		<td> <?php echo $_SESSION['name']; ?> </td>
    </tr>
		
	<tr> 
        <td>	Mobile: </td>
	    <td>	<?php echo $_SESSION['mobile']; ?> </td>
	</tr>
	
	<tr>
       <td>	Email: </td>
		<td> <?php echo $_SESSION['email']; ?> </td>
	</tr>
	
	<tr>
       <td>	Theater Name: </td>
		<td> <?php echo $_SESSION['theater']; ?> </td>
	</tr>
	
	<tr>
       <td>	Show Time: </td>
		<td> <?php echo $_SESSION['time']; ?> </td>
	</tr>
		
		<tr>
        <td>		Date: </td>
		<td> <?php echo $_SESSION['date']; ?> </td>
		</tr>
		
		<tr>
			<td> Screen: </td>
		<td> <?php echo $_SESSION['seat_type']; ?> </td>
		</tr>
		
		<tr>
			<td> Seats: </td>
		 <td> <?php echo $_SESSION['str']; ?> </td>
		</tr>
		
		<tr> 
			<td> Total Amount: </td>
		<td> <?php  echo $_SESSION['amount']; ?> </td>
		</tr>
		<tr>
     <td colspan="2"><center> <input class="btn" type="submit" value="Make Payment" name="submit"/></a> </center></td>
	 </tr>
	 </table>
	</center>
	</form>
	</div> 
</div>

</body>
</html>