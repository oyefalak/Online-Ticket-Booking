<?php

$_SESSION['cnt']=0;
$_SESSION['count']=array();
//echo $_SESSION['gold'];
$str=implode(",",$_SESSION['count']);
echo $str."<br><br>";
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
	
	<div class="hello" style="margin-left:55.4%; margin-top:-48.8%;">
	<form method="post">
	<b><center style="font-size:200%;">Submit Details </b></center><hr><br>
	<center></br></br>
	
	<?php include("seat_server.php"); ?>
	
     <input class="btn" type="submit" value="Next" name="submit"/></a>
	</center>
	</form>
	</div> 
</div>

</body>
</html>