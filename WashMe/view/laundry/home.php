<?php
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../asset/css/laundry/home.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<form>
	<div class="container-fluid-screen">
		<?php
		session_start();

		$username = $_SESSION['username'];
			include "../../php/connection.php";
			$sql = "select * from laundrys where username = '$username'";
			$query = mysqli_query($conn,$sql);
			$re = mysqli_fetch_array($query);
			$id = $re['id'];
			$name = $re['name'];
			$alamat = $re['alamat'];
			$rating = $re['rating'];
			$kota = $re['kota'];
			$time_open = $re['time_open'];
			$time_close = $re['time_close'];
			$status = $re['status'];
			$service = $re['service'];
			$harga = $re['harga'];
			$image = $re['image'];
		?>
		<div class="header">
			<img src="../<?php echo $image?>" class="img">
			<div class="border1">
				<p class="text"><?php echo $name?></p>
				<p class="text1"><?php echo $alamat?></p>
				<div class="flex">
					<img src="../../asset/images/location-mark-blue.png" class="star">
					<p class="text1"><?php echo $kota?></p>
				</div>
				<div class="flex">
					<img src="../../asset/images/star1.png" class="star">
					<p class="text1">Rating <?php echo $rating?></p>
				</div>
			</div>
			<div class="border2">
				<p class="text"><?php echo $time_open?> - <?php echo $time_close?></p>
				<p class="text1"><?php echo $status?></p>
				<div class="flex">
					<div class="open">Open</div>
					<div class="closed">Closed</div>
				</div>
				<div class="box">
					<p class="contact">Contact Us</p>
					<div class="flex1">
						<img src="../../asset/images/facebook.png" class="sosmed">
						<img src="../../asset/images/google.png" class="sosmed">
						<img src="../../asset/images/instagram.png" class="sosmed">
					</div>
				</div>
			</div>
		</div>
		<div class="body">
			<div class="box">
				<p class="text">Review</p>
				<div class="box-in">
					<img src="../../asset/images/laundry-ateng.jpg" class="img">
					<div class="left">
						<div class="flex2">
							<p class="text2"><?php echo $name?></p>
							<button class="button">Send</button>
						</div>
						<input type="text" name="comment" id="comment" placeholder="Type your comment here" class="input">
					</div>
				</div>
			</div>
			<div class="box2 top">
				<img src="../../asset/images/boy.png" class="img">
				<div class="content">
					<div class="nama">
						<p>Feliciano Surya Marcello</p>
						<p>User</p>
					</div>
					<p class="komentar">Laundry ini sangat bagus. Saya senang dengan pelayanan yang sangat baik.</p>
					<div class="flex">
						<p class="jam">5 hours ago</p>
						<div class="like">
							<img src="../../asset/images/like.png">
							<p class="jlh">100</p>
						</div>
						<p class="reply">Reply</p>
					</div>
				</div>
			</div>
			<div class="box2">
				<img src="../../asset/images/boy.png" class="img">
				<div class="content">
					<div class="nama">
						<p>Feliciano Surya Marcello</p>
						<p>User</p>
					</div>
					<p class="komentar">Laundry ini sangat bagus. Saya senang dengan pelayanan yang sangat baik.</p>
					<div class="flex">
						<p class="jam">5 hours ago</p>
						<div class="like">
							<img src="../../asset/images/like.png">
							<p class="jlh">100</p>
						</div>
						<p class="reply">Reply</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<a href="home.php">
				<div class="box4">
					<img src="../../asset/images/home.png" class="img2">
					<div class="text">Home</div>
				</div>
			</a>
			<a href="menu-order.php">
				<div class="box4">
					<img src="../../asset/images/shopping-list2.png" class="img2">
					<div class="text1">Orders</div>
				</div>
			</a>
			<a href="shopproduct.php">
				<div class="box4">
					<img src="../../asset/images/shopping-cart2.png" class="img2">
					<div class="text1">WashMe Shop</div>
				</div>
			</a>
			<a href="myaccount.php">
				<div class="box4">
					<img src="../../asset/images/profile2.png" class="img2">
					<div class="text1">Account</div>
				</div>
			</a>
		</div>
	</div>
</form>
</body>
</html>