<?php  
	session_start();
?>

<?php 
	if ($_SESSION['error_login']) {
	unset($_SESSION['error_login']);
?>
<div class="alert alert-danger" role="alert">
  Username / Password Salah
</div>
<?php  
	}
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
	<title>BATAGOR - Layanan Pemesanan GOR</title>
</head>
<body>
	<?php
		include("chk_slide.php");
		include("header.php");
		include("login.php");
		include("register.php");
	?>
	<div class="header">
		<div class="header-content mx-auto">
			<div class="row">
				<div class="col-md-9 my-auto">
					<h1>Selamat Datang, Guest</h1>
					<p> BATAGOR menyediakan tempat untuk kalian memesan tempat berolahraga di manapun  dan kapan saja.</p>
				</div>
				<div class="col-md-3">
					<img src="assets/vectors/football.png" class="cartoon-play"></img>
				</div>
			</div>
		</div>
	</div>
	<div class="booking-area">
		<div class="booking-form mx-auto">
			<form action="booking.php">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<span class="text-book">Kota, tempat, lokasi</span>
						</div>
							<div class="row">
								<input type="text" placeholder="Bojongsoang, Bandung, Jawa Barat" class="place-input" name="kata_kunci" required=""></input>
							</div>
							</br>
							<div class="row">
								<div class="col-md-10">
									<div class="row">
										<span class="text-book">Tanggal</span>
									</div>
									<div class="row">
										<input type="date" placeholder="" class="date-input"></input>
									</div>
								</div>
								<div class="col-md-2">
									<div class="cari-d">
										<button type="submit" class="btn btn-success"> CARI </button>
									</div>
								</div>
							</div>
					</div>
					<div class="col-md-4 type-gor">
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
					</div>
				</div>
			<form>
		</div>
	</div>
	<br>
	<br>
	<div class="free-area mx-auto">
		<div class="row">
			<h1 class="mx-auto">Kenapa Harus Kita?</h1>
		</div>
		<div class="row">
			<div class="col-md-2">
				<img src="assets/vectors/efficiency.png" class="clear-img">
			</div>
			<div class="col-md-10">
				<h2>Efisien</h2>
				<p style="width:50%">Kami menyediakan platform untuk anda menyewa GOR tanpa perlu datang ke tempatnya langsung. Menghemat waktu dan tenaga.</p>
			</div>
		</div>
		<div class="row" style="float:right">
			<div class="col-md-5">
			</div>
			<div class="col-md-5">
				<h2>Real-time</h2>
				<p style="">Jadwal yang ada di pilihan GOR anda terjamin selalu yang terbaru, sehingga kalian tidak perlu menanyakan kepada pihak GOR lagi untuk jadwal yang kosong.</p>
			</div>
			<div class="col-md-2">
				<img src="assets/vectors/real-time-icon-6.jpg" class="clear-img">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<img src="assets/vectors/safe.png" class="clear-img">
			</div>
			<div class="col-md-5">
				<h2>Aman</h2>
				<p style="">Data anda merupakan sebuah privasi. Website kami menjamin data anda tidak akan jatuh ke pihak yang tidak bertanggung jawab.</p>
			</div>
			<div class="col-md-5">
			</div>
		</div>
	</div>

</body>
</html>