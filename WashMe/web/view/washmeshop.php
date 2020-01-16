<html>
<head>
	<title>Wash Me</title>
	<link rel="icon" href="../asset/images/logo.png">
	<link rel="stylesheet" type="text/css" href="../asset/css/washmeshop1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<!--<?php 
	session_start();
	 ?>-->
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
						<div class="menu2 aktif">
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
		<div class="box-right">
			<div class="title">WashMe Shop</div>
			<div class="search-left">
				<input type="text" id="search" name="search" placeholder="Search Laundry">
				<button>
					<img src="../asset/images/search.png" alt="search" class="img-search">
				</button>
				<img src="../asset/images/cart-of-ecommerce.png" class="keranjang">
			</div>
			<div class="background-img">
				<select class="select">
					<option>Categories</option>
					<option>Shop</option>
				</select>
				<div class="flex">
					<div class="box2">
						<img src="../asset/images/laundry-ateng.jpg" class="img">
						<div class="text">Mega, Jln Budi Kary...</div>
					</div>
					<div class="box2">
						<img src="../asset/images/mboklaundry.png" class="img">
						<div class="text">Mbok Laundry Paris...</div>
					</div>
					<div class="box2">
						<img src="../asset/images/annisalaundry.png" class="img">
						<div class="text">Annisa Laundry...</div>
					</div>
					<div class="box2">
						<img src="../asset/images/laundryfresco.jpg" class="img">
						<div class="text">Laundry Fresco, Jln...</div>
					</div>
					<div class="box2">
						<img src="../asset/images/laundry-ateng.jpg" class="img">
						<div class="text">Mega, Jln Budi Kary...</div>
					</div>
				</div>
			</div>
			<div class="iron">Mega Laundry Product</div>
			<div class="background-in flex">
				<div class="border-bot">
					<img src="../asset/images/setrika1.png" class="img">
					<div class="text3">Setrika Uap Listrik Silver Star ES300...</div>
					<div class="harga">Rp 515.000</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(3)</div>
					</div>
				</div>
				<div class="border-bot">
					<img src="../asset/images/setrika1.png" class="img">
					<div class="text3">Setrika Uap Listrik Silver Star ES300...</div>
					<div class="harga">Rp 515.000</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(3)</div>
					</div>
				</div>
				<div class="border-bot">
					<img src="../asset/images/setrika1.png" class="img">
					<div class="text3">Setrika Uap Listrik Silver Star ES300...</div>
					<div class="harga">Rp 515.000</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(3)</div>
					</div>
				</div>
				<div class="border-bot">
					<img src="../asset/images/setrika1.png" class="img">
					<div class="text3">Setrika Uap Listrik Silver Star ES300...</div>
					<div class="harga">Rp 515.000</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(3)</div>
					</div>
				</div>
				<div class="border-bot">
					<img src="../asset/images/setrika1.png" class="img">
					<div class="text3">Setrika Uap Listrik Silver Star ES300...</div>
					<div class="harga">Rp 515.000</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(3)</div>
					</div>
				</div>
				<div class="border-bot">
					<img src="../asset/images/setrika1.png" class="img">
					<div class="text3">Setrika Uap Listrik Silver Star ES300...</div>
					<div class="harga">Rp 515.000</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(3)</div>
					</div>
				</div>
			</div>
			<div class="iron">Promo</div>
			<div class="background-in flex">
				<div class="border-bot">
					<img src="../asset/images/setrika2.png" class="img">
					<div class="text3">Strika Uap</div>
					<div class="harga">Rp 95.000</div>
					<div class="text4">Laundry Ateng</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(1)</div>
					</div>
				</div>
				<div class="border-bot">
					<img src="../asset/images/setrika2.png" class="img">
					<div class="text3">Strika Uap</div>
					<div class="harga">Rp 95.000</div>
					<div class="text4">Laundry Ateng</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(1)</div>
					</div>
				</div>
				<div class="border-bot">
					<img src="../asset/images/setrika2.png" class="img">
					<div class="text3">Strika Uap</div>
					<div class="harga">Rp 95.000</div>
					<div class="text4">Laundry Ateng</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(1)</div>
					</div>
				</div>
				<div class="border-bot">
					<img src="../asset/images/setrika2.png" class="img">
					<div class="text3">Strika Uap</div>
					<div class="harga">Rp 95.000</div>
					<div class="text4">Laundry Ateng</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(1)</div>
					</div>
				</div>
				<div class="border-bot">
					<img src="../asset/images/setrika2.png" class="img">
					<div class="text3">Strika Uap</div>
					<div class="harga">Rp 95.000</div>
					<div class="text4">Laundry Ateng</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(1)</div>
					</div>
				</div>
				<div class="border-bot">
					<img src="../asset/images/setrika2.png" class="img">
					<div class="text3">Strika Uap</div>
					<div class="harga">Rp 95.000</div>
					<div class="text4">Laundry Ateng</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(1)</div>
					</div>
				</div>
			</div>
			<div class="iron">Best Seller</div>
			<div class="background-in flex">
				<div class="border-bot">
					<img src="../asset/images/setrika4.jpg" class="img">
					<div class="text3">Setrika Mini / Travel Portable...</div>
					<div class="harga">Rp 22.000</div>
					<div class="text4">Laundry Ateng</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(1)</div>
					</div>
				</div>
				<div class="border-bot">
					<img src="../asset/images/setrika4.jpg" class="img">
					<div class="text3">Setrika Mini / Travel Portable...</div>
					<div class="harga">Rp 22.000</div>
					<div class="text4">Laundry Ateng</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(1)</div>
					</div>
				</div>
				<div class="border-bot">
					<img src="../asset/images/setrika4.jpg" class="img">
					<div class="text3">Setrika Mini / Travel Portable...</div>
					<div class="harga">Rp 22.000</div>
					<div class="text4">Laundry Ateng</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(1)</div>
					</div>
				</div>
				<div class="border-bot">
					<img src="../asset/images/setrika4.jpg" class="img">
					<div class="text3">Setrika Mini / Travel Portable...</div>
					<div class="harga">Rp 22.000</div>
					<div class="text4">Laundry Ateng</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(1)</div>
					</div>
				</div>
				<div class="border-bot">
					<img src="../asset/images/setrika4.jpg" class="img">
					<div class="text3">Setrika Mini / Travel Portable...</div>
					<div class="harga">Rp 22.000</div>
					<div class="text4">Laundry Ateng</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(1)</div>
					</div>
				</div>
				<div class="border-bot">
					<img src="../asset/images/setrika4.jpg" class="img">
					<div class="text3">Setrika Mini / Travel Portable...</div>
					<div class="harga">Rp 22.000</div>
					<div class="text4">Laundry Ateng</div>
					<div class="flex">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<img src="../asset/images/star1.png" class="star">
						<div class="text4">(1)</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>