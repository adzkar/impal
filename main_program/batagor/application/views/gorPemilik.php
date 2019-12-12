<?php
	if(!($this->session->login_pemilik)){
		redirect(base_url('pemilik/login'));
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="<?=base_url('js/function.js')?>"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
	<link rel="stylesheet" href="<?=base_url('css/style.css')?>" crossorigin="anonymous">	
	<link rel="stylesheet" href="<?=base_url('css/home.css')?>" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url('css/slide.css')?>" crossorigin="anonymous">
	<link href="<?=base_url('css/hamburgers.css')?>" rel="stylesheet">
	<script type="text/javascript">
		function showNF(id){
			$('#idgor').val(id);
			showNotification('konfirmasi','Apakah anda yakin ingin menghapus GOR ini?','IYA','TIDAK');
		}
		function rubah(){
			var nama_Gor = $('#namaGor').val();
			var alamat_Lap = $('#alamatGor').val();
			$.post("<?= base_url(); ?>gor/add_gor/",{namaGor : nama_Gor, alamatGor : alamat_Lap}, function (data) {location.reload();});
			shTambahGor();
		}
		$(document).ready(function(){
			$('#yes-confirm').click(function(){
				var idGor = $('#idgor').val();
				$.getJSON('<?= base_url('gor/hapus_gor/')?>'+idGor, function (data) {
				});
				location.reload();
				hideNotification();
			});
			$('#no-confirm').click(function(){
				hideNotification();
			});
		});
	</script>
	<title>Halaman Booking</title>
</head>
<body class="booking">
	<?php
		$this->load->view('chk_slide');	
		$this->load->view('header');	
		$this->load->view('login');	
		$this->load->view('register');
		$this->load->view('gorTambah');
		$this->load->view('tambahLapangan');
		$this->load->view('confirm-box');	
	?>
	<div class="container-fluid no-padding h-100">
		<input type="hidden" id="idgor" value="">
		<div class="row h-100">
				<div class="col-md-12">
					<div class="search-result">
						<div class="row">
							<div class="col-md-11">
								<h3 class="search-title"> GOR saya </h3>
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
										<img class="gor-img" src="<?=base_url('assets/bultang.jpg')?>">
									</div>
									<div class="col-md-10 align-items-start"> 
										<div class="row">
											<div class="col-md-10 no-padding">
												<a href="<?= base_url('pemilik/lap_pemilik/').$val['gor_id'] ?>" class="gor-name"><?= $val['nama_gor']?></a>
											</div>
											<div class="col-md-2">
												<a href="<?= base_url('pemilik/lap_pemilik/').$val['gor_id'] ?>">
													<button class="btn btn-success btn-cari">
														Lihat GOR
													</button>
												</a>
												<br><br>
												<a onclick="showNF(<?= $val['gor_id'] ?>)">
													<button type="button" class="btn btn-danger btn-hapus">
														Hapus GOR
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
													<img class="ball-icon" src="<?=base_url('assets/vectors/ball-icon.png')?>" alt="Futsal" title="Futsal">
													<img class="ball-icon" src="<?=base_url('assets/vectors/basketball-icon.png')?>" alt="Basket" title="Basket">
													<img class="ball-icon" src="<?=base_url('assets/vectors/badminton-icon.png')?>" alt="Badminton" title="Badminton">
												</div>
											</div>
		
										</div>
									</div>
								</div>

								<?php 
									}
								?>
								<div class="row">
									<div class="col-md-10"></div>
									<div class="col-md-2">
										<a onclick="shTambahGor()">
											<button class="btn btn-success btn-addLap">
												Tambah GOR
											</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>		
				</div>
				</div>
		</div>
	</div>

</body>
</html>