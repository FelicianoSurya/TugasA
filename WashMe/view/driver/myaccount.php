<?php
	include '../security.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../asset/css/driver/myaccount.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid-fullscreen">
	<div class="header">
		<div class="topic-top">
			<header>
				<div>
					<h4 class="title">My Account</h4>
				</div>
			</header>
		</div>
	</div>
	<hr class="hr1">
	<div class="content">
		<div class="content-in">
			<?php
			$username = $_SESSION['username'];
			include "../../php/connection.php";
			$sql = "select * from driver where username='$username'";
			$query = mysqli_query($conn,$sql);
			$re = mysqli_fetch_array($query);
			$nama = $re['nama'];
			$nohp = $re['nohp'];
			?>
			<div class="picture">
				<img src="../../asset/images/boy.png">
			</div>
			<div class="user">
				<p class="name"><?php echo $nama ?></p>
				<p class="phone"><?php echo $nohp; ?></p>
			</div>
			<div class="edit1">
				<button type="button" id="profile"><a href="myaccount2.php" style="color:white">Edit Profile</a></button>
			</div>
		</div>
		<hr class="hr1">
		<div class="content-in3">
			<div class="logout">
				<a href="../logout.php"><button type="button" id="logout">logout</button></a>
			</div>
		</div>
	</div>
	<div class="flex footer">
		<a href="driver.php">
			<div class="box4">
				<img src="../../asset/images/shopping-list2.png" class="img2">
				<div class="text1">Home</div>
			</div>
		</a>
			<a href="myorders-1.php">
			<div class="box4">
				<img src="../../asset/images/history.png" class="img2">
				<div class="text1">History</div>
			</div>
		</a>
			<a href="myaccount.php">
			<div class="box4">
				<img src="../../asset/images/profile.png" class="img2">
				<div class="text">My Account</div>
			</div>
		</a>
	</div>
</div>
<script src="../js/rating.js"></script>
</body>
</html>