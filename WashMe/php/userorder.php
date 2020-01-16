<?php
	session_start();
	include "connection.php";

	$id = $_GET['id'];
	$name = $_GET['name'];

	$_SESSION['id'] = $id;
	$_SESSION['name'] = $name;
	header("location:../view/washme-order.php");
?>