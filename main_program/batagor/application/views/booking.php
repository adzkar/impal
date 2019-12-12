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
		$this->load->view('chk_slide');	
		$this->load->view('header');	
		$this->load->view('login');	
		$this->load->view('register');	
	?>
	<div class="container-fluid no-padding h-100">
		<div class="row h-100">
			<div class="col-md-2 no-padding">
					<form action="Booking">
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
								<span> <?= count($res)?> hasil</span>
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
								<div class="row" style="margin-bottom: 50px; border-bottom: solid 1px #E9E9E9;padding-bottom: 30px;">
									<div class="col-md-2">
										<img class="gor-img" src="assets/bultang.jpg">
									</div>
									<div class="col-md-10 align-items-start"> 
										<div class="row">
											<div class="col-md-10 no-padding">
												<a href="<?= "gor?id_gor=".$val['gor_id'] ?>" class="gor-name"><?= $val['nama_gor']?></a>
											</div>
											<div class="col-md-2">
												<a href="<?= "gor?id_gor=".$val['gor_id'] ?>">
													<button class="btn btn-success btn-cari">
														Pesan
													</button>
												</a>
											</div>
										</div>
										<div class="row">
											<span class="gor-street"><?= $val['alamat'] ?></span>
										</div>
										<div class="row" style="margin-top:100px;">
											<div class="col-md-10 no-padding">
												<span class="">Fasilitas</span>
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