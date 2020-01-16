<?php
	session_start();
	include "connection.php";

	$id = $_GET['id'];

	$_SESSION['id'] = $id;
	header("location:../view/myorders-2.php");
?>