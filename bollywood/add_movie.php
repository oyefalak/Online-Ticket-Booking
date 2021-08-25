<?php 
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"aman");
$error='';
if(isset($_POST['submit']))
{  
    $movie=$_POST['movie_name'];
	$goldprice=$_POST['goldprice'];
	$description=$_POST['description'];
	$file_name=$_FILES['file']['name'];
	$file_type=$_FILES['file']['type'];
	$file_size=$_FILES['file']['size'];
	$file_tmp=$_FILES['file']['tmp_name'];
	
		move_uploaded_file($file_tmp,"data/".$movie.".jpg");
		$q="insert into add_movie(movie_name,goldprice,description,poster) values('$movie','$goldprice','$description','$movie')";
		mysqli_query($con,$q);
	$error="Movie Added Succesfully";
	
}
?>

<html>
<head>
</head>

<body>
<center>
<div style="border:1px solid black; width:40%; background-color:yellow; ">
<h1> Add Movie </h1>
<h3> <?php echo $error; ?> </h3>
<form action="" method="POST" enctype="multipart/form-data">
<table border="1px solid black" style="width:70%; height:30%;">
<tr>
<td>
<br><b>Enter Movie Name: </b></td>
<td><b><input type="text" name="movie_name" style="width:90%;"/> </b></td>

</tr>

<tr>
<td><b>Enter price: Gold </b></td>
<td>
<input type="text" name="goldprice" style="width:90%;"/></td> 
</tr>


<tr>
<td><b>Description:</b></td>
<td><textarea style="width:90%;" name="description"> </textarea></td>

</tr>
<tr>
<td colspan="2">
<b>Select Poster:</b>
<center><input type="file" name="file" /> </td></center>
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