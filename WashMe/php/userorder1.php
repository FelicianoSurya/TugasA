<?php
	session_start();
	include "connection.php";

	$id = $_GET['id'];
	$name = $_GET['name'];
	$nama = $_GET['nama'];
	$alamat = $_GET['alamat'];

	$_SESSION['id'] = $id;
	$_SESSION['name'] = $name;
	$_SESSION['nama'] = $nama;
	$_SESSION['alamat'] = $alamat;
	header("location:../view/washme-order2.php");
?>