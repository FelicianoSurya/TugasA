<!DOCTYPE html>
<html>
<head>
	<title>WashMe Mobile</title>
	<link rel="icon" href="../../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../asset/css/admin/request-laundry.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid-screen">
		<div class="header">
			<img src="../../asset/images/logo.png" class="logo">
			<div class="atas">
				<p>Admin</p>
			</div>
		</div>
		<hr class="hr">
		<div class="content">
			<div class="box3">
				<?php
					include "../../php/connection.php";
					$sql = "select * from request_driver";
					$query = mysqli_query($conn,$sql);
					$num = mysqli_num_rows($query);
					if($num == 0){
						echo "No Request Driver!!";
					}
					else{
					for($x = 1; $x <= $num; $x++){
							$re = mysqli_fetch_array($query);
							$username = $re['username'];
							$text = $re['text_request'];
							$date = $re['time_request'];
							$nama = $re['nama'];
							$alamat = $re['alamat'];
							$nohp = $re['nohp'];
					?>
				<div class="box3-req">
					<img src="../../asset/images/boy.png" alt="boy">
					<p style="font-size: 50px;">Username : <?php echo $username ?></p>
					<p style="font-size: 50px;" class="date">Date Request : <?php echo $date ?></p>
					<div class="button_bot">
						<input type="hidden" name="username" id="username" value="<?php echo $username?>">
						<button style="width: 150px; font-size: 30px;" class="btn btn-md btn-info" data-toggle="modal" data-target="#beDriver">See More</button>
						<button style="width: 150px; font-size: 30px;" class="btn btn-md btn-danger" onclick="del_req1(<?php echo "'$username'" ?>)">Reject</button>
					</div>
				</div>
				<div class="modal fade" id="beDriver" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content" style="width: 800px; margin-left: -145px;">
							<div class="modal-header">
								<img style="width:100px;" src="../../asset/images/boy.png" alt="boy">
								<h3 style="padding-left:10px; font-size: 60px;"><?php echo $username ?></h3>
								<button type="button" class="close" data-dismiss="modal" style="font-size: 80px;">&times;</button>
							</div>
							<div class="modal-body" style="padding:20px;">
								<p style="margin:0; font-size: 40px;">Text Request : <?php echo $text ?></p>
								<p style="margin:0; font-size: 40px;">Name : <?php echo $nama ?></p>
								<p style="margin:0; font-size: 40px;">Address : <?php echo $alamat ?></p>
								<p style="margin:0; font-size: 40px;">Phone Number : <?php echo $nohp ?></p>
							</div>
							<div class="modal-footer">
								<button class="btn btn-md btn-success" data-toggle='modal' data-target="#acceptd" data-dismiss="modal" style="font-size: 40px;">Accept</button>
								<button class="btn btn-md btn-danger" data-dismiss="modal" style="font-size: 40px;">Close</button>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade" id="acceptd" role='dialog'>
					<div class="modal-dialog">
						<div class="modal-content" style="height: 350px; width: 700px; margin-left: -100px;">
							<div class="modal-header">
								<p style="font-size: 50px;margin:0px;">Make Laundry For <?php echo $username; ?></p>
								<button type="button" class="close" data-dismiss="modal" style="font-size: 80px;">&times;</button>
							</div>
							<form action="../../php/adminaccept1.php" method="post">
							<div class="modal-body" style="padding:20px;">
								<input type="hidden" name="username" id="username" value="<?php echo $username?>">
								<input type="hidden" name="nama" id="nama" value="<?php echo $nama?>">
								<input type="hidden" name="alamat" id="alamat" value="<?php echo $alamat?>">
								<input type="hidden" name="nohp" id="nohp" value="<?php echo $nohp?>">
								<div class="form-group">
									<select name="status" id="status" class="form-control" style="font-size: 40px;">
										<option value="-">Status</option>
										<option value="driver">Driver</option>
									</select>
								</div>
								<input type="hidden" id="username" name="username" value="<?php echo $username ?>">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#beDriver" style="font-size: 40px;">Back</button>
								<input type="submit" id="submit" name="submit" class="btn btn-info" value="Send" style="font-size: 40px;">
							</div>
							</form>
						</div>
					</div>
				</div>
				<?php 
						}
					}
				?>
			</div>
		</div>
		<div class="footer">
			<a href="washme-user.php">
				<div class="box4">
					<img src="../../asset/images/profile2.png" class="img2">
					<div class="text1">User</div>
				</div>
			</a>
			<a href="washme-laundry.php">
				<div class="box4">
					<img src="../../asset/images/washing-machine5.png" class="img2">
					<div class="text1">Laundry</div>
				</div>
			</a>
			<a href="home-req.php">
				<div class="box4">
					<img src="../../asset/images/shopping-list.png" class="img2">
					<div class="text">Request</div>
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
<script src="../../js/home3.js"></script>