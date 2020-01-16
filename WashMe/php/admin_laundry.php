<?php 

include "connection.php";

$id = $_GET['id'];
$submit = $_GET['submit'];

if($submit == 'Delete'){
	$sql = "delete from users where username = '$id'";
	$query = mysqli_query($conn,$sql);
}
header("location:../view/admin/laundryaccount.php");

 ?>