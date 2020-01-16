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
			{ y: 50, name: "06.00 - 12.00" },
			{ y: 17, name: "13.00 - 18.00" },
			{ y: 13, name: "19.00 - 00.00" },
			{ y: 20, name: "00.00 - 05.00" }
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
<title>WashMe Mobile</title>
	<link rel="icon" href="../../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../asset/css/admin/laundrysreport.css">
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
	<div class="text1">Laundry's Report</div>
	<p class="text2">Order Time</p>
</div>
<div id="chartContainer" style="height: 1000px; width: 100%;"></div>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>  
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<div class="footer">
	<a href="washme-user.php">
		<div class="box4">
			<img src="../../asset/images/profile2.png" class="img2">
			<div class="text1">User</div>
		</div>
	</a>
	<a href="washme-laundry.php">
		<div class="box4">
			<img src="../../asset/images/washing-machine4.png" class="img2">
			<div class="text">Laundry</div>
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