<?php
	include "connection.php";

	$name = $_REQUEST['name'];
	$alamat = $_REQUEST['alamat'];
	$status = $_REQUEST['status'];
	$time_close = $_REQUEST['time_close'];

	header("location:../view/washme-order.php");
?>