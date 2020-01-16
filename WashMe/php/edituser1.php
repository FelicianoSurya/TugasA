<?php
	include "connection.php";

	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$submit = $_POST['submit'];

	$sql = "select * from user";
	$query = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($query);
	

	if($submit == 'Add'){
		$sql = "insert into driver(username,nama,alamat,nohp) values('$username','$nama','$alamat','$nohp')";
		$query = mysqli_query($conn,$sql) or die('Error $sql');
	}
	else if($submit == 'Update'){
		$sql = "update driver set nama='$nama',alamat='$alamat',nohp='$nohp' where username='$username'";
		$query = mysqli_query($conn,$sql) or die('Error $sql');
	}
	header("location:../view/driver/myaccount.php");
?>