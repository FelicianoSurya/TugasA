<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../asset/css/login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="body">
	<header>
		<div class="header">
			<div class="left">
				<img src="../asset/images/logo.png" alt="logo">
			</div>
			<div class="right">
				<a href="register.php"><button type="button" name="register" class="btn btn-lg">Register</button></a>
				<button type="button" name="help" class="btn btn-lg help">Help</button>
			</div>
		</div>
	</header>
	<section>
		<div class="content">
			<div class="topic"	>
				<p>Get your laundry done with <span class="washme">WashMe</span></p>
			</div>
			<div class="box">
				<form action="../php/login_success.php" method="post">
					<p style="color:aqua;margin:0;">
						<?php
						if(isset($_GET['pesan'])){
							if($_GET['pesan'] == 'berhasil'){
								echo "Registration Success";
							}
						}
						 ?>
					</p>
					<div class="form-group">
							<label>Username : </label>
							<input type="text" name="username" id="username" class="form-control">
					</div>
					<div class="form-group" style="margin-top:60px;">
							<label>Password : </label>
							<input type="password" name="password" id="password" class="form-control">
					</div>
					<button type="submit" name="submit" id="submit" class="form-control">Login</button>
					<a href="#">Forget Password?</a>
				</form>
			</div>
			<div class="lain">
				<p>Or login with</p>
				<div class="sosmed">
					<img src="../asset/images/facebook.png" alt="">
					<img src="../asset/images/google.png" alt="">
				</div>
			</div>
		</div>
	</section>
</div>
</body>
</html>
