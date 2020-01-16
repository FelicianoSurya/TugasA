<?php
	error_reporting(0);
?>

<?php
	include "connection.php";
	$notransaksi = $_POST['notransaksi'];
	$tgl = $_POST['tgl'];
	$id = $_POST['id'];
	$total = $_POST['total'];
	$proses = $_POST['proses'];

	// $sql = "select * from temptransaksi where no='$notransaksi'";
	// $query = mysqli_query($conn,$sql) or die("error $sql");
	// while($res = mysqli_fetch_array($query)){
	// 	$notransaksi = $res['no'];
	// 	$id = $res['id'];
	// 	$tgl_deliv = $res['tgl_deliv'];
	// 	$tgl_ambil = $res['tgl_ambil'];
	// 	$alamat_ambil = $res['alamat_ambil'];
	// 	$jlh_kg = $res['jlh_kg'];
	// 	$harga = $res['harga'];
	// 	$total = $res['total'];

	// 	$sql1 = "insert into transaksidetil(no,id,tgl_deliv,tgl_ambil,alamat_ambil,jlh_kg,harga,total)values('$notransaksi','$id','$tgl_deliv','$tgl_ambil','$alamat_ambil','$jlh_kg','$harga','$total')";
	// 	$query1 = mysqli_query($conn,$sql1) or die("error $sql1");

	// 	$sql2 = "select * from laundrys where id='$id'";
	// 	$query2 = mysqli_query($conn,$sql2) or die("error $sql2");
	// }
	// $sql4 = "delete from temptransaksi where no='$notransaksi'";
	// $query4 = mysqli_query($conn,$sql4) or die("error $sql4");
	// $sql5 = "insert into transaksi(no,id,tgl,total) values('$notransaksi','$id','$tgl','$total')";
	// $query5 = mysqli_query($conn,$sql5) or die("error $sql5");
	header("location:../view/home.php");

	$cancel = $_POST['cancel'];
	$notransaksi = $_POST['notransaksi'];
	$id = $_POST['id'];
	if($cancel == 'Cancel'){
		$sql8 = "delete from transaksidetil where no='$notransaksi'";
		$query8 = mysqli_query($conn,$sql8) or die("error $sql8");
		header("location:../view/myorders-1.php");
	}
?>