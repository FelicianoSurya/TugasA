<?php 

session_start();

include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($conn,"select * from users where username='$username' and password='$password'");

$cek = mysqli_num_rows($query);

$hasil = mysqli_fetch_array($query);
$status1 = $hasil['status'];
$email = $hasil['email'];

if($cek > 0){
	if($status1 == 'user'){
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['status'] = $status1;
	header('location:../view/home.php');
	}
	elseif($status1 == 'laundry'){
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['status'] = $status1;
	header('location:../view/laundry/home.php');
	}
	elseif($status1 == 'admin'){
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['status'] = $status1;
		header('location:../view/admin/washme-user.php');
	}
	elseif($status1 == 'driver'){
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['status'] = $status1;
		header('location:../view/driver/driver.php');
	}
}else{
	header('location:../view/login.php?pesan=gagal');
}
	
?>