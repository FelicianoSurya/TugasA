<?php 
	include "connection.php";

	$username = $_POST['username'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$nama = $_POST['nama'];
	$status = $_POST['status'];

	$submit = $_POST['submit'];

	if($submit == 'Send' && $username == $username){
		$sql = "update users set status='$status' where username='$username'";
		$query = mysqli_query($conn,$sql) or die('error $sql');
		$sql1 = "delete from request_driver where username = '$username'";
		$query1 = mysqli_query($conn,$sql1);
		$sql3 = "delete from user where username = '$username'";
		$query3 = mysqli_query($conn,$sql3);
		$sql2 = "insert into driver(username,nama,alamat,nohp) values('$username','$nama','$alamat','$nohp')";
		$query2 = mysqli_query($conn,$sql2);
	}

	header("location:../view/admin/request-laundry.php");
?>