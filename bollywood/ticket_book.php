<?php
session_start();

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

<div style="height:50%; width:75%;  margin-left:13%;margin-top:5%; border:2px solid black;">
	<div>
<img style="height:100%; border:2px solid black;" src="data/<?php echo $_GET['poster'].".jpg"?>" />

	</div>
	
	<div class="hello" style="margin-left:54%; margin-top:-30.7%;">
	<b><center style="font-size:200%;">Movie Details </b></center><hr><br>
	<center><table border="2px solid black" style="font-size:150%;">
	<tr>
	<td><b> Movie Name  </td></b>
	<td> <?php echo $_GET['m']; ?>  </td>
	</tr>
	
	<tr>
	<td><b> Gold Price  </td>
	<td> <?php echo $_GET['g']; ?>  </td>
	</tr>
	
	
	
	<tr>
	<td><b> Description  </td></b>
	<td> <?php echo $_GET['d']; ?>  </td>
	</tr>
	
	</table></br></br>
    <a href="book_now.php?poster=<?php echo $_GET['poster']; ?>&g=<?php echo $_GET['g']; ?>"> <input class="btn" type="button" value="Book Now"/></a>
	</center>
	</div>
</div>

</body>
</html>