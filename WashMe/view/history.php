<?php
	session_start();
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../asset/css/history.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="header flex">
	<a href="myorders-1.php"><img src="../asset/images/left-arrow2.png" class="arrow"></a>
	<div class="title">History</div>
</div>
	<?php
		include "../php/connection.php";

		$id = $_SESSION['id'];

		$sql = "select * from laundrys inner join transaksi on laundrys.id = transaksi.id inner join transaksidetil on laundrys.id = transaksidetil.id";
		$query = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($query);
		if($num == 0){
			echo "No History!!";
		}
		else{
			for($x=1 ; $x<=$num ; $x++){
				$re = mysqli_fetch_array($query);
				$id = $re['id'];
				$name = $re['name'];
				$alamat = $re['alamat'];
				$tgl_ambil = $re['tgl_ambil'];
				$tgl_deliv = $re['tgl_deliv'];
	?>
<div class="body flex jarak">
	<img src="../asset/images/delivery-truck.png" class="img">
	<div>
		<div class="text">Delivered</div>
		<div class="text1"><?php echo $name;?> - <?php echo $alamat;?></div>
		<div class="text2"><?php echo $tgl_ambil;?> - <?php echo $tgl_deliv;?></div>
	</div>
</div>
	<?php
			}
		}
	?>
</body>
</html>