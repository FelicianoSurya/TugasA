<?php
	include "connection.php";

	$username = $_POST['username'];
	$name = $_POST['name'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$owner = $_POST['owner'];
	$kota = $_POST['kota'];
	$time_open = $_POST['time_open'];
	$time_close = $_POST['time_close'];
	$harga = $_POST['harga'];
	$service = $_POST['service'];
	$image = $_POST['image'];
	$targetDir = "../asset/images/";
	$targetFilePath = $targetDir . basename($image);
	$fileType = strtolower(pathinfo($targetFilePath,PATHINFO_EXTENSION));

	$submit = $_POST['submit'];

	$extensi = array('jpg','png','jpeg');

	if(in_array($fileType, $extensi)){
		move_uploaded_file($_POST['image'], $targetDir . $image);
	}
	if($submit == 'update'){
		$sql = "update laundrys set image='$targetFilePath',name='$name',alamat='$alamat',time_open='$time_open',time_close='$time_close',service='$service',owner='$owner',harga='$harga',nohp='$nohp',kota='$kota' where username='$username'";
		$query = mysqli_query($conn,$sql) or die('Error $sql');
	}
	header("location:../view/laundry/myaccount.php");
?>