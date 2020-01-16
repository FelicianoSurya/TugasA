<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../asset/css/washme-order6.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid-screen">
		<div class="header">
			<a href="washme-order5.php"><img src="../asset/images/left-arrow2.png"></a>
			<div class="atas"><p>Confirmation</p></div>
		</div>
		<div class="body">
		<form action="../php/prosesorder.php" method="POST">
			<?php
				include "../php/connection.php";

				$id = $_SESSION['id'];

				$sql = "select * from laundrys inner join temptransaksi on laundrys.id = temptransaksi.id";
				$query = mysqli_query($conn,$sql);
				$num = mysqli_num_rows($query);
				$res = mysqli_fetch_array($query);
				$notemp = $res['notemp'];
				$notransaksi = $res['no'];
				$tgl_ambil = $res['tgl_ambil'];
				$jam_ambil = $res['jam_ambil'];
				$batas_ambil = $res['batas_ambil'];
				$alamat_ambil = $res['alamat_ambil'];
				$alamat = $res['alamat'];
				$jlh_kg = $res['jlh_kg'];
				$service = $res['service'];
				$total = $res['total'];
				$name = $res['name'];
				$tgl_deliv = $res['tgl_deliv'];
			?>
			<input type="hidden" name="notransaksi" id="notransaksi" value="<?php echo $notransaksi;?>">
			<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
			<input type="hidden" name="jlh_kg" id="jlh_kg" value="<?php echo $jlh_kg;?>">
			<input type="hidden" name="tgl_deliv" id="tgl_deliv" value="<?php echo $tgl_deliv;?>">
			<input type="hidden" name="tgl_ambil" id="tgl_ambil" value="<?php echo $tgl_ambil;?>">
			<div class="box">
				<p class="text1">Date</p>
				<p class="text2"><input type="text" name="tgl" id="tgl" value="<?php echo $tgl_ambil;?>" style="border:none;"></p>
			</div>
			<div class="box">
				<p class="text1">Time</p>
				<p class="text2"><?php echo $jam_ambil?> - <?php echo $batas_ambil?></p>
			</div>
			<div class="box">
				<p class="text1">Place</p>
				<p class="text2">Home</p>
				<p class="text3"><input type="text" name="alamat_ambil" id="alamat_ambil" value="<?php echo $alamat_ambil?>" style="border:none;"></p>
				<hr class="hr">
			</div>
			<div class="box">
				<p class="text1">Laundry</p>
				<p class="text3"><?php echo $name?> - <?php echo $alamat?></p>
				<hr class="hr">
			</div>
			<div class="box">
				<div class="text1">Laundry Detail</div>
				<div class="box-in">
					<div class="text4">(<?php echo $jlh_kg?> Kg) <?php echo $service?></div>
					<div class="harga" name="total" id="total">Rp <?php echo $total?></div>
				</div>
				<div class="box-in">
					<div class="text4">Extra</div>
					<div class="harga">Rp -</div>
				</div>
				<div class="box-in">
					<div class="text4">Fee</div>
					<div class="harga">Rp -</div>
				</div>
				<hr class="hr">
			</div>
			<div class="box bawah">
				<div class="box-in">
					<img src="../asset/images/tag.png" class="img">
					<div class="kiri"><u>Promo Code</u></div>
				</div>
			</div>
			<hr class="hr">
			<div class="box bawah">
				<div class="box-in1">
					<div class="text1">Total</div>
					<div class="text5" name="total" id="total">Rp <?php echo $total?></div>
				</div>
			</div>
			<hr class="hr">
			<div class="center">
				<input type="submit" name="order" id="order" value="Order" class="button">
			</div>
		</form>
		</div>
	</div>
</body>
</html>