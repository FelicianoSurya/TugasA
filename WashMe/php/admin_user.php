<?php 

include "connection.php";

$username = $_GET['id'];
$submit = $_GET['submit'];

if($submit == 'Delete'){
	$sql = "delete from users where username='$username'";
	$query = mysqli_query($conn,$sql);
}
header("location:../view/admin/useraccount.php");

 ?>