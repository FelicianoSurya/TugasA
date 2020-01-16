<?php 
include "../connection.php";

$id = $_GET['id'];

$submit = $_GET['submit'];

if($submit == 'Reject'){
	$sql = "delete from request_laundry where id = '$id'";
	$query = mysqli_query($conn,$sql);
}
header("location:../../view/admin/admin-request.php");
 
 ?>
