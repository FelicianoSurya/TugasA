<?php 

include "connection.php";

$username = $_GET['username'];
$date = $_GET['date'];
$req = $_GET['req'];

$submit = $_GET['submit'];

$sql = "select * from request_laundry where username = '$username'";
$query = mysqli_query($conn,$sql);
$num = mysqli_num_rows($query);

if($submit == 'Submit' && $num == 0){
	$sql = "insert into request_laundry (username,text_request,time_request) values('$username','$req','$date')";
	$query = mysqli_query($conn,$sql);
}
else if($num != 0){
	header('location:../view/home.php');
}
header("location:../view/home.php");

 ?>