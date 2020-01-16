<html>
<head>
	<title>Wash Me</title>
	<link rel="icon" href="../../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../asset/css/adminhome.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<header class="header">
		<div class="header-kiri">
			<p>Admin</p>
		</div>
		<div class="header-right">
			<a href="../login.php">Logout</a>
		</div>
	</header>
	<div class="body">
		<?php include "kiri.php" ?>
		<div class="right">
			<div class="body-right">
				<img src="../../asset/images/girl.png" alt="picture">
				<p><?php echo $_SESSION['username'] ?></p>
				<p>Admin Administration</p>
			</div>
			</div>
		</div>
	</div>
</body>
</html>