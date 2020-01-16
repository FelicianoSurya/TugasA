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
	<link rel="stylesheet" type="text/css" href="../asset/css/washme-order33.css">
	<title></title>
</head>
<body>
<div class="container-fluid-screen">
	<div class="flex border-top">
		<div><a href="washme-order2.php"><img src="../asset/images/left-arrow2.png" class="img"></a></div>
		<div class="atas">Laundry Item</div>
	</div>
	<div class="flex padding">
		<div class="text">Basic Laundry (Kg)</div>
		<div class="text border-mid1">Dry Cleaning (Pcs)</div>
	</div>
	<div class="flex">
		<hr class="hr1">
		<hr class="hr2">
	</div>
	<form action="../php/saveorder.php" method="POST">
		<?php
			include "../php/connection.php";

			$id = $_SESSION['id'];
			$user = $_SESSION['user'];

			$sql = "select * from laundrys where id='$id'";
			$query = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($query);
			$res = mysqli_fetch_array($query);
			$id = $res['id'];
			$service = $res['service'];
			$harga = $res['harga'];
			$sql1 = "select * from temptransaksi where user='$user'";
			$query1 = mysqli_query($conn,$sql1);
			$res1 = mysqli_fetch_array($query1);
			$notransaksi = $res1['no'];
		?>
	<div class="box">
		<div class="box1">
			<input type="text" name="notransaksi" id="notransaksi" value="<?php echo $notransaksi;?>">
			<input type="hidden" name="id" id="id" value="<?php echo($id)?>">
			<div class="flex">
				<div class="box-in1">
					<div class="text1"><input type="text" value="<?php echo $service;?>" name="service" id="service" style="border:none;"></div>
					<div class="text2"><input type="text" onkeyup="totalOrder()" value="<?php echo $harga;?>" name="harga" id="harga" style="border:none; width: 100px;"> / Kg</div>
				</div>
				<div class="flex box-in1 jarak">
					<input type="number" onkeyup="totalOrder()" name="jlh_kg" id="jlh_kg" placeholder="amount" autocomplete="off" class="form-control input">
					<p class="text3">/Kg</p>
				</div>
			</div>
		</div>
		<hr class="hr3">
		<div class="flex box2">
			<div><img src="../asset/images/weight.png" class="img"></div>
			<div class="box-in">
				<div class="text">Not sure how much your laundry weights?</div>
				<div class="text1">Don't worry, our picker will always recalculate the weight during pick up.</div>
			</div>
		</div>
		<div class="note">P.S : Please seperate the clothes according the services.</div>
	</div>
	<div class="center">
			<input type="submit" name="submit1" id="submit1" class="button" value="submit">
		</div>
	<div class="footer flex">
		<div class="text1">Total</div>
		<div class="text2"><input type="text" name="total" id="total" onkeyup="totalOrder()" style="border:none; background-color: transparent;"></div>
	</div>
	</form>
</div>
<script src="../js/userorder5.js"></script>
</body>
</html>