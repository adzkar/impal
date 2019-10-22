<?php  
	session_start();
	require 'php/utility.php';
	$url = "http://localhost:8000/api/AllGor/".$_GET['kata_kunci'];
	$res = json_decode(file_get_contents($url))->data;
	// var_dump($res);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/function.js"></script>
	<link rel="stylesheet" href="css/style.css" crossorigin="anonymous">	
	<link rel="stylesheet" href="css/home.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/slide.css" crossorigin="anonymous">
	<link href="css/hamburgers.css" rel="stylesheet">
	<title>Halaman Booking</title>
</head>
<body class="booking">
	<?php
		include("chk_slide.php");
		include("header.php");
		include("login.php");
		include("register.php");
	?>
	<div class="container-fluid no-padding h-100">
		<div class="row h-100">
			<div class="col-md-2 no-padding">
					<form action="booking.php">
						<div class="search-box">
							<div class="row">
								<h3 class="search-title"> Search </h3>
							</div>
							<div class="row">
								<input class="place-input"type="text" placeholder="GOR Telkom, Bojongsoang" name="kata_kunci">
							</div>
							<br>
							<div class="row">
								<input class="date-input"type="date" name="" placeholder="DD/MM/YY">
							</div>
							<br>
							<div class="row">
								<span class="text-book">Jenis Lapangan (Optional)</span>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Futsal</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Basket</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Badminton</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Voli</label>
							</div>
							<br>
							<button class="btn btn-success btn-cari" style="width:100%" type="submit">Ubah Pencarian</button>
							<br>
							<br>
							<div class="maps" id="maps"></div>
							<div class="row">
								<span class="text-book">Filter</span>
							      <select class="form-control">
							        <option value="1">Terdekat</option>
							        <option value="2">Rating tertinggi</option>
							      </select>
							</div>
							<br>
							<div class="row">
								<span class="text-book">Harga</span>
							</div>
							<div class="row">
								<label><input type="radio">Terendah</label>
							</div>
							<div class="row">
								<label><input type="radio" >Tertinggi</label>
							</div>
							<div class="row page-break mx-auto">
							</div>
						</div>			
						
					</form>
				</div>
				<div class="col-md-10">
					<div class="search-result">
						<div class="row">
							<div class="col-md-11">
								<h3 class="search-title"> Booking </h3>
							</div>
							<div class="col-md-1">
								<span> # hasil</span>
							</div>
						</div>





						<div class="row">
							<div class="result">
								<?php
									if (count($res) == 0) {
										echo "<center>Not Found";
										echo "</center>";
									}
									foreach ($res as $val) {
								?>
								<div class="row" style="margin-bottom: 50px;">
									<div class="col-md-2">
										<img class="gor-img" src="assets/bultang.jpg">
									</div>
									<div class="col-md-10 align-items-start"> 
										<div class="row">
											<div class="col-md-10 no-padding">
												<span class="gor-name"><?= $val->nama?></span>
											</div>
											<div class="col-md-2">
												<a href="<?= "gor.php?id_gor=$val->id"?>">
													<button class="btn btn-success btn-cari">
														Pesan
													</button>
												</a>
											</div>
										</div>
										<div class="row">
											<span class="gor-street"><?= $val->alamat ?></span>
										</div>
										<div class="row" style="margin-top:100px;">
											<div class="col-md-10 no-padding">
												<span class="">Fasilitas</span>
											</div>
											<div class="col-md-2">
												<span>Mulai dari</span>
											</div>
										</div>
										<div class="row">
											<div class="col-md-10 no-padding">
												<div class="fasilitas-icon">
													<img class="ball-icon" src="assets/vectors/ball-icon.png" alt="Futsal" title="Futsal">
													<img class="ball-icon" src="assets/vectors/basketball-icon.png" alt="Basket" title="Basket">
													<img class="ball-icon" src="assets/vectors/badminton-icon.png" alt="Badminton" title="Badminton">
												</div>
											</div>
											<div class="col-md-2">
												<span class="gor-price">Rp.</span><span class="gor-price"><?= number_format($val->lapangans[0]->harga, 2, ",", ".") ?></span><span class="gor-price">/jam</span>
											</div>
										</div>
									</div>
								</div>

								<?php 
									}
								?>
								
							</div>
						</div>





					</div>			
				</div>
		</div>
	</div>

</body>
</html>