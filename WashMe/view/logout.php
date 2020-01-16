<?php
	session_start();
	$_SESSION['session_nama']='';
	session_unset();
	session_destroy();
	header("location:index.php");
	session_destroy();
?>