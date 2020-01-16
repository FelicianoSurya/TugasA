<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../asset/css/driver/driver1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid-screen">
		<div class="header">
			<img src="../../asset/images/logo.png">
			<p>Driver</p>
		</div>
		<div class="body">
			<div class="flex1">
				<?php 

				include "../../php/connection.php";

				$sql = "select * from temptransaksi";
				$query = mysqli_query($conn,$sql);
				$num = mysqli_num_rows($query);
				for($x = 1 ; $x <= $num; $x++){
					$re = mysqli_fetch_array($query);
					$jam = $re['jam_ambil'];
					$batas = $re['batas_ambil'];
					$alamat = $re['alamat_ambil'];
					$tgl_ambil = $re['tgl_ambil'];
					$note_ambil = $re['note_ambil'];
					$jlh_kg = $re['jlh_kg'];
					$total = $re['total'];
					$user = $re['user'];
				 ?>
				<div class="box">
					<div class="flex-end"><button class="button" data-toggle="modal" data-target="#seemore">Details</button></div>
					<div class="modal fade" id="seemore" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content" style="width: 800px; margin-left: -145px;">
								<div class="modal-header">
									<img style="width:100px;" src="../../asset/images/girl.png" alt="boy">
									<h3 style="padding-left:10px; font-size: 60px;"><?php echo $user ?></h3>
									<button type="button" class="close" data-dismiss="modal" style="font-size: 80px;">&times;</button>
								</div>
								<div class="modal-body" style="padding:20px;">
									<p style="margin:0; font-size: 40px;">Jam Ambil : <?php echo $jam ?></p>
									<p style="margin:0; font-size: 40px;">Batas Ambil : <?php echo $batas ?></p>
									<p style="margin:0; font-size: 40px;">Tanggal Ambil : <?php echo $tgl_ambil ?></p>
									<p style="margin:0; font-size: 40px;">Alamat Ambil : <?php echo $alamat ?></p>
									<p style="margin:0; font-size: 40px;">Note : <?php echo $note_ambil ?></p>
									<p style="margin:0; font-size: 40px;">Jumlah(kg) : <?php echo $jlh_kg ?></p>
									<p style="margin:0; font-size: 40px;">Total Pesanan : <?php echo $total ?></p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-md btn-danger" data-dismiss="modal" style="font-size: 40px;">Close</button>
								</div>
							</div>
						</div>
					</div>
					<img src="../../asset/images/girl.png" class="img">
					<div class="box-in">
						<p class="text"><?php echo $user?></p>
						<p class="text"><?php echo $alamat ?></p>
						<p class="text"><?php echo $tgl_ambil ?></p>
						<p class="text">-</p>
						<p class="text"><?php echo $jam ?></p>
					</div>
					<div class="flex">
						<button class="button1">Accept</button>
						<button class="button2">Reject</button>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
		<div class="flex footer">
			<a href="driver.php">
				<div class="box4">
					<img src="../../asset/images/shopping-list.png" class="img2">
					<div class="text">Home</div>
				</div>
			</a>
				<a href="myorders-1.php">
				<div class="box4">
					<img src="../../asset/images/history.png" class="img2">
					<div class="text1">History</div>
				</div>
			</a>
				<a href="myaccount.php">
				<div class="box4">
					<img src="../../asset/images/profile2.png" class="img2">
					<div class="text1">My Account</div>
				</div>
			</a>
		</div>
	</div>
</body>
</html>