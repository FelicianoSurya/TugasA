<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../asset/css/myorders-2.css">
	<title></title>
	<style type="text/css">
		a{
			color: black;
		}
		a:hover{
			color: black;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="container-fluid-fullscreen">
		<div class="header flex5">
			<a href="myorders-1.php"><img src="../asset/images/left-arrow2.png" class="arrow"></a>
			<div class="title">History</div>
		</div>
		<hr>
		<div class="body">
			<a href="myorders.php">
			<div class="flex2">
				<div class="box">
				<form action="../php/prosesorder.php" method="POST">
					<?php
						include "../php/connection.php";

						$id = $_SESSION['id'];

						$sql = "select * from laundrys inner join transaksi on laundrys.id = transaksi.id inner join transaksidetil on laundrys.id = transaksidetil.id";
						$query = mysqli_query($conn,$sql);
						$re = mysqli_fetch_array($query);
						$notransaksi = $re['no'];
						$name = $re['name'];
						$alamat = $re['alamat'];
						$alamat_ambil = $re['alamat_ambil'];
						$tgl = $re['tgl'];
					?>
					<input type="hidden" name="notransaksi" id="notransaksi" value="<?php echo $notransaksi;?>">
					<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
					<div class="flex">
						<div class="top1">Pick Up</div>
						<div class="top2">Order <?php echo $tgl;?></div>
					</div>
					<div class="flex1 top">
						<img src="../asset/images/destination.png" class="img">
						<div class="left">
							<div class="text"><?php echo $alamat_ambil;?></div>
							<hr class="top">
							<div class="text"><?php echo $name;?></div>
							<div class="text"><?php echo $alamat;?></div>
						</div>
					</div>
					<img src="../asset/images/maps.jpg" class="img1">
					<div class="text1">double click map to zoom</div>
					<div class="profile">
						<div class="center">
							<img src="../asset/images/driver.png" class="img">
							<div class="text2">Andi</div>
							<div class="text2">08123456789</div>
						</div>
					</div>
					<div class="flex">
						<button class="button">
							<img src="../asset/images/mail-send.png" class="img1">
							<p>Send Message</p>
						</button>
						<button class="button">
							<img src="../asset/images/telephone.png" class="img2">
							<p>Call</p>
						</button>
					</div>
			</div>
			</a>
		</div>
		<div class="flex2">
			<input type="submit" name="cancel" id="cancel" value="Cancel" class="button2">
		</div>
				</form>
				</div>
		<div class="footer">
			<a href="home.php">
				<div class="box4">
					<img src="../asset/images/home.png" class="img2">
					<div class="text">Home</div>
				</div>
			</a>
			<a href="myorders-1.php">
				<div class="box4">
					<img src="../asset/images/shopping-list2.png" class="img2">
					<div class="text1">Orders</div>
				</div>
			</a>
			<a href="washmeshop.php">
				<div class="box4">
					<img src="../asset/images/shopping-cart2.png" class="img2">
					<div class="text1">WashMe Shop</div>
				</div>
			</a>
			<a href="myaccount.php">
				<div class="box4">
					<img src="../asset/images/profile2.png" class="img2">
					<div class="text1">Account</div>
				</div>
			</a>
		</div>
	</div>
</body>
</html>