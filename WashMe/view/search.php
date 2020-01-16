<?php error_reporting(0) ?>
<script src="../js/washmeshop1.js"></script>
<div class="background-in flex">
	<?php
		include "../php/connection.php";

		$search =$_GET['search'];
		$sql = "select * from products where nama_product like '%$search%'";
		$query = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($query);
		for($x=1;$x<=$num;$x++){
			$re = mysqli_fetch_array($query);
			$kode = $re['kode_product'];
			$nama = $re['nama_product'];
			$kategori = $re['kategori'];
			$harga = $re['harga'];
			$stok = $re['stok'];
			$shop = $re['shop'];
			$rating = $re['rating'];
			$image = $re['image'];
		 ?>
	<div class="border-bot">
		<img src="<?php echo ($image) ?>" class="img">
		<div class="text"><?php echo $nama ?></div>
		<div class="harga"><?php echo $harga ?></div>
		<?php if($rating <= 20){
		 ?>
		<div class="flex2">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<div class="text2">(<?php echo $rating ?>)</div>
		</div>
		<?php } ?>
		<?php if($rating <= 40 && $rating > 20){
		 ?>
		 <div class="flex2">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<div class="text2">(<?php echo $rating ?>)</div>
		</div>
		<?php } ?>
		<?php if($rating <= 60 && $rating > 40){
		 ?>
		 <div class="flex2">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<div class="text2">(<?php echo $rating ?>)</div>
		</div>
		<?php } ?>
		<?php if($rating <= 80 && $rating > 60){
		 ?>
		 <div class="flex2">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<div class="text2">(<?php echo $rating ?>)</div>
		</div>
		<?php } ?>
		<?php if($rating <= 100 && $rating > 80){
		 ?>
		 <div class="flex2">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<img src="../asset/images/star1.png" class="star">
			<div class="text2">(<?php echo $rating ?>)</div>
		</div>
		<?php } ?>
	</div>
	<?php } ?>
</div>