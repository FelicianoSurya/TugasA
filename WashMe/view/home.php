<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../asset/css/home1.css">
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
		include "../php/connection.php";
		$sql = "select * from user where username='$username'";
		$query = mysqli_query($conn,$sql);
		$re = mysqli_fetch_array($query);
		$coin = $re['coin'];
		?>
		<div class="flex">
			<div><img src="../asset/images/logo.png" class="logo"></div>
			<div class="search">
				<img src="../asset/images/search.png" alt="search" class="img3">
				<input type="text" id="search" name="search" placeholder="Search Laundry" class="text4">
			</div>
			<div class="flex1">
				<div><img src="../asset/images/coin5.png" class="coin"></div>
				<div class="text"><?php echo $coin ?> coins</div>
			</div>
		</div>
		<hr class="hr1">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10 flex1">
				<a href="washandfold.php">
					<div class="border-mid1">
						<img src="../asset/images/washing.png" class="border-mid">
						<div class="text-mid">Wash & Fold</div>
					</div>
				</a>
				<a href="washandiron.php">
					<div class="border-mid1">
						<img src="../asset/images/ironing.png" class="border-mid">
						<div class="text-mid">Wash & Iron</div>
					</div>
				</a>
				<a href="dryclean.php">
					<div class="border-mid1">
						<img src="../asset/images/clothes.png" class="border-mid">
						<div class="text-mid">Dry Clean</div>
					</div>
				</a>
			</div>
			<div class="col-sm-1"></div>
		</div>
		</div>
		<div class="row background" style="margin-top: 20px;">
			<div class="col-sm-12"></div>
		</div>
		<div class="row" style="padding:20px;">
			<div class="slideshow">
				<div id="demo" class="carousel slide" data-ride="carousel">
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
					</ul>

					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="../asset/images/slideshow/laundry.png" alt="slideshow">
						</div>
						<div class="carousel-item">
							<img src="../asset/images/slideshow/top web'15 v4.jpg" alt="slideshow">
						</div>
					</div>

					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</div>
		</div>
		<div class="row background">
			<div class="col-sm-12"></div>
		</div>
		<div class="border-mid2">
			<div class="flex">
				<div class="text-mid1">Recommended Laundries</div>
				<div class="text-mid2"><a href="recommend.php" style="color:#6dcff6;">See All</a></div>
			</div>
			<div class="flex border1">
				<?php
					$username = $_SESSION['username'];
					include "../php/connection.php";
					$sql1 = "select * from user where username='$username'";
					$query1 = mysqli_query($conn,$sql1);
					$re1 = mysqli_fetch_array($query1);
					$name = $re1['name'];
					$sql = "select * from laundrys";
					$query = mysqli_query($conn,$sql);
					$num = mysqli_num_rows($query);

					for($x=1;$x<=$num;$x++){
						$re = mysqli_fetch_array($query);
						$jalan = $re['alamat'];
						$status = $re['status'];
						$nama = $re['name'];
						$open = $re['time_open'];
						$close = $re['time_close'];
						$harga = $re['harga'];
						$kota = $re['kota'];
						$image = $re['image'];
						$id = $re['id'];
				?>
				<input type="hidden" name="name" id="name" value="<?php echo $name?>">
				<form onclick="saveUser(<?php echo "'$id','$name'";?>)">
				<div class="box-place">
					<div class="image-place">
						<img src="<?php echo $image?>" alt="laundry-ateng">
					</div>
					<div class="info-place">
						<p class="date"><?php echo $nama ?></p>
						<p class="jalan"><?php echo $jalan ?></p>
						<?php
						if($status == "open"){
						 ?>
						<p class="situasi">Open</p>
						<?php } 
						else if($status == 'close'){
						?>
						<p class="situasi" style="color:#ed145b;">Close</p>
						<?php } ?>
						<p class="date"><?php echo $open ?> - <?php echo $close ?></p>
						<div class="a">
							<div class="b">
								<img src="../asset/images/location-mark-blue.png" alt="location">
								<p class="city"><?php echo $kota ?></p>
							</div>
						</div>
					</div>
				</div>
				</form>
				<?php } ?>
			</div>
		</div>
		<div class="row background">
			<div class="col-sm-12"></div>
		</div>
		<div class="border-mid2 ">
			<div class="flex">
				<div class="text-mid1">Shop</div>
				<div class="text-mid3"><a href="washmeshop.php">See All</a></div>
			</div>
			<div>
				<div class="flex al">
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
				<div class="box2">
					<img src="<?php echo $image?>" class="img">
					<div class="text5"><?php echo $nama ?></div>
					<div class="harga">Rp <?php echo $harga ?></div>
					<?php if($rating <= 20){
					 ?>
					<div class="flex1">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star2.png" class="star">
						<img src="../asset/images/star2.png" class="star">
						<img src="../asset/images/star2.png" class="star">
						<img src="../asset/images/star2.png" class="star">
						<div class="text">(<?php echo $rating ?>)</div>
					</div>
					<?php } ?>
					<?php if($rating <= 40 && $rating > 20){
					 ?>
					<div class="flex1">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star2.png" class="star">
						<img src="../asset/images/star2.png" class="star">
						<img src="../asset/images/star2.png" class="star">
						<div class="text">(<?php echo $rating ?>)</div>
					</div>
					<?php } ?>
					<?php if($rating <= 60 && $rating > 40){
					 ?>
					<div class="flex1">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star2.png" class="star">
						<img src="../asset/images/star2.png" class="star">
						<div class="text">(<?php echo $rating ?>)</div>
					</div>
					<?php } ?>
					<?php if($rating <= 80 && $rating > 60){
					 ?>
					<div class="flex1">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star2.png" class="star">
						<div class="text">(<?php echo $rating ?>)</div>
					</div>
					<?php } ?>
					<?php if($rating <= 100 && $rating > 80){
					 ?>
					<div class="flex1">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text">(<?php echo $rating ?>)</div>
					</div>
					<?php } ?>
				</div>
			<?php } ?>
			</div>
		</div>
		<div class="row background">
			<div class="col-sm-12"></div>
		</div>
		<div class="row box3">
			<div class="col-sm-8">
				<div class="text1">Have a laundry? Open your online branch in WashMe</div>
				<div class="text2">Easy to use and trusted. FREE!</div>
				<div class="flex">
					<button class="button" data-toggle="modal" data-target="#openlaundry">Open your Laundry</button>
					<button class="button" data-toggle="modal" data-target="#beDriver">Be a Driver</button>
				</div>
			</div>
			<div class="col-sm-4"><img src="../asset/images/laundry3.png" class="img"></div>
		</div>
		<div class="modal fade" id="openlaundry" role="dialog">
			<div class="modal-dialog modal-xl">
				<div class="modal-content" style="height: 1200px; width: 700px; margin-left: -100px;">
					<div class="modal-header">
						<h4 class="modal-title" style="font-size: 50px;">Request Laundry</h4>
						<button type="button" class="close" data-dismiss="modal" style="font-size: 80px;">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="label" style="font-size: 35px;">Text Request :</label><br>
							<textarea name="req" id="req" autocomplete="off" class="form-control" rows="3" style="font-size: 35px"></textarea>
						</div>
						<div class="form-group">
							<label class="label" style="font-size: 35px;">Owner :</label><br>
							<input type="text" name="owner" id="owner" autocomplete="off" class="form-control" style="height: 80px; font-size: 35px;">
						</div>
						<div class="form-group">
							<label class="label" style="font-size: 35px;">Laundry Name :</label><br>
							<input type="text" name="laundryname" id="laundryname" autocomplete="off" class="form-control" style="height: 80px; font-size: 35px;">
						</div>
						<div class="form-group">
							<label class="label" style="font-size: 35px;">Address :</label><br>
							<input type="text" name="alamat" id="alamat" autocomplete="off" class="form-control" style="height: 80px; font-size: 35px;">
						</div>
						<div class="form-group">
							<label class="label" style="font-size: 35px;">City :</label><br>
							<input type="text" name="kota" id="kota" autocomplete="off" class="form-control" style="height: 80px; font-size: 35px;">
						</div>
						<div class="form-group">
							<label class="label" style="font-size: 35px;">Phone Number :</label><br>
							<input type="text" name="nohp" id="nohp" autocomplete="off" class="form-control" style="height: 80px; font-size: 35px;">
						</div>
					</div>
					<div class="modal-footer">
						<?php
							$username = $_SESSION['username'];
							$date = date('Y-m-d H:i:s');
						?>
						<button type="button" style="font-size: 40px;" class="btn btn-info" data-dismiss="modal" onclick="requestLaundry(<?php echo "'$username','$date'" ?>)">Submit</button>
						<button type="button" style="font-size: 40px;" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="beDriver" role="dialog">
			<div class="modal-dialog modal-xl">
				<div class="modal-content" style="height: 1200px; width: 700px; margin-left: -100px;">
					<div class="modal-header">
						<h4 class="modal-title" style="font-size: 50px;">Request Driver</h4>
						<button type="button" class="close" data-dismiss="modal" style="font-size: 80px;">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="label" style="font-size: 35px;">Text Request :</label><br>
							<textarea name="req" id="req1" autocomplete="off" class="form-control" rows="3" style="font-size: 35px"></textarea>
						</div>
						<div class="form-group">
							<label class="label" style="font-size: 35px;">Name :</label><br>
							<input type="text" name="nama" id="nama" autocomplete="off" class="form-control" style="height: 80px; font-size: 35px;">
						</div>
						<div class="form-group">
							<label class="label" style="font-size: 35px;">Address :</label><br>
							<input type="text" name="alamat" id="alamat1" autocomplete="off" class="form-control" style="height: 80px; font-size: 35px;">
						</div>
						<div class="form-group">
							<label class="label" style="font-size: 35px;">Phone Number :</label><br>
							<input type="text" name="nohp" id="nohp1" autocomplete="off" class="form-control" style="height: 80px; font-size: 35px;">
						</div>
					</div>
					<div class="modal-footer">
						<?php
							$username = $_SESSION['username'];
							$date = date('Y-m-d H:i:s');
						?>
						<button type="button" style="font-size: 40px;" class="btn btn-info" data-dismiss="modal" onclick="requestDriver(<?php echo "'$username','$date'" ?>)">Submit</button>
						<button type="button" style="font-size: 40px;" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<hr class="hr2">
	</div>
	<div class="height">
		<div class="foot">
			<div class="text">Created By :</div>
			<div class="flex1" style="width: 100%;">
				<div>
					<div class="box-in">
						<div>
							<p>David Leonardo</p>
							<p>Feliciano Surya Marcello</p>
						</div>
						<div class="box-in1">
							<p>Fleren Picestelia</p>
							<p>Zauhiung Karyaten</p>
						</div>
					</div>
					<div  class="kelas">
						<p>XI TKJ 2</p>
						<P>SMK KRISTEN IMMANUEL PONTIANAK</P>
					</div>
				</div>
				<img src="../asset/images/logo smk.png" class="img">
			</div>
		</div>
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
		
</body>
</html>
<script src="../js/home3.js"></script>
<script src="../js/userorder5.js"></script>