<html>
<head>
	<title>Wash Me</title>
	<link rel="icon" href="../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../asset/css/home2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="body">
		<?php include "kiri.php" ?>
			<div class="right">
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
							<div class="carousel-item">
								<img src="../asset/images/slideshow/3.png" alt="slideshow">
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
				<div class="search">
					<div class="search-left">
						<input type="text" id="search" name="search" placeholder="Search Laundry">
						<button>
							<img src="../asset/images/search.png" alt="search">
						</button>
					</div>
					<div class="select-right">
						<select name="categories" id="category" class="">
							<option>Wash & Fold</option>
							<option>Wash & Iron</option>
							<option>Dry Cleaning</option>
						</select>
					</div>
				</div>
				<div class="recommended">
					<div class="topic-recommended">
						<div class="topic-left">
							<p>Recommended Laundries</p>
						</div>
						<div class="see-all">
							<a href="#">See All</a>
						</div>
					</div>
					<div class="place-info">
						<?php

						include "../php/connection.php" ;
						$sql = 'select * from laundrys';
						$query = mysqli_query($conn,$sql);
						$num = mysqli_num_rows($query);

						for($x = 1;$x<=$num;$x++){
							$re = mysqli_fetch_array($query);
							$name = $re['name'];
							$jalan = $re['alamat'];
							$status = $re['status'];
							$nama = $re['name'];
							$open = $re['time_open'];
							$close = $re['time_close'];
							$harga = $re['harga'];
							$kota = $re['kota'];

						?>
						<div class="box-place">
							<div class="image-place">
								<img src="../asset/images/laundry-ateng.jpg" alt="laundry-ateng">
							</div>
							<div class="info-place">
								<p class="name"><?php echo $name; ?></p>
								<p class="jalan"><?php echo $jalan ?></p>
								<p class="situasi"><?php echo $status ?></p>
								<p class="date"><?php echo $open ?> - <?php echo $close ?></p>
								<div class="a">
									<p class="harga"><?php echo $harga ?> / kg</p>
									<div class="b">
										<img src="../asset/images/location-mark-blue.png" alt="location">
										<p class="city"><?php echo $kota ?></p>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
				<div class="req-laundry">
					<div class="isi">
						<div class="question">
							<p>Have a Laundry? Open your online branch in WashMe</p>
							<p  class="easy">Easy to use and trusted. FREE!</p>
							<div class="bot" style="margin-top:20px;">
								<button class="btn btn-lg btn-danger" data-toggle="modal" data-target="#openlaundry">Open Your Laundry</button>
								<a href="">Learn More</a>
							</div>
						</div>
						<div class="img">
							<img src="../asset/images/laundry3.png" alt="laundry">
						</div>
					</div>
				</div>
				<div class="modal fade" id="openlaundry" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Request Laundry</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<textarea style="width: 100%;" name="req" id="req" rows="3"></textarea>
							</div>
							<div class="modal-footer">
								<?php
								$username = $_SESSION['username'];
								$date = date('Y-m-d H:i:s');
								 ?>
								<button type="button" class="btn btn-info" data-dismiss="modal" onclick="request_laundry(<?php echo "'$username','$date'" ?>)">Submit</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>
<script src="../js/home.js"></script>
