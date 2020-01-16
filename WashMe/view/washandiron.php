<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../asset/css/washandiron.css">
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
				<a href="home.php">
					<div class="logo">
						<img src="../asset/images/left-arrow1.png" alt="image">
					</div>
				</a>
				<div class="list">
					<div class="geser">
						<h1>Wash & Iron Services</h1>
					</div>
				</div>
			</header>
		</div>
	</div>
	<div class="search">
		<img src="../asset/images/search.png" alt="search" class="img3">
		<input type="text" id="search" name="search" placeholder="Search Laundry" class="text4">
	</div>
	<div class="content">
		<div class="content-in">
			<?php
			include "../php/connection.php";
			$username = $_SESSION['username'];
			$sql1 = "select * from user where username='$username'";
			$query1 = mysqli_query($conn,$sql1);
			$re1 = mysqli_fetch_array($query1);
			$name = $re1['name'];
			$sql = "select * from laundrys where service = 'wash&iron'";
			$query = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($query);
			for($x=1;$x <=$num;$x++){
				$re = mysqli_fetch_array($query);
				$id = $re['id'];
				$nama = $re['name'];
				$alamat = $re['alamat'];
				$rating = $re['rating'];
				$kota = $re['kota'];
				$time_close = $re['time_close'];
				$status = $re['status'];
				$service = $re['service'];
				$harga = $re['harga'];
				$image = $re['image'];
			 ?>
			 <form onclick="saveUser(<?php echo "'$id','$name'";?>)">
			 	<input type="text" name="nama" id="nama" value="<?php echo $name?>">
				<div class="kotak-besar">
					<div class="kotak-kiri">
						<img src="<?php echo $image?>" alt="images">
					</div>
					<div class="kotak-kanan">
						<div class="teks">
							<p class="teks1" id="name" name="name"><?php echo $nama ?></p>
							<p class="kota" id="kota" name="kota"><?php echo $kota ?></p>
						</div>
						<p class="naik" id="alamat" name="alamat"><span style="font-size: 40px;"><?php echo $alamat ?></span></p>
						<p class="naikk" id="rating" name="rating"><img src="../asset/images/star1.png" alt="images"><span><?php echo $rating ?></span></p>
						<input type="hidden" id="time_close" name="time_close" value="<?php echo($time_close)?>">
						<input type="hidden" id="status" name="status" value="<?php echo($status)?>">
						<input type="hidden" id="service" name="service" value="<?php echo($service)?>">
						<input type="hidden" id="harga" name="harga" value="<?php echo($harga)?>">
					</div>
				</div>
			</form>
			<?php } ?>
		</div>
	</div>
</div>
<script src="../js/userorder5.js"></script>
</body>
</html>