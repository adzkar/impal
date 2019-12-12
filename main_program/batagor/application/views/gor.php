<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/function.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
	
	<link rel="stylesheet" href="css/style.css" crossorigin="anonymous">	
	<link rel="stylesheet" href="css/home.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/slide.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/confirm-box.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/w3.css">
	<link href="css/hamburgers.css" rel="stylesheet">
	<script type="text/javascript">
		function changeHarga(durasi){
			var idLap = $('#idLap').children("option:selected").val();
			$.getJSON('<?= base_url(); ?>api/lapangan/'+idLap, function (data) {
				$('#total-harga').html(durasi*data.harga);
			});
		}
		function pesan(){
			var idLap = $('#idLap').children("option:selected").val();
			var tanggal = $('#tglMain').val();
			var jamMain = $('#jamMain').children("option:selected").val();
			var lamaMain = $('#durasi').val();
			var harga = $('#total-harga').html();
			var user_id = $('#user_id').val();
			$.post("<?= base_url(); ?>transaksi/pesanLap/",{ id : idLap , tanggal_main : tanggal, jam_main : jamMain, durasi : lamaMain, total_harga : harga, user : user_id}, function (data) {
				   
			});

		}
		function getJam(){
			var idLap = $('#idLap').children("option:selected").val();
			var tanggal = $('#tglMain').val();
			$('#jamMain').html('');
			$.getJSON('<?= base_url(); ?>gor/getJamTersedia/'+idLap+'/'+tanggal, function (data) {			
				for (var i = 0; i < data.length; i++) {
					if(data[i].status == 'tersedia'){
						var text = '<option value="'+data[i].jam+'">'+data[i].jam+'</option>';
						$('#jamMain').append(text);
					}
				}
			});
		}
		$(document).ready(function(){
			tglmain();
			$('#durasi').val('1');
			changeHarga(1);
			$('#idLap').change(function () {
				changeHarga(parseInt($('#durasi').val()));
				getJam();
			});
			$('#durasi').change(function () {
				changeHarga(parseInt($('#durasi').val()));
			});
			$('#pesan').click(function () {
				if($('#user_id').val() == ''){
					shLoginCustomer();
				}else{
					showNotification('Konfirmasi','Apakah anda yakin ingin memesan lapangan ini?','Iya','Tidak');
				}
			});
			$('.tglMain').change(function(){
				getJam();
			})
			$('#yes-confirm').click(function(){
				pesan();
				window.location.replace("<?= base_url(); ?>pesanan");
				$('.confirm_box').hide();
			});
			$('#no-confirm').click(function(){
				hideNotification();
			});
			getJam();
		});
	</script>
	<script type="text/javascript">
		function rateStar(element){
			var id = element.id;
			id = id.replace("star-","");
			for(var i=1; i<=parseInt(id, 10);i++){
				document.getElementById('star-'+i).style.color = "orange";
			}
		}
		function leaveStar(element){
			var id = element.id;
			id = id.replace("star-","");
			for(var i=1; i<=parseInt(id, 10);i++){
				document.getElementById('star-'+i).style.color = "black";
			}
		}
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
							<img class="field-icon mx-auto" src="assets/vectors/football-field.png">
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
								<?php  
									foreach ($lapangan as $value) {
								?>
									<div class="mySlides">
										<img src="assets/voli.jpg" style="width:100%;max-height: 300px;">
										<div class="desc-lap">
											<span class="name-lap"></span>
											<p class="desc-lap-text"><?= $value['detail']?></p>
										</div>
									</div>
								<?php
									}
								?>
							  <button class="w3-button w3-white w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
							  <button class="w3-button w3-white w3-display-right" onclick="plusDivs(1)">&#10095;</button>
							</div>
						</div>
						<div class="col-md-9">
							<div class="book-box">
									<div class="row">
										<span class="name-lap">Pemesanan Lapangan</span>
									</div>
									<br>
									<div class="row">
										<span>Pilih Lapangan</span>
									</div>
									<div class="row">
								      <select class="form-control" id="idLap">
									<?php  
										foreach ($lapangan as $value) {
									?>
										
								        <option value="<?= $value['lapangan_id']?>">Lapangan <?= $value['nama_lapangan']?> ( <?= $value['jenis']?> )</option>
										
								<?php
									}
								?>
								      </select>
									</div>
									<br>
									<div class="row">
										<span>Pilih Tanggal</span>
									</div>
									<div class="row">
										<input id="tglMain" type="date" name="tgl" class="tglMain" style="border:none; width:100%">
									</div>
									<br>
									<div class="row">
										<span>Pilih Jam Main</span>
									</div>
									<div class="row">
								      <select id="jamMain" class="form-control">
								        <option value="07:00">07:00</option>
								        <option value="08:00">08:00</option>
								        <option value="12:00">12:00</option>
								        <option value="18:00">18:00</option>
								      </select>
									</div>
									<br>
									<div class="row">
										<span>Durasi</span>
									</div>
									<div class="row">
										<div class="col-md-6" style="padding-left:0">
											<input name="durasi" id="durasi" style="border: none" >&nbsp; jam
										</div>
										<div class="col-md-4">
											<span class="total-harga">Harga: Rp <span id="total-harga"></span></span> / Jam
										</div>
										<div class="col-md-2">
											<button class="btn btn-success btn-cari" type="submit" id="pesan">Pesan</button>
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
						<div class="col-md-6">
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
						<div class="col-md-6">
							<div class="review" style=" width:97%">
								<span class="name-lap">&nbsp;</span>
								<div class="review-box">
									<div class="row">
										<span>Berikan Rating dan Review untuk GOR ini</span>
									</div>
									<br>
									<div class="row">
										<span>Rating</span>
									</div>
									<div class="starsss">
										<span id="star-1" onmouseover="rateStar(this);" onmouseleave="leaveStar(this)" class="fa fa-star"></span>
										<span id="star-2" onmouseover="rateStar(this);" onmouseleave="leaveStar(this)"  class="fa fa-star"></span>
										<span id="star-3" onmouseover="rateStar(this);" onmouseleave="leaveStar(this)"  class="fa fa-star"></span>
										<span id="star-4" onmouseover="rateStar(this);" onmouseleave="leaveStar(this)"  class="fa fa-star"></span>
										<span id="star-5" onmouseover="rateStar(this);" onmouseleave="leaveStar(this)" class="fa fa-star"></span>
									</div>
									<br>
									<div class="row">
										<span>Review</span>
									</div>
									<div class="row">
										<textarea class="review-ta"></textarea>	
									</div>
									<br>
									<div class="row">
										<div class="col-md-10"></div>
										<div class="col-md-2"> <button class="btn btn-success btn-cari">Submit</button></div>
									</div>
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