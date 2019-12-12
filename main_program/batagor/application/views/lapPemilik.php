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
			$('#selectedLapangan').val(id);
			showNotification('konfirmasi','Apakah anda yakin ingin menghapus lapangan ini?','IYA','TIDAK');
		}
		function rubah_gor(){
			var nama_Gor = $('#namaGor').val();
			var alamat_Lap = $('#alamatGor').val();
			var idGor = <?= $gor_id ?>;
			$.post("<?= base_url(); ?>gor/editGor/",{namaGor : nama_Gor, alamatGor : alamat_Lap, gor_id : idGor}, function (data) {location.reload();});
			shTambahGor();

		}
		function rubah(){
			var namaLap = $('#namaLapangan').val();
			var jenisLap = $('#jenisLapangan').val();
			var hargaLap = $('#hargaLapangan').val();
			var deskripsiLap = $('#detailLapangan').val();
			var imageLapangan = $('#imageLapangan').val();
			var gorId = <?= $gor_id ?>;
			$.post("<?= base_url(); ?>gor/add_lap/",{ gor_id : gorId , imageLap : imageLapangan, namaLapangan : namaLap, jenisLapangan : jenisLap, hargaLapangan : hargaLap, deskripsiLapangan : deskripsiLap}, function (data) {location.reload();});
			shTambahLapangan();

		}
		$(document).ready(function(){
			var idGor = <?= $gor_id ?>;
			$.getJSON('<?= base_url('gor/getGOR/')?>'+idGor, function (data) {
				$('#namaGor').val(data.nama_gor);
				$('#alamatGor').val(data.alamat);
			});
			$('#yes-confirm').click(function(){
				var idLap = $('#selectedLapangan').val();
				$.getJSON('<?= base_url('gor/hapus_lap/')?>'+idLap, function (data) {
				});
				window.location.replace("<?= base_url('pemilik/lap_pemilik/')?>"+idGor);
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
		$this->load->view('editGor');	
		$this->load->view('tambahLapangan');	
		$this->load->view('confirm-box');
	?>
	<div class="container-fluid no-padding h-100">
		<input type="hidden" id="selectedLapangan" value="">
		<div class="row h-100">
				<div class="col-md-12">
					<div class="search-result">
						<div class="row">
							<div class="col-md-11">
								<h3 class="search-title"> Lapangan saya </h3>
							</div>
							<a onclick="shTambahGor()">
								<button class="btn btn-success btn-editGor">
									Sunting GOR
								</button>
							</a>
							<div class="col-md-1">
								<span> <?= count($lapangan)?> hasil</span>
							</div>
						</div>
						<div class="row">
							<div class="result">
								<?php
									if (count($lapangan) == 0) {
										echo "<center>Not Found";
										echo "</center>";
									}
									foreach ($lapangan as $val) {
								?>
								<div class="row" style="margin-bottom: 50px; border-bottom: solid 1px #E9E9E9;padding-bottom: 30px;">
									<div class="col-md-2">
										<img class="gor-img" src="<?=base_url('assets/bultang.jpg')?>">
									</div>
									<div class="col-md-10 align-items-start"> 
										<div class="row">
											<div class="col-md-10 no-padding">
												<a href="<?= base_url('pemilik/edit_lap/').$val['lapangan_id'] ?>" class="gor-name"><?= $val['nama_lapangan']?></a>
											</div>
											<div class="col-md-2">
												<a href="<?= base_url('pemilik/edit_lap/').$val['lapangan_id'] ?>">
													<button class="btn btn-success btn-cari">
														Lihat Lapangan
													</button>
												</a>
												<br><br>
												<a onclick="showNF(<?= $val['lapangan_id'] ?>)">
													<button type="button" class="btn btn-danger btn-hapus">
														Hapus Lapangan
													</button>
												</a>
											</div>
										</div>
										<div class="row">
											<span class="gor-street"><?= $res['alamat'] ?></span>
										</div>
									</div>
								</div>
								<?php 
									}
								?>
								<div class="row">
									<div class="col-md-10"></div>
									<div class="col-md-2">
										<a onclick="shTambahLapangan()">
											<button class="btn btn-success btn-addLap">
												Tambah Lapangan
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

</body>
</html>