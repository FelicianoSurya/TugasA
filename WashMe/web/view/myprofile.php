<html>
<head>
	<title>Wash Me</title>
	<link rel="icon" href="../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../asset/css/myprofile2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
		<div class="body">
			<?php include "kiri.php";
			$username = $_SESSION['username'];
			$sql = "select * from user where username='$username'";
			$query = mysqli_query($conn,$sql);
			$re = mysqli_fetch_array($query);
			$id = $re['id'];
			$name = $re['name'];
			$hp = $re['nohp'];
			$email = $re['email'];
			?>
		<div class="box-right">
			<div class="language">
				<div class="box-language">
					<p>Language : English</p>
					<img src="../asset/images/english-language.png" class="img">
				</div>
			</div>
			<div class="flex">
				<div class="box">
					<div class="text1">Contact Info</div>
					<p class="text2 jarak"><?php echo $name ?></p>
					<p class="text2"><?php echo $hp ?></p>
					<p class="text2"><?php echo $email ?></p>
					<button class="button" data-toggle="modal" data-target="#contactinfo">Edit</button>
				</div>
				<form action="../php/profile.php" method="GET">
				<div class="modal fade" id="contactinfo" role="dialog">
					<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Contact info</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label for="username">Full Name</label>
										<input type="text" name="name" id="name" class="form-control" value="<?php echo $name ?>">
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
									</div>
									<div class="form-group">
										<label for="Phone">Phone Number</label>
										<input type="text" name="nohp" id="nohp" class="form-control" value="<?php echo $hp ?>">
									</div>
									<div class="form-group">
										<label for="jenis">Jenis Kelamin</label>
										<div class="radio">
											<input type="radio" name="jeniskelamin" id="laki-laki" value="Laki-laki">Laki-laki
											<input type="radio" name="jeniskelamin" id="perempuan" value="Perempuan">Perempuan
											<input type="hidden" name="id" value="<?php echo $id ?>">
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<input type="submit" name="submit" id="submit" class="btn btn-md btn-info" data-dismiss="moda value="Edit">
									<button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Cancel</button>
								</div>
							</div>
					</div>
				</div>
			</form>
				<div class="box a">
					<div class="text1">Payment Card</div>
					<div class="box-in">
						<img src="../asset/images/bca.png" class="img2">
						<div class="text2 kiri">BCA - Mobile Banking</div>
					</div>
					<button class="button2">Edit Payment</button>
				</div>
			</div>
			<div class="flex">
				<div class="box">
					<div class="text1">Password</div>
					<div class="text2 jarak2">Verification to reset password will be sent to email on your account.</div>
					<button class="button">Reset Password</button>
				</div>
				<div class="box a">
					<div class="text1">Pick-Up Address</div>
					<div class="text2 jarak3">Jln, Sutoyo No.123</div>
					<button class="button">Edit Address</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
