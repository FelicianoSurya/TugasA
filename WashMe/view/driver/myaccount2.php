<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../asset/css/driver/myaccount2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid-screen">	
		<form action="../../php/edituser1.php" method="POST">
		<?php
			$username = $_SESSION['username'];
			include "../../php/connection.php";
			$sql = "select * from driver where username='$username'";
			$query = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($query);
			$re = mysqli_fetch_array($query);
			$nama = $re['nama'];
			$nohp = $re['nohp'];
			$alamat = $re['alamat'];
		?>
		<div class="header">
			<a href="myaccount.php"><img src="../../asset/images/left-arrow1.png" class="img"></a>
			<div class="flex1">
				<p class="title">Edit your account</p>
				<?php
					if($num == 0){
				?>
					<input type="submit" class="button" value="Add" name="submit" id="submit">
				<?php 
					}
					else{
				?>
					<input type="submit" class="button" value="Update" name="submit" id="submit">
				<?php	
					}
				?>
			</div>
		</div>
		<hr class="hr">
		<div class="body">
			<input type="hidden" name="username" id="username" value="<?php echo $username?>">
			<div class="border1">
				<p class="text">Full Name</p>
				<input type="text" name="nama" id="nama" class="input" value="<?php echo $nama?>">
				<hr class="hr">
			</div>
			<div class="border1">
				<p class="text">Address</p>
				<input type="text" name="alamat" id="alamat" class="input" value="<?php echo $alamat?>">
				<hr class="hr">
			</div>
			<div class="border1">
				<p class="text">Phone Number</p>
				<div class="flex top">
					<div class="flex border-in">
						<img src="../../asset/images/indonesia.png" class="img">
					</div>
					<div class="left">
						<input type="text" name="nohp" id="nohp" class="input" value="<?php echo $nohp?>">
						<hr class="hr">
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>
</body>
</html>