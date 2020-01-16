<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../asset/css/laundry/myaccount3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<form action="../../php/editlaundry.php" method="POST">
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
			<input type="submit" name="submit" id="submit" value="update" class="submit">
		</div>
		<div class="box">
			<img src="#" id="img" alt="Preview Gambar">
			<input type="file" name="image" id="preview" class="img1" value="<?php echo $image?>">
		</div>
		<div class="box1">
			<div>
				<div class="form-group">
					<input type="text" name="name" id="name" placeholder="Laundry Name" class="form-control" style="font-size: 40px;height: 100px;" value="<?php echo $name?>">
				</div>
			</div>
			<div>
				<div class="form-group">
					<input type="text" name="owner" id="owner" placeholder="Owner" class="form-control" style="font-size: 40px;height: 100px;" value="<?php echo $owner?>">
				</div>
			</div>
			<div>
				<div class="form-group">
					<input type="text" name="alamat" id="alamat" placeholder="Location" class="form-control" style="font-size: 40px;height: 100px;" value="<?php echo $alamat?>">
				</div>
			</div>
			<div>
				<div class="form-group">
					<input type="text" name="nohp" id="nohp" placeholder="Phone Number" class="form-control" style="font-size: 40px;height: 100px;" value="<?php echo $nohp?>">
				</div>
			</div>
			<div>
				<div class="form-group">
					<input type="time" name="time_open" id="time_open" placeholder="Time Open" class="form-control" style="font-size: 40px;height: 100px;" value="<?php echo $time_open?>">
				</div>
			</div>
			<div>
				<div class="form-group">
					<input type="time" name="time_close" id="time_close" placeholder="Time Close" class="form-control" style="font-size: 40px;height: 100px;" value="<?php echo $time_close?>">
				</div>
			</div>
			<div>
				<div class="form-group">
					<select type="time" name="service" id="service" class="form-control" style="font-size: 40px;height: 100px;">
						<option value="<?php echo $service?>">Service</option>
						<option value="wash&fold">Wash & Fold</option>
						<option value="wash&iron">Wash & Iron</option>
						<option value="dryclean">Dry Clean</option>
					</select>
				</div>
			</div>
			<div>
				<div class="form-group">
					<input type="text" name="harga" id="harga" placeholder="Price" class="form-control" style="font-size: 40px;height: 100px;" value="<?php echo $harga?>">
				</div>
			</div>
			<div>
				<div class="form-group">
					<input type="text" name="kota" id="kota" placeholder="City" class="form-control" style="font-size: 40px;height: 100px;" value="<?php echo $kota?>">
				</div>
			</div>
		</div>
	</div>
</form>
</body>
</html>
<script src="../../js/shop.js"></script>