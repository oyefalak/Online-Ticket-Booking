<?php
session_start();
$error='';
if(isset($_POST['submit']))
{
	$num=$_POST['card_number'];
	
	if(strlen($num)>12 || strlen($num)<12 | empty($_POST['exp_date']))
	{
		$error="Please Enter Correct Account Number";
	}
	if(empty($_POST['exp_date']) | empty($_POST['cvv']) | empty($_POST['name']))
	{
	   $error="Fields Are Required";	
	}
	else
	{
		header("location:confirm_ticket1.php");
	}
}
?>

<html>
<head>
</head>
<body>
<form method="post">
<center>
<div style="width:40%; height:55%; background-color:yellow; margin-top:5%; border:1px solid black;">
<h2> Enter Details </h2> <br> <b style="color:red;"> <?php echo $error; ?> </b><hr> <br>

<label style="font-size:120%;"> Enter Card Number </label><br>
<input type="text" name="card_number" style="border-radius:10% 10%; margin-top:1%;"/><br> <br>
<label style="font-size:120%; margin-left:-15%;"> Exp.Date </label><br>
<input type="text" name="exp_date" style="border-radius:10% 10%; margin-top:1%; width:12%; margin-left:-14%;"/><br><br>
<div style="margin-top:-11.2%;">
<label style="font-size:120%; margin-left:19%;margin-top:-10%;"> CVV </label><br>
<input type="password" name="cvv" style="border-radius:10% 10%; margin-top:1%; width:8%; margin-left:19%;"/>
</div><br>
<label style="font-size:115%;"> Account Holder Name </label><br>
<input type="text" name="name" style="border-radius:10% 10%; margin-top:1%;"/><br> <br>
<input type="submit" name="submit" style="border-radius:10% 10%; margin-top:1%; background-color:white;" />
</div>
</form>
</center>
</body>
</html>