<?php
if(isset($_POST['add_movie']))
{
	header("location:add_movie.php");
}

?>

<html>
<head>
<style>
.btn{
	width:14%;
	font-size:140%;
	font-family:arial black;
	background-color:white;
}
.btn:hover{
	background-color:black;
	color:white;
}

</style>
</head>
<body>
<center>
<div>
<form method="post">
<div style="background-color:yellow; height:10%;"><h1> Admin Panel </h1></div>
<hr>
<a href="add_movie.php"> <input type="button" class="btn" name="add_movie" value="Add_Movie"/> </a>




<a href="manage_movies.php"> <input type="button" class="btn" name="delete_movie" value="Manage Movies"/></a><br> <br>

<a href="add_theater.php" > <input type="button" class="btn" name="add_theater" value="Add_Theater"/> </a>

<a href="manage_theater.php"><input type="button" class="btn" name="delete_theater" value="Manage_Theater"/><br><br>


<a href="add_time.php" > <input type="button" class="btn" name="add_theater" value="Add_Time"/> </a>

<a href="manage_time.php"><input type="button" class="btn" name="delete_theater" value="Manage_Time"/><br><br>

<a href="show_movies.php"><input type="button" class="btn" name="show_movies" value="Show_Movies"/></a>
<input type="button" class="btn" name="ticket_data" value="Ticket_Data"/>
</form>
</div>
</center>
</body>


</html>