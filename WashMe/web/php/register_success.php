<?php 
error_reporting(0);

include 'connection.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmation_password = $_POST['confirmation'];

$submit = $_POST['register'];

if($submit == 'Register'){
	if($username !="" && $email !="" && $password !=""){
		if($password == $confirmation_password){
			$sql = "insert into users (username,password,email,status) values ('$username','$password','$email','user')";
			$query = mysqli_query($conn,$sql);
			header('location:../view/login.php?pesan=berhasil');	
		}
		elseif($password != $confirmation_password){
			header('location:../view/register.php?pesan=beda');
		}
	}else{
		header('location:../view/register.php?pesan=required');
	}
}

?>
