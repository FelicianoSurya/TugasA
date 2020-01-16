<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../asset/css/register1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid-fullscreen">
	<div class="header">
		<div class="topic-top">
			<header>
				<div class="logo">
					<img src="../asset/images/logo.png" alt="image">
				</div>
				<div class="list">
					<div class="geser">
						<a href="index.php">
							<button class="button1">Login</button>
						</a>
						<a href="#">
							<button class="button2">Help</button>
						</a>
					</div>
				</div>
			</header>
		</div>
	</div>
	<div class="content">
		<div class="content-in">
			<div class="tagline">
				<h1>Register your account<br><span class="font">at WashMe</span></h1>
			</div>
			<div class="login">
				<form action="../php/register_success.php" method="POST" class="kotak">
					<label class="label-besar" style="background-color: white;">Create a new account</label>
					<div class="form-group" style="background-color: white;">
						<label class="label" style="background-color: white;">Your Username :</label><br>
						<input type="text" name="username" id="username" autocomplete="off" class="input form-control">
					</div>
					<div class="form-group" style="background-color: white;">
						<label class="label" style="background-color: white;">Your Email :</label><br>
						<input type="email" name="email" id="email" autocomplete="off" class="input form-control validate">
					</div>
					<div class="form-group" style="background-color: white;">
						<label class="label" style="background-color: white;">Your Password :</label><br>
						<input type="password" name="password" id="password" autocomplete="off" class="input form-control">
					</div>
					<div class="form-group" style="background-color: white;">
						<label class="label" style="background-color: white;">Confirmation Password :</label><br>
						<input type="password" name="confirmation" id="confirmation" autocomplete="off" class="input form-control">
					</div>
					<div class="form-group" style="background-color: white;">
						<input type="submit" name="register" id="register" value="Register" class="button2 form-control">
						<p style="margin:0;color:red;">
							<?php 
							if(isset($_GET['pesan'])){
								if($_GET['pesan'] == 'beda'){
									echo "Konfirmasi Password tidak sama!";
								}elseif($_GET['pesan'] == 'required'){
									echo "Harus diisi Lengkap!";
								}
							}
							?>
							</p>
					</div>
				</form>
			</div>
			<div class="flex">
				<div class="option">
					<p class="opt">By continuing, you agree if Laundry com sends<br>an email regarding your Laundry registration.</p>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>