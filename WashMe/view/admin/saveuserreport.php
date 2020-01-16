<table class="table table-bordered">
	<tr>
		<th>No</th>
		<th>Tanggal_ambil</th>
		<th>Tanggal_delivery</th>
		<th>Alamat</th>
		<th>Jumlah</th>
		<th>Harga</th>
		<th>Total</th>
	</tr>
	<?php 
	error_reporting(0);
	include "connection.php";
		$no = $_GET['no'];
		$req = "";
		if($no != ""){
			$req = $req . "transaksi.no = '$no'";
		}
		else{
			$req = $req . "transaksi.no != ''";
		}
		$tgl = $req['tgl'];
		$tgl1 = $req['tgl1'];
		if($tgl != "" && $tgl1 != ""){
			$req = $req . "and tbbeli.tgl between '$tgl' and '$tgl1'";
		}elseif($tgl1 == "" && $tgl != ""){
			$req = $req . "and tbbeli.tgl between '$tgl' and '$tgl'";
		}elseif($tgl == "" && $tgl1 != ""){
			$req = $req . "and tbbeli.tgl between '$tgl1' and '$tgl1'";
	}
	 ?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $tanggal_ambil ?></td>
		<td><?php echo $tanggal_delivery ?></td>
		<td><?php echo $alamat ?></td>
		<td><?php echo $jumlah ?></td>
		<td><?php echo $harga ?></td>
		<td><?php echo $total ?></td>
	</tr>
	<tr>
		<td><h4>Total</h4></td>
		<td><?php  ?></td>
	</tr>
</table>