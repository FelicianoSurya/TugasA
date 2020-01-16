<?php 

include 'connection.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmation_password = $_POST['confirmation'];

$submit = $_POST['register'];

if($submit == 'Register'){
	if($username !="" && $email !="" && $password !=""){
		if($password == $confirmation_password){
			$sql = "insert into users(username,password,email,status) values('$username','$password','$email','user')";
			$query = mysqli_query($conn,$sql);
			$sql1 = "insert into user(username,email) values('$username','$email')";
			$query1 = mysqli_query($conn,$sql1);
			header('location:../view/index.php?pesan=berhasil');
		}
		elseif($password != $confirmation_password){
			header('location:../view/register.php?pesan=beda');
		}
	}else{
		header('location:../view/register.php?pesan=required');
	}
}

?>
