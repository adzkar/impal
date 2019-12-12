<?php 

	if ($this->session->error_login) {
		$this->session->unset_userdata('error_login');
		echo '<div class="alert alert-danger" role="alert">
  			Username / Password Salah
		</div>';		
	}
	if ($this->session->error_register) {
		$this->session->unset_userdata('error_register');
		echo '<div class="alert alert-danger" role="alert">
  			Email sudah digunakan!
		</div>';		
	}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/function.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
	<link rel="stylesheet" href="css/style.css" crossorigin="anonymous">	
	<link rel="stylesheet" href="css/home.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/slide.css" crossorigin="anonymous">
	<link href="css/hamburgers.css" rel="stylesheet">
	<script>
		$(document).ready(function(){
			tglmain();
		});
	</script>
	<title>BATAGOR - Layanan Pemesanan GOR</title>
</head>
<body>
	<?php
		$this->load->view('chk_slide');	
		$this->load->view('header');	
		$this->load->view('login');	
		$this->load->view('register');	
		$this->load->view('confirm-box');
	?>
	<div class="header">
		<div class="header-content mx-auto">
			<div class="row">
				<div class="col-md-9 my-auto">
					<h1>Selamat Datang, <?php echo $this->session->nama; ?> </h1>
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
			<form action="booking">
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
										<input type="date" id="tglMain" placeholder="" class="date-input"></input>
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