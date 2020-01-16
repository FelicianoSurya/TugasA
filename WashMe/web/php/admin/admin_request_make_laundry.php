<?php 
include "../connection.php";

$username = $_POST['username'];
$password = $_POST['password'];
$conf = $_POST['confirmation'];
$id  = $_POST['id'];

$submit = $_POST['submit'];

if($submit == 'Send' && $conf == $password){
	$sql = "insert into users (username,password,status) values ('$username','$password','laundry')";
	$query = mysqli_query($conn,$sql);
	$sql1 = "delete from request_laundry where id = '$id'";
	$query1 = mysqli_query($conn,$sql1);
}

header("location:../../view/admin/admin-request.php");

 ?>