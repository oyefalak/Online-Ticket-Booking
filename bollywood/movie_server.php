<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"aman");

$q="select * from add_movie";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res); 

 

if($num>0)
{
	while($row=$res->fetch_assoc())
	{
		
		   
	 ?> 
	 <div class="box" style="float:left;">
	<a href="ticket_book.php?poster=<?php echo $row['poster'] ?>&m=<?php echo $row['movie_name'] ?>&g=<?php echo $row['goldprice'] ?>&d=<?php echo $row['description'] ?>" > <img style="height:20%;" src="data/<?php echo $row['poster'].".jpg"?>" /> </a>
      <div style="margin-left:15%;">
	  <?php echo $row['movie_name'] ?>
       </div>	  
     </div>
<?php 	 
		 }
}
 


?>