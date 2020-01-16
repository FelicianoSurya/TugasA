<!DOCTYPE html>
<html>
<head>
<title>WashMe Mobile</title>
	<link rel="icon" href="../../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../asset/css/admin/report-tes.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="header">
	<a href="washme-laundry.php"><img src="../../asset/images/logo.png" class="logo"></a>
	<div class="atas">
		<p>Admin</p>
	</div>
</div>
<hr class="hr">
<div class="content">
	<div class="text1">User's Report</div>
</div>
<div class="box">
	<p class="text">Tanggal</p>
	<input type="date" name="tgl" id="tgl" class="input">
	<p class="text">-</p>
	<input type="date" name="tgl1" id="tgl1" class="input">
</div>
<div class="box">
	<p class="text">Ketegori</p>
	<select name="select" id="select" class="input">
		<option>Wash & Fold</option>
		<option>Wash & Iron</option>
		<option>Dry Clean</option>
	</select>
</div>
<div class="button"><button>View</button></div>
<div class="footer">
	<a href="washme-user.php">
		<div class="box4">
			<img src="../../asset/images/profile2.png" class="img2">
			<div class="text1">User</div>
		</div>
	</a>
	<a href="washme-laundry.php">
		<div class="box4">
			<img src="../../asset/images/washing-machine4.png" class="img2">
			<div class="text">Laundry</div>
		</div>
	</a>
	<a href="request-laundry.php">
		<div class="box4">
			<img src="../../asset/images/shopping-list2.png" class="img2">
			<div class="text1">Request</div>
		</div>
	</a>
	<a href="../logout.php">
		<div class="box4">
			<img src="../../asset/images/settings3.png" class="img2">
			<div class="text1">Logout</div>
		</div>
	</a>
</div>
</body>
</html>