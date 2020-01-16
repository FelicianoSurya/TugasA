<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../asset/css/recommend1.css">
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
						<h1>Recommended</h1>
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
			$sql = "select * from laundrys";
			$query = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($query);
			for($x=1;$x <=$num;$x++){
				$re = mysqli_fetch_array($query);
				$name = $re['name'];
				$alamat = $re['alamat'];
				$rating = $re['rating'];
				$kota = $re['kota'];
			 ?>
			<a href="washme-order.php">
				<div class="kotak-besar">
					<div class="kotak-kiri">
						<img src="../asset/images/laundryfresco.jpg" alt="images">
					</div>
					<div class="kotak-kanan">
						<div class="teks">
							<p class="teks1"><?php echo $name ?></p>
							<p class="kota"><?php echo $kota ?></p>
						</div>
						<p class="naik"><span style="font-size: 40px;"><?php echo $alamat ?></span></p>
						<p class="naikk"><img src="../asset/images/star1.png" alt="images"><span><?php echo $rating ?></span></p>
					</div>
				</div>
			</a>
			<?php } ?>
		</div>
	</div>
</div>
</body>
</html>