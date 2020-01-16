<?php 
	include "connection.php";

	$username = $_GET['username'];
	$submit = $_GET['submit'];

	if($submit == 'Delete'){
		$sql = "delete from request_laundry where username='$username'";
		$query = mysqli_query($conn,$sql) or die('error $sql');
	}

	header("location:../view/admin/request-laundry.php");
?>