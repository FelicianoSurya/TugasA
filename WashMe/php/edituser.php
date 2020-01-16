<?php
	include "connection.php";

	$username = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$submit = $_POST['submit'];

	$sql = "select * from user";
	$query = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($query);
	

	if($submit == 'Add'){
		$sql = "insert into user(username,name,email,alamat,nohp) values('$username','$name','$email','$alamat','$nohp')";
		$query = mysqli_query($conn,$sql) or die('Error $sql');
	}
	else if($submit == 'Update'){
		$sql = "update user set name='$name',email='$email',alamat='$alamat',nohp='$nohp' where username='$username'";
		$query = mysqli_query($conn,$sql) or die('Error $sql');
	}
	header("location:../view/myaccount.php");
?>