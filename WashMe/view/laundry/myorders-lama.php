<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../asset/css/laundry/myorderss1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<form>
	<div class="container-fluid-screen">
		<div class="header">My Orders</div>
		<div class="body">
			<div class="flex1">
				<?php 

				include "../../php/connection.php";

				$sql = "select * from tempprogres";
				$query = mysqli_query($conn,$sql);
				$num = mysqli_num_rows($query);
				if($num == 0){
					$not = "No Orders!!";
				?>
				<h1 style="margin-top: 100px; margin-left: 100px;"><?php echo $not?></h1>
				<?php
				}
				else{
					for($x = 1 ; $x <= $num; $x++){
						$re = mysqli_fetch_array($query);
						$alamat_ambil = $re['alamat_ambil'];
						$tgl_ambil = $re['tgl_ambil'];
						$jam_ambil = $re['jam_ambil'];
						$batas_ambil = $re['batas_ambil'];
						$tgl_deliv = $re['tgl_deliv'];
						$jam_deliv = $re['jam_deliv'];
						$batas_deliv = $re['batas_deliv'];
						$alamat_deliv = $re['alamat_deliv'];
						$jlh_kg = $re['jlh_kg'];
						$total = $re['total'];
						$service = $re['service'];
						$user = $re['user'];
				?>
				<div class="box"> 
					<div class="box2">
						<div class="flex">
							<p class="text1">Name</p>
							<p class="text2">:</p>
							<p class="text3"><?php echo $user?></p>
						</div>
						<div class="flex">
							<p class="text1">Phone</p>
							<p class="text2">:</p>
							<p class="text3">08992959698</p>
						</div>
						<div class="box-in">
							<div class="border1">
								<p class="title">Pick Up</p>
								<div class="border-in">
									<p class="text1">Date</p>
									<p class="text2"><?php echo $tgl_ambil?></p>
								</div>
								<div class="border-in">
									<p class="text1">Time</p>
									<p class="text2"><?php echo $jam_ambil?> - <?php echo $batas_ambil?></p>
								</div>
								<div class="border-in">
									<p class="text1">Address</p>
									<p class="text2"><?php echo $alamat_ambil?></p>
								</div>
							</div>
							<div class="border1">
								<p class="title">Delivery</p>
								<div class="border-in">
									<p class="text1">Date</p>
									<p class="text2"><?php echo $tgl_deliv?></p>
								</div>
								<div class="border-in">
									<p class="text1">Time</p>
									<p class="text2"><?php echo $jam_deliv?> - <?php echo $batas_deliv?></p>
								</div>
								<div class="border-in">
									<p class="text1">Address</p>
									<p class="text2"><?php echo $alamat_deliv?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="box2">
						<p class="teks">Laundry Detail</p>
						<div class="content">
							<div class="content-in">
								<p>(<?php echo $jlh_kg?> Kg) <?php echo $service?></p>
								<p><?php echo $total?></p>
							</div>
						</div>
					</div>
					<div class="box2">
						<div class="box3">
							<p>Total Price</p>
							<p><?php echo $total?></p>
						</div>
					</div>
				</div>
				<?php
					}
				}
				?>
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
					<img src="../../asset/images/shopping-list.png" class="img2">
					<div class="text">Orders</div>
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