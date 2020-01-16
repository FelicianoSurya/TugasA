<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../asset/css/washmeshop1.css">
	<title></title>
</head>
<body>
<form>
	<div class="container-fluid-screen">
		<div class="row">
			<div class="col-sm-12 header">WashMe Shop</div>
		</div>
		<hr class="hr1">
		<div class="background flex1">
			<div class="search">
				<img src="../asset/images/search.png" alt="search" class="img">
				<input type="text" id="search" name="search" placeholder="Search Laundry" class="text" onkeyup="search_barang(this.value)">
			</div>
			<div>
				<img src="../asset/images/cart-of-ecommerce.png" class="img3">
			</div>
		</div>
		<div class="background2">
			<select class="kategori">
				<option>Categories</option>
				<option>Shop</option>
			</select>
			<div class="flex1">
				<div class="border">
					<a href="washme-shopproduct.php"><img src="../asset/images/ironing.png" class="img"></a>
					<div class="text">Iron</div>
				</div>
				<div class="border">
					<a href="washme-shopproduct.php"><img src="../asset/images/hanger.png" class="img"></a>
					<div class="text">Hanger</div>
				</div>
				<div class="border">
					<a href="washme-shopproduct.php"><img src="../asset/images/dry.png" class="img"></a>
					<div class="text">Clothes Line</div>
				</div>
			</div>
		</div>
		<div class="background3">
			<div class="iron">Iron</div>
			<div class="background-in flex" id="cari">
				<?php
					include "../php/connection.php";
					$sql = "select * from products";
					$query = mysqli_query($conn,$sql);
					$num = mysqli_num_rows($query);
					for($x=1;$x<=$num;$x++){
						$re = mysqli_fetch_array($query);
						$kode = $re['kode_product'];
						$nama = $re['nama_product'];
						$kategori = $re['kategori'];
						$harga = $re['harga'];
						$stok = $re['stok'];
						$shop = $re['shop'];
						$rating = $re['rating'];
						$image = $re['image'];
				?>
				<div class="border-big">
					<div class="border-bot">
						<img src="<?php echo "$image" ?>" class="img" alt="images">
						<div class="text"><?php echo $nama ?></div>
						<div class="harga">Rp <?php echo $harga ?></div>
						<?php if($rating <= 20){
						 ?>
						<div class="flex2">
							<img src="../asset/images/star1.png" class="star"><?php echo $rating ?>
						</div>
						<?php } ?>
						<?php if($rating <= 40 && $rating > 20){
						 ?>
						<div class="flex2">
							<img src="../asset/images/star1.png" class="star"><?php echo $rating ?>
						</div>
						<?php } ?>
						<?php if($rating <= 60 && $rating > 40){
						 ?>
						<div class="flex2">
							<img src="../asset/images/star1.png" class="star"><?php echo $rating ?>
						</div>
						<?php } ?>
						<?php if($rating <= 80 && $rating > 60){
						 ?>
						<div class="flex2">
							<img src="../asset/images/star1.png" class="star"><?php echo $rating ?>
						</div>
						<?php } ?>
						<?php if($rating <= 100 && $rating > 80){
						 ?>
						<div class="flex2">
							<img src="../asset/images/star1.png" class="star"><?php echo $rating ?>
						</div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="background3 top">
			<div class="iron">hanger</div>
			<div class="background-in flex" id="cari">
				<?php
					include "../php/connection.php";
					$sql = "select * from products";
					$query = mysqli_query($conn,$sql);
					$num = mysqli_num_rows($query);
					for($x=1;$x<=$num;$x++){
						$re = mysqli_fetch_array($query);
						$kode = $re['kode_product'];
						$nama = $re['nama_product'];
						$kategori = $re['kategori'];
						$harga = $re['harga'];
						$stok = $re['stok'];
						$shop = $re['shop'];
						$rating = $re['rating'];
						$image = $re['image'];
				?>
				<div class="border-big">
					<div class="border-bot">
						<img src="<?php echo "$image" ?>" class="img" alt="images">
						<div class="text"><?php echo $nama ?></div>
						<div class="harga">Rp <?php echo $harga ?></div>
						<?php if($rating <= 20){
						 ?>
						<div class="flex2">
							<img src="../asset/images/star1.png" class="star"><?php echo $rating ?>
						</div>
						<?php } ?>
						<?php if($rating <= 40 && $rating > 20){
						 ?>
						<div class="flex2">
							<img src="../asset/images/star1.png" class="star"><?php echo $rating ?>
						</div>
						<?php } ?>
						<?php if($rating <= 60 && $rating > 40){
						 ?>
						<div class="flex2">
							<img src="../asset/images/star1.png" class="star"><?php echo $rating ?>
						</div>
						<?php } ?>
						<?php if($rating <= 80 && $rating > 60){
						 ?>
						<div class="flex2">
							<img src="../asset/images/star1.png" class="star"><?php echo $rating ?>
						</div>
						<?php } ?>
						<?php if($rating <= 100 && $rating > 80){
						 ?>
						<div class="flex2">
							<img src="../asset/images/star1.png" class="star"><?php echo $rating ?>
						</div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="background3 top">
			<div class="iron">Clothes Line</div>
			<div class="background-in flex" id="cari">
				<?php
					include "../php/connection.php";
					$sql = "select * from products";
					$query = mysqli_query($conn,$sql);
					$num = mysqli_num_rows($query);
					for($x=1;$x<=$num;$x++){
						$re = mysqli_fetch_array($query);
						$kode = $re['kode_product'];
						$nama = $re['nama_product'];
						$kategori = $re['kategori'];
						$harga = $re['harga'];
						$stok = $re['stok'];
						$shop = $re['shop'];
						$rating = $re['rating'];
						$image = $re['image'];
				?>
				<div class="border-big">
					<div class="border-bot">
						<img src="<?php echo "$image" ?>" class="img" alt="images">
						<div class="text"><?php echo $nama ?></div>
						<div class="harga">Rp <?php echo $harga ?></div>
						<?php if($rating <= 20){
						 ?>
						<div class="flex2">
							<img src="../asset/images/star1.png" class="star"><?php echo $rating ?>
						</div>
						<?php } ?>
						<?php if($rating <= 40 && $rating > 20){
						 ?>
						<div class="flex2">
							<img src="../asset/images/star1.png" class="star"><?php echo $rating ?>
						</div>
						<?php } ?>
						<?php if($rating <= 60 && $rating > 40){
						 ?>
						<div class="flex2">
							<img src="../asset/images/star1.png" class="star"><?php echo $rating ?>
						</div>
						<?php } ?>
						<?php if($rating <= 80 && $rating > 60){
						 ?>
						<div class="flex2">
							<img src="../asset/images/star1.png" class="star"><?php echo $rating ?>
						</div>
						<?php } ?>
						<?php if($rating <= 100 && $rating > 80){
						 ?>
						<div class="flex2">
							<img src="../asset/images/star1.png" class="star"><?php echo $rating ?>
						</div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<hr class="hr2">
		<div class="flex1 footer">
			<a href="home.php">
				<div class="box4">
					<img src="../asset/images/home2.png" class="img2">
					<div class="text1">Home</div>
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
					<img src="../asset/images/shopping-cart.png" class="img2">
					<div class="text">WashMe Shop</div>
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
	<script src="../js/washmeshop1.js"></script>
</form>
</body>
</html>