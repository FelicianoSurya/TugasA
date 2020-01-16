<?php
	include "connection.php";

	$notransaksi = $_POST['notransaksi'];
	$id = $_POST['id'];
	$tgl_ambil = $_POST['tgl_ambil'];
	$jam_ambil = $_POST['jam_ambil'];
	$batas_ambil = $_POST['batas_ambil'];
	$alamat_ambil = $_POST['alamat_ambil'];
	$note_ambil = $_POST['note_ambil'];
	$service = $_POST['service'];
	$harga = $_POST['harga'];
	$jlh_kg = $_POST['jlh_kg'];
	$total = $_POST['total'];
	$tgl_deliv = $_POST['tgl_deliv'];
	$jam_deliv = $_POST['jam_deliv'];
	$batas_deliv = $_POST['batas_deliv'];
	$alamat_deliv = $_POST['alamat_deliv'];
	$note_deliv = $_POST['note_deliv'];
	$user = $_POST['user'];
	$submit = $_POST['submit'];

	if($submit == 'Accept'){
		$sql = "insert into tempprogres(no,id,tgl_ambil,jam_ambil,batas_ambil,alamat_ambil,note_ambil,jlh_kg,tgl_deliv,jam_deliv,batas_deliv,alamat_deliv,note_deliv,service,harga,total,user) values('$notransaksi','$id','$tgl_ambil','$jam_ambil','$batas_ambil','$alamat_ambil','$note_ambil','$jlh_kg','$tgl_deliv','$jam_deliv','$batas_deliv','$alamat_deliv','$note_deliv','$service','$harga','$total','$user')";
		$query = mysqli_query($conn,$sql);
		$sql1 = "delete from temptransaksi where no='$notransaksi'";
		$query1 = mysqli_query($conn,$sql1);
		header("location:../view/laundry/myorders-lama.php");
	}
	else if($submit == 'Reject'){
		$sql = "delete from temptransaksi where no='$notransaksi'";
		$query = mysqli_query($conn,$sql);
	}
?>