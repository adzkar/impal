<?php
	if(!($this->session->login_pemilik)){
		redirect(base_url('pemilik/login'));
	}
?>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
	<script src="<?=base_url('js/function.js')?>"></script>
	<link rel="stylesheet" href="<?=base_url('css/style.css')?>" crossorigin="anonymous">	
	<link rel="stylesheet" href="<?=base_url('css/home.css')?>" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url('css/slide.css')?>" crossorigin="anonymous">
	<link href="<?=base_url('css/hamburgers.css')?>" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url('css/w3.css')?>">
	<script type="text/javascript">
		function changeHarga(durasi){
			var idLap = $('#idLap').children("option:selected").val();
			$.getJSON('<?= base_url(); ?>api/lapangan/'+idLap, function (data) {
				$('#total-harga').html(durasi*data.harga);
			});
		}
		function rubah(){
			var namaLap = $('#namaLapangan').val();
			var jenisLap = $('#jenisLapangan').val();
			var hargaLap = $('#hargaLapangan').val();
			var deskripsiLap = $('#detailLapangan').val();
			var lapangan_id = $('#idLapangan').val();
			$.post("<?= base_url(); ?>gor/editLapangan/",{ lapangan_id : lapangan_id , namaLapangan : namaLap, jenisLapangan : jenisLap, hargaLapangan : hargaLap, deskripsiLapangan : deskripsiLap}, function (data) {
				   showNotification('','Sukses diganti!',0,'Ya');
			});

		}
		$(document).ready(function(){
			$('#editbtn').click(function () {
				showNotification('Konfirmasi','Apakah anda yakin ingin merubah lapangan ini?','Iya','Tidak');
			});
			$('#yes-confirm').click(function(){
				rubah();
				$('.confirm_box').hide();
			});
			$('#no-confirm').click(function(){
				hideNotification();
			});
		});
	</script>
	<title>BATAGOR -  <?= $res['nama_gor'] ?></title>
</head>
<body class="booking">
	<?php
		$this->load->view('chk_slide');	
		$this->load->view('header');	
		$this->load->view('login');	
		$this->load->view('register');
		$this->load->view('confirm-box');		
	?>
		<div class="container-fluid no-padding h-100">
		<div class="row h-100">
			<div class="col-md-2 no-padding">
					<div class="search-box">
						<div class="row">
							<img class="field-icon mx-auto" src="<?=base_url('assets/vectors/football-field.png')?>">
						</div>
						<div class="row">
							<span class="mx-auto" style="font-weight: 600"> <?= $res['nama_gor'] ?> </span>
							<input type="hidden"id="user_id" value="<?= $this->session->login ?>"></input>
						</div>
						<br>
						<div class="row">
							<div class="row page-break mx-auto"></div>
						</div>
						<br>
						<div class="row">
							<span class="text-book">Rating</span>
						</div>
						<div class="row ml-2">
							<span class="fa fa-star star star-checked"></span>
							<span class="fa fa-star star star-checked"></span>
							<span class="fa fa-star star star-checked"></span>
							<span class="fa fa-star star star-checked"></span>
							<span class="fa fa-star star"></span>
						</div>
						<br>
						<br>
						<div class="row">
							<span class="text-book">Lokasi</span>
						</div>
						<div class="row">
							<p class="gor-street-2"><?= $res['alamat'] ?></p>
						</div>
						<div class="maps" id="maps"></div>
					</div>			
			</div>
			<div class="col-md-10">
				<div class="search-result">
					<div class="row" style="height: 500px;">
						<div class="col-md-3">
							<div class="w3-content w3-display-container">
									<div class="mySlides">
										<img src="<?=base_url('assets/voli.jpg')?>" style="width:100%;max-height: 300px;">
										<div class="desc-lap">
											<span class="name-lap"></span>
											<textarea id="detailLapangan"class="desc-lap-edit" value="<?= $lapangan['detail']?>"><?= $lapangan['detail']?></textarea>
										</div>
									</div>
							  <button class="w3-button w3-white w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
							  <button class="w3-button w3-white w3-display-right" onclick="plusDivs(1)">&#10095;</button>
							</div>
						</div>
						<div class="col-md-9">
							<div class="book-box">
									<input type="hidden" id="idLapangan" value="<?= $lapangan['lapangan_id']?>">
									<div class="row">

										<span class="name-lap">Sunting Lapangan</span>
									</div>
									<br>
									<div class="row">
										<span>Nama Lapangan</span>
									</div>
									<div class="row">
								        <input id="namaLapangan" class="input-max-width" value="<?= $lapangan['nama_lapangan']?>"></input>
									</div>
									<br>
									<div class="row">
										<span>Jenis Lapangan</span>
									</div>
									<div class="row">
								        <input id="jenisLapangan" class="input-max-width" value="<?= $lapangan['jenis']?>"></input>
									</div>
						
									<br>
									<div class="row">
										<input id="hargaLapangan" value="<?= $lapangan['harga']?>"></input> &nbsp;/ Jam
									</div>
									<div class="row">
										<div class="col-md-10">
											
										</div>
										<div class="col-md-2">
											<button class="btn btn-success btn-cari" type="submit" id="editbtn">Edit</button>
										</div>
									</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="row page-break mx-auto"></div>
					</div>
					<br>
					<br>
					<div class="row">
						<div class="col-md-12">
							<div class="review" style="width:95%">
								<span class="name-lap">Review</span>
								<div class="review-box">
									<?php  
										if (count($ratings) == 0) {
											echo "<center> Be The First Comment";
											echo "</center>";
										} else {
											foreach ($ratings as $val) {
									?>
										<div class="rev" id="rev-1">
											<span>Anonymous</span> <br>
											<?php  
												for ($i=0; $i <= $val['rate']; $i++) { 
											?>
												<span class="fa fa-star star-checked"></span>
											<?php
												}
											?>
											<p class="review-desc"><i><?= $val['komentar'] ?></i></p>
										</div>
									<?php
											}
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>			
			</div>
		</div>
	</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</body>
</html>