<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../asset/css/washme-order22.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid-screen">
		<div class="header">
			<a href="washme-order.php"><img src="../asset/images/left-arrow2.png"></a>
			<div class="atas"><p>Fill Order Format</p></div>
		</div>

		<div class="body">
			<form action="../php/saveorder.php" method="POST">
			<?php
				include "../php/connection.php";

				$id = $_SESSION['id'];
				$name = $_SESSION['name'];
				$nama = $_SESSION['nama'];
				$alamat = $_SESSION['alamat'];

				$sql = "select * from laundrys where id='$id'";
				$query = mysqli_query($conn,$sql);
				$num = mysqli_num_rows($query);
				$res = mysqli_fetch_array($query);
				$id = $res['id'];
				$time_open = $res['time_open'];
				$time_close = $res['time_close'];
				$sql1 = "select * from temptransaksi";
				$query1 = mysqli_query($conn,$sql1);
				$num1 = mysqli_num_rows($query1);
				$tgl = date('Y-m-d');
				$angka = $num1 + 1;
				$notransaksi = "TL-$angka";
			?>
			<input type="text" name="notransaksi" id="notransaksi" value="<?php echo $notransaksi;?>">
			<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
			<input type="hidden" name="user" id="user" value="<?php echo $name;?>">
			<input type="hidden" name="nama" id="nama" value="<?php echo $nama;?>">
			<input type="hidden" name="alamat" id="alamat" value="<?php echo $alamat;?>">
			<div class="text1">Set Pick Up Date</div>
			<div>
				<input type="date" name="tgl_ambil" id="tgl_ambil" class="select">
			</div>
			<div class="text2">Set Pick Up Time</div>
			<div class="box">
				<input type="time" name="jam_ambil" id="jam_ambil" min="<?php echo($time_open)?>" max="<?php echo($time_close)?>" required class="time">
				<div class="strip"></div>
				<input type="time" name="batas_ambil" id="batas_ambil" min="<?php echo($time_open)?>" max="<?php echo($time_close)?>" required class="time">
			</div>
			<div class="box1">
				<div>Home</div>
				<div class="strip1">-</div>
				<div class="text"><input type="text" name="alamat_ambil" id="alamat_ambil" required style="border:none;"></div>
				<div class="logo"><img src="../asset/images/location-mark-blue.png"></div>
			</div>
			<hr class="hr">
			<div class="box3">
				<div class="text"><input type="text" name="note_ambil" id="note_ambil" required style="border:none; width: 100%;"></div>
				<div class="logo"><img src="../asset/images/writing1.png"></div>
			</div>
			<hr class="hr">
			<div class="box4">
				<input type="submit" name="submit" id="submit" class="button" value="submit">
			</div>
			</form>
		</div>
	</div>
<script src="../js/savetransaksi2.js"></script>
</body>
</html>