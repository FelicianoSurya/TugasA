<html>
	<head>
		<title>WashMe</title>
		<link rel="stylesheet" type="text/css" href="../asset/css/register.css">
	</head>
	<body>
	<div id="body">
		<div class="top">
			<div class="left">
				<div class="content">
				<img src="../asset/images/logo.png" alt="logo">
				<p>WashMe</p>
				</div>
			</div>
			<div class="right">
				<div class="content">
					<a href="login.php"><button>Login</button></a>
					<button class="a">Help</button>
				</div>
			</div>
		</div>
		<div class="bot">
			<div class="left">
				<div class="content">
					<p class="white">Register <br><span class="color">Your Account</span> <br>At WashMe</p>
				</div>
			</div>
			<div class="right">
				<div class="box">
					<form method="post" action="../php/register_success.php">
						<div class="form-group">
							<label for="">Username : </label><br>
							<input type="text" id="username" name="username" class="form-control" autocomplete="off">
						</div>
						<div class="form-group form1">
							<label for="">Your Email : </label><br>
							<input type="email" id="email" name="email" class="form-control" autocomplete="off">
						</div>
						<div class="form-group form1">
							<label for="">Your Password : </label><br>
							<input type="password" id="	password" name="password" class="form-control" autocomplete="off">
						</div>
						<div class="form-group form1">
							<label for="">Confirmation Password : </label><br>
							<input type="password" id="	confirmation" name="confirmation" class="form-control" autocomplete="off">
						</div>
						<div class="button">
							<input type="submit" id="register" name="register" value="Register" class="btn">
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
			</div>
		</div>
	</div>
</body>
</html>