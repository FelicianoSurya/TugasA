<?php
	session_start();
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../asset/css/myorders-1.1.css">
	<title></title>
</head>
<body>
<form>
<div class="container-fluid-screen">
	<div class="row top">
		<div class="col-sm-2"></div>
		<div class="col-sm-8 header">My Orders</div>
		<div class="col-sm-2"><a href="history.php"><img src="../asset/images/history.png" class="img"></a></div>
	</div>
	<hr class="hr1">

	<div class="background">
			<?php
				include "../php/connection.php";

				$id = $_SESSION['id'];

				$sql = "select * from laundrys inner join transaksi on laundrys.id = transaksi.id inner join transaksidetil on laundrys.id = transaksidetil.id";
				$query = mysqli_query($conn,$sql);
				$num = mysqli_num_rows($query);
				if($num == 0){
						echo "No Orders!!";
				}
				else{
					for($x=1 ; $x<=$num ; $x++){
						$re = mysqli_fetch_array($query);
						$id = $re['id'];
						$notransaksi = $re['no'];
						$name = $re['name'];
						$alamat = $re['alamat'];
						$tgl = $re['tgl'];
			?>
		<a onclick="save_Order(<?php echo "'$id'";?>)">
		<div class="background-in flex">
			
			<input type="hidden" name="notransaksi" id="notransaksi" value="<?php echo $notransaksi;?>">
			<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
			<img src="../asset/images/washing-machine2.png" class="img">
			<div class="left">
				<div class="text"><?php echo $name;?> - <?php echo $alamat;?></div>
				<div class="text1">Tanggal Order : <?php echo $tgl;?></div>
				<div class="text2">On Progress</div>
			</div>
		</div>
		</a>
			<?php
					}
				}
			?>
	</div>
	<hr class="hr2">
	<div class="footer">
			<a href="home.php">
				<div class="box4">
					<img src="../asset/images/home2.png" class="img2">
					<div class="text1">Home</div>
				</div>
			</a>
			<a href="myorders-1.php">
				<div class="box4">
					<img src="../asset/images/shopping-list.png" class="img2">
					<div class="text">My Orders</div>
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
					<div class="text1">My Account</div>
				</div>
			</a>
	</div>
</div>
</form>
<script src="../js/userorder5.js"></script>
</body>
</html>