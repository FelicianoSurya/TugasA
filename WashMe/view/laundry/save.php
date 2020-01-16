<?php
	include "../../php/connection.php";
	$sql = "select * from products";
	$query = mysqli_query($conn,$sql);

	$kode_product = $_POST['kode_product'];
	$nama_product = $_POST['nama_product'];
	$kategori = $_POST['kategori'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$description = $_POST['description'];
	$image = $_POST['image'];
	$targetDir = "../asset/images/";
	$targetFilePath = $targetDir . basename($image);
	$fileType = strtolower(pathinfo($targetFilePath,PATHINFO_EXTENSION));
	$submit = $_POST['submit'];

	$extensi = array('jpg','png','jpeg');

	if(in_array($fileType, $extensi)){
		move_uploaded_file($_POST['image'], $targetDir . $image);
	}
	if($submit == 'submit'){
		$sql = "insert into products(kode_product,nama_product,kategori,harga,stok,description,image) values('$kode_product','$nama_product','$kategori','$harga','$stok','$description','$targetFilePath')";
		$query = mysqli_query($conn,$sql);
	}
	header("location:shopproduct.php");
?>	