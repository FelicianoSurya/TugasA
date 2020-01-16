<html>
<head>
	<title>Wash Me</title>
	<link rel="icon" href="../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../asset/css/order.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<spcript src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
	session_start();
	?>
	<div class="big-body">
		<div class="body">
			<div class="left">
				<div class="top">
					<div class="logo">
						<img src="../asset/images/logo.png" alt="logo">
					</div>
					<div class="topic">
						<p>WashMe</p>
					</div>
				</div>
				<div class="bot">
					<div class="info-user">
						<div class="picture">
							<img src="../asset/images/girl.png" alt="picture">
						</div>
						<div class="info">
							<div class="name">
								<p><?php echo $_SESSION['username'] ?></p>
							</div>
							<div class="information">
								<div class="poin">
									<p>88</p></div>
								<div class="coin">
									<img src="../asset/images/coins.png" alt="coin">
								</div>
								<div class="status">
									<p>| <?php echo $_SESSION['status'] ?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="menu">
						<div class="menu1">
							<div class="logo">
								<img src="../asset/images/home1.png" alt="home">
							</div>
							<div class="nama">
								<a href="home.php">
									<p>Home</p>
								</a>
							</div>
						</div>
						<div class="menu2">
							<div class="logo">
								<img src="../asset/images/shopping-list1.png" alt="home">
							</div>
							<div class="nama">
								<p>My Orders</p>
							</div>
						</div>
						<div class="menu2">
							<div class="logo">
								<img src="../asset/images/profile1.png" alt="home">
							</div>
							<div class="nama">
								<a href="myprofile.php">
									<p>My Profile</p>
								</a>
							</div>
						</div>
						<div class="menu2">
							<div class="logo">
								<img src="../asset/images/shopping-cart1.png" alt="home">
							</div>
							<div class="nama">
								<a href="washmeshop1.php">
									<p>WashMe Shop</p>
								</a>
							</div>
						</div>
					<div class="menu2 logout">
						<div class="logo">
							<img src="../asset/images/turn-off.png" alt="home">
						</div>
						<div class="nama">
							<p>Logout</p>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="body1">
			<div class="right">
				<div class="top">
					<div class="icon">
						<img src="../asset/images/left-arrow1.png" alt="icon">
					</div>
					<div class="topic">
						<div class="topic-in">
							<h1>Fill Order Format<span><img src="../asset/images/writing.png"></span></h1>
							<div class="form-in">
								<label>Pick Up Date</label>
								<input type="date" name="tgl" id="tgl" min="2019-01-01" max="2019-12-31" class="input">
							</div>
							<div class="form-in up">
								<label>Pick Up Time</label>
								<input type="time" name="time" id="time" class="input">
							</div>
							<div class="form-in up">
								<label>Pick Up Date</label>
								<textarea name="alamatpesan" id="alamatpesan" class="input" style="height: 65px;"></textarea>
							</div>
							<div class="up">
								<input type="checkbox" name="place" id="place" class="input"> Home
								<input type="checkbox" name="place" id="place" class="input"> Office
								<input type="checkbox" name="place" id="place" class="input"> Campus
								<input type="checkbox" name="place" id="place" class="input"> Others
							</div>
							<div class="form-in up">
								<label>Notes</label>
								<textarea name="note" id="note" placeholder="Type your notes" class="input" style="height: 65px;"></textarea>
							</div>
							
						</div>
					</div>
					<div class="icon">
						<img src="../asset/images/right-arrow1.png" alt="icon">
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>