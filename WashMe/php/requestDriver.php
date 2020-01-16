<?php
	include "connection.php";

	$username = $_GET['username'];
	$date = $_GET['date'];
	$req = $_GET['req1'];
	$nama = $_GET['nama'];
	$alamat = $_GET['alamat1'];
	$nohp = $_GET['nohp1'];
	$submit = $_GET['submit'];

	$sql = "select * from request_driver where username = '$username'";
	$query = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($query);

	if($submit == 'Submit' && $num == 0){
		$sql = "insert into request_driver(username,text_request,time_request,nama,alamat,nohp) values('$username','$req','$date','$nama','$alamat','$nohp')";
		$query = mysqli_query($conn,$sql);
	}
	else if($num != 0){
		header("location:../view/home.php");
	}
	header("location:../view/home.php");
?>