<?php
session_start();
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"aman");

$seat=$_GET['s'];
$_SESSION['cnt']=$_SESSION['cnt']+1;
$ct=$_SESSION['cnt'];
$_SESSION['count'][$ct]=$seat;
$a='';
$q="update add_seat set type='$a' where seat='$seat'";
mysqli_query($con,$q);
//var_dump($_SESSION['count']);
header("location:seat_server.php");

?>