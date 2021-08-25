<?php
session_start();
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"aman");

$q="select * from add_seat";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res); 

   /* echo $_SESSION['name'];
	echo $_SESSION['mobile'];  
	echo $_SESSION['email'];
	echo $_SESSION['date'];
    echo $_SESSION['gold'];
	echo $_SESSION['seat_type']; */
?>



 <?php
 ?> <table border="1px solid black">
 <tr>
 <?php 
$count=0;
if($num>0)
{
	while($row=$res->fetch_assoc())
	{  $count=$count+1;
       
	if( $row['type']=='active')
    {		
		
		if($count==5)
	   {
		    ?><td > <b style=""> <?php echo " ___";?> </td></b> <?php 
			?><td style="border:1px solid black; background-color:green; font-size:400%;" class="h"> <a href="seat_clicked.php?s=<?php echo $row['seat']; ?>" class="h"> <?php echo $row['seat']; ?> </td></a>  <?php 
	   }
	   else if($count==9)
	   {
		  
		  ?></tr>  <tr><td style="background-color:green;font-size:400%;"><b style="color:green;"> <?php echo "_";?> </b> <?php 
			?> <a href="seat_clicked.php?s=<?php echo $row['seat']; ?>" class="h"> <?php echo $row['seat']; ?> </td></a>  <?php 
			$count=1;
	   }
	   else
	   {   
   ?>  <td style="background-color:green;font-size:400%;"><b style="color:green;"> <?php echo "_";?> </b> <?php 
		   ?> <a href="seat_clicked.php?s=<?php echo $row['seat']; ?>" class="h"> <?php echo $row['seat']; ?></td> </a>   <?php
	   }
	}
	else
	{
		if($count==5)
	   {
		    ?><td > <b style=""> <?php echo " ___";?> </td></b> <?php 
			?><td style="border:1px solid black; background-color:red;font-size:400%;" >  <?php echo $row['seat']; ?> </td>  <?php 
	   }
	   else if($count==9)
	   {
		  
		  ?></tr>  <tr><td style="background-color:red;font-size:400%;"><b style="color:red;"> <?php echo "_";?> </b> <?php 
			?>  <?php echo $row['seat']; ?> </td> <?php 
			$count=1;
	   }
	   else
	   {   
   ?>  <td style="background-color:red;font-size:400%;"><b style="color:red;"> <?php echo "_";?> </b> <?php 
		   ?>  <?php echo $row['seat']; ?></td>  <?php
	   }
		
	}
		
	 }
}

$str=implode(",",$_SESSION['count']);
echo "Selected Seat->".$str."<br><br>";

$_SESSION['str']=$str;
$_SESSION['amount']=$_SESSION['gold']*$_SESSION['cnt'];
if(isset($_POST['confirm']))
{
	header("location:confirm_ticket.php");
}

//var_dump($_SESSION['count']);
//echo "<br><br>".$_SESSION['count'];
 ?> </tr> </table> <?php ?>  
<html>
<head>
<style>
.h{
	
	
	color:white;
	text-decoration:none;
}
.h:hover{
	background-color:white;
	color:black;
}
</style>
</head>
<body>
<form method="post"> <br>
<input style="margin-left:25%;" type="submit" value="Confirm" name="confirm"/>
</form>
<hr>
<h3 style="color:red;"> <b>Notice:</b> Only One Time Selection </h3>
</body>
</html>

