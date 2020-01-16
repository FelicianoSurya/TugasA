<?php
	include "connection.php";

	$username = $_GET['username'];
	$date = $_GET['date'];
	$req = $_GET['req'];
	$owner = $_GET['owner'];
	$laundryname = $_GET['laundryname'];
	$alamat = $_GET['alamat'];
	$kota = $_GET['kota'];
	$nohp = $_GET['nohp'];
	$submit = $_GET['submit'];

	$sql = "select * from request_laundry where username = '$username'";
	$query = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($query);

	if($submit == 'Submit' && $num == 0){
		$sql = "insert into request_laundry(username,text_request,time_request,owner,laundryname,alamat,kota,nohp) values('$username','$req','$date','$owner','$laundryname','$alamat','$kota','$nohp')";
		$query = mysqli_query($conn,$sql);
	}
	else if($num != 0){
		header("location:../view/home.php");
	}
	header("location:../view/home.php");
?>