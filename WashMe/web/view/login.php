<html>
	<head>
		<title>WashMe</title>
		<link rel="icon" href="../asset/images/logo.png">
		<link rel="stylesheet" type="text/css" href="../asset/css/login1.css">
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
					<a href="register.php"><button>Register</button></a>
					<button class="a">Help</button>
				</div>
			</div>
		</div>
		<div class="bot">
			<div class="left">
				<div class="content">
					<p class="white">Get your laundry done with <span class="color">WashMe</span></p>
				</div>
			</div>
			<div class="right">
				<div class="box">
					<form method="post" action="../php/login_success.php">
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
							<label for="">Username :</label><br>
							<input type="text" id="username" name="username" class="form-control" autocomplete="off">
						</div>
						<div class="form-group form1">
							<label for="">Password :</label><br>
							<input type="password" id="password" name="password" class="form-control" autocomplete="off">
							<p style="margin:0;color:red;">
							<?php 

							if(isset($_GET['pesan'])){
								if($_GET['pesan'] == 'gagal'){
									echo 'Login failed! Username or Password Wrong!';
								}else if($_GET['pesan'] == 'belum_login'){
									echo 'You are not logged in';
								}
							}
							?>
							</p>
						</div>
						<div class="button">
							<input type="submit" id="login" value="Login" class="btn">
							<a href="">Forgot Password?</a>
						</div>
						<div class="connect">
							<p>Or login with</p>
							<div class="medsos">
								<img src="../asset/images/facebook.png" alt="facebook">
								<img src="../asset/images/google.png" alt="google">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>