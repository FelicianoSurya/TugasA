<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../asset/css/laundry/myaccount2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid-screen">
		<?php
			session_start();
			$username = $_SESSION['username'];
			include "../../php/connection.php";
			$sql = "select * from laundrys where username = '$username'";
			$query = mysqli_query($conn,$sql);
			$re = mysqli_fetch_array($query);
			$image = $re['image'];
			$name = $re['name'];
			$owner = $re['owner'];
			$alamat = $re['alamat'];
			$nohp = $re['nohp'];
			$harga = $re['harga'];
			$time_open = $re['time_open'];
			$time_close = $re['time_close'];
			$service = $re['service'];
			$kota = $re['kota'];
		?>
		<input type="hidden" name="username" id="username" value="<?php echo $username?>">
		<div class="flex header">
			<div class="title">My Account</div>
			<a href="myaccount2.php"><input type="button" name="submit" id="submit" value="update" class="submit"></a>
		</div>
		<div class="box">
			<img src="../<?php echo $image?>">
		</div>
		<div class="box1">
			<div class="flex">
				<div class="text">Laundry Name</div>
				<div class="text1">:</div>
				<div class="text2"><?php echo $name?></div>
			</div>
			<div class="flex">
				<div class="text">Owner Laundry</div>
				<div class="text1">:</div>
				<div class="text2"><?php echo $owner?></div>
			</div>
			<div class="flex">
				<div class="text">Location</div>
				<div class="text1">:</div>
				<div class="text2"><?php echo $alamat?></div>
			</div>
			<div class="flex">
				<div class="text">Phone</div>
				<div class="text1">:</div>
				<div class="text2"><?php echo $nohp?></div>
			</div>
			<div class="flex">
				<div class="text">Service</div>
				<div class="text1">:</div>
				<div class="text2"><?php echo $service?></div>
			</div>
			<div class="flex">
				<div class="text">Time Open</div>
				<div class="text1">:</div>
				<div class="text2"><?php echo $time_open?></div>
			</div>
			<div class="flex">
				<div class="text">Time Close</div>
				<div class="text1">:</div>
				<div class="text2"><?php echo $time_close?></div>
			</div>
			<div class="flex">
				<div class="text">Price</div>
				<div class="text1">:</div>
				<div class="text2"><?php echo $harga?></div>
			</div>
			<div class="flex">
				<div class="text">City</div>
				<div class="text1">:</div>
				<div class="text2"><?php echo $kota?></div>
			</div>
			<div class="flex" style="justify-content: center;align-items: center; margin-top: 50px;">
				<a href="../logout.php"><button type="button" class="btn btn-danger" id="logout" style="font-size: 40px;">Logout</button></a>
			</div>
		</div>
		<div class="footer">
			<a href="home.php">
				<div class="box4">
					<img src="../../asset/images/home2.png" class="img2">
					<div class="text1">Home</div>
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
					<img src="../../asset/images/profile.png" class="img2">
					<div class="text">Account</div>
				</div>
			</a>
		</div>
	</div>
</body>
</html>