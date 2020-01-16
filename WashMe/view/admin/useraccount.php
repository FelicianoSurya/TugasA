<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../asset/css/admin/useraccount.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid-screen">
		<div class="header">
			<a href="washme-laundry.php"><img src="../../asset/images/logo.png" class="logo"></a>
			<div class="atas">
				<p>Admin</p>
			</div>
		</div>
		<hr class="hr">
		<div class="content">
			<div class="text1">User's Account</div>
			<div class="input">
				<img src="../../asset/images/search.png">
				<input type="text" name="search" id="search" placeholder="Search...">
			</div>
			<div class="text1">Select Location</div>
			<select class="select">
				<option>Pontianak, Kalimantan barat</option>
				<option>#</option>
			</select>
				<table border="1" class="table table-responsive" style="font-size: 33px; margin-top: 50px;">
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
					<?php 
					include "../../php/connection.php";
					$sql = "select * from users";
					$query = mysqli_query($conn,$sql);
					$num = mysqli_num_rows($query);

					for($x=1;$x<=$num;$x++){
						$re = mysqli_fetch_array($query);
						if($re['status'] == 'user'){
						$username = $re['username'];
						$email = $re['email'];
					 ?>
					
					<tr>
						<td><?php echo $username ?></td>
						<td><?php echo $email ?></td>
						<td>
							<input type="button" class="btn btn-danger" style="font-size: 28px;" id="delete" name="delete" value="Delete" onclick="deleteData(<?php echo "'$username'"; ?>)">
						</td>
					</tr>
					<?php }  }?>
				</table>
		</div>
		<div class="footer">
			<a href="washme-user.php">
				<div class="box4">
					<img src="../../asset/images/profile.png" class="img2">
					<div class="text">User</div>
				</div>
			</a>
			<a href="washme-laundry.php">
				<div class="box4">
					<img src="../../asset/images/washing-machine5.png" class="img2">
					<div class="text1">Laundry</div>
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
	</div>
</body>
</html>
<script src="../../js/admin1.js"></script>