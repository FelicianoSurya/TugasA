<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript">
window.onload = function() {

var options = {
	exportEnabled: true,
	animationEnabled: true,
	legend:{
		horizontalAlign: "right",
		verticalAlign: "center"
	},
	data: [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "<b>{name}</b>: ${y} (#percent%)",
		indexLabel: "{name}",
		legendText: "{name} (#percent%)",
		indexLabelPlacement: "inside",
		dataPoints: [
			{ y: 50, name: "Wash & Fold" },
			{ y: 17, name: "Wash & Iron" },
			{ y: 13, name: "Dry Cleaning" },
			{ y: 20, name: "All" }
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
<title>WashMe Mobile</title>
	<link rel="icon" href="../../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../asset/css/admin/usersreport.css">
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
	<p class="text2">Service</p>
</div>
<div id="chartContainer" style="height: 1000px; width: 100%;"></div>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>  
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
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
</body>
</html>