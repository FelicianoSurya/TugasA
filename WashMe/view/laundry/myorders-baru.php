<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../asset/css/laundry/myorders-baru1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid-screen">
		<div class="header">
			<p>My Orders</p>
			<img src="../../asset/images/history.png">
		</div>
		<div class="content">
			<p>Incoming Requests</p>
		</div>
		<div class="body">
			<div class="flex1">
				<?php 

				include "../../php/connection.php";

				$sql = "select * from temptransaksi";
				$query = mysqli_query($conn,$sql);
				$num = mysqli_num_rows($query);
				if($num == 0){
					$not = "No Incoming Requests!!";
				?>
				<h1 style="margin-top: 100px; margin-left: 100px;"><?php echo $not?></h1>
				<?php
				}
				else{
					for($x = 1 ; $x <= $num; $x++){
						$re = mysqli_fetch_array($query);
						$notransaksi = $re['no'];
						$id = $re['id'];
						$jam_ambil = $re['jam_ambil'];
						$batas_ambil = $re['batas_ambil'];
						$alamat_ambil = $re['alamat_ambil'];
						$tgl_ambil = $re['tgl_ambil'];
						$note_ambil = $re['note_ambil'];
						$jlh_kg = $re['jlh_kg'];
						$tgl_deliv = $re['tgl_deliv'];
						$jam_deliv = $re['jam_deliv'];
						$batas_deliv = $re['batas_deliv'];
						$alamat_deliv = $re['alamat_deliv'];
						$note_deliv = $re['note_deliv'];
						$service = $re['service'];
						$harga = $re['harga'];
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
									<p style="margin:0; font-size: 40px;">Jam Ambil : <?php echo $jam_ambil ?></p>
									<p style="margin:0; font-size: 40px;">Batas Ambil : <?php echo $batas_ambil ?></p>
									<p style="margin:0; font-size: 40px;">Tanggal Ambil : <?php echo $tgl_ambil ?></p>
									<p style="margin:0; font-size: 40px;">Alamat Ambil : <?php echo $alamat_ambil ?></p>
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
					<form action="../../php/showprogres.php" method="POST">
					<input type="hidden" name="notransaksi" value="<?php echo $notransaksi?>">
					<input type="hidden" name="id" value="<?php echo $id?>">
					<input type="hidden" name="tgl_ambil" value="<?php echo $tgl_ambil?>">
					<input type="hidden" name="jam_ambil" value="<?php echo $jam_ambil?>">
					<input type="hidden" name="batas_ambil" value="<?php echo $batas_ambil?>">
					<input type="hidden" name="alamat_ambil" value="<?php echo $alamat_ambil?>">
					<input type="hidden" name="note_ambil" value="<?php echo $note_ambil?>">
					<input type="hidden" name="jlh_kg" value="<?php echo $jlh_kg?>">
					<input type="hidden" name="tgl_deliv" value="<?php echo $tgl_deliv?>">
					<input type="hidden" name="jam_deliv" value="<?php echo $jam_deliv?>">
					<input type="hidden" name="batas_deliv" value="<?php echo $batas_deliv?>">
					<input type="hidden" name="alamat_deliv" value="<?php echo $alamat_deliv?>">
					<input type="hidden" name="note_deliv" value="<?php echo $note_deliv?>">
					<input type="hidden" name="service" value="<?php echo $service?>">
					<input type="hidden" name="harga" value="<?php echo $harga?>">
					<input type="hidden" name="total" value="<?php echo $total?>">
					<input type="hidden" name="user" value="<?php echo $user?>">
					<img src="../../asset/images/girl.png" class="img">
					<div class="box-in">
						<p class="text"><?php echo $user ?></p>
						<p class="text"><?php echo $alamat_ambil ?></p>
						<p class="text"><?php echo $tgl_ambil ?></p>
						<p class="text">-</p>
						<p class="text"><?php echo $tgl_deliv ?></p>
					</div>
					<div class="flex">
						<input type="submit" name="submit" value="Accept" class="button1">
						<input type="submit" name="submit" value="Reject" class="button2">
					</div>
					</form>
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
</body>
</html>