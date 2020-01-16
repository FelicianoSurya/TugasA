<?php

	session_start();
	include "connection.php";
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "select * from users where username='$username' and password='$password' and status='$status'";
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query);
	$num = mysqli_num_rows($query);

	if($num == 0){
		?>
			<script>
				alert("Mohon tunggu sebentar");
				alert("Maaf, Akun anda tidak terdaftar, mohon register terlebih dahulu");
				location.href = "index.php";
			</script>
		<?php
	}else if($result == 'user'){
		$username = $result['username'];
		$_SESSION['username'] = $username;
		$email = $result['email'];
		$_SESSION['email'] = $email;
		$nohp = $result['nohp'];
		$_SESSION['nohp'] = $nohp;
		?>
			<script>
				window.location.href="home.php";
			</script>
<?php
	}else if($result == 'laundry'){
		$username = $result['username'];
		$_SESSION['username'] = $username;
		?>
			<script>
				window.location.href="laundry/home.php";
			</script>
<?php
	}else if($result == 'admin'){
		$username = $result['username'];
		$_SESSION['username'] = $username;
		$email = $result['email'];
		$_SESSION['email'] = $email;
		$nohp = $result['nohp'];
		$_SESSION['nohp'] = $nohp;
		?>
			<script>
				window.location.href="admin/washme-user.php";
			</script>
<?php
	}else if($result == 'driver'){
		$username = $result['username'];
		$_SESSION['username'] = $username;
		$email = $result['email'];
		$_SESSION['email'] = $email;
		$nohp = $result['nohp'];
		$_SESSION['nohp'] = $nohp;
		?>
			<script>
				window.location.href="driver/driver.php";
			</script>
<?php
	}
?>