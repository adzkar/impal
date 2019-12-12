<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
	<script src="<?= base_url('js/function.js')?>"></script>
	<link rel="stylesheet" href="<?= base_url('css/style.css')?>" crossorigin="anonymous">	
	<link rel="stylesheet" href="<?= base_url('css/home.css')?>" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('css/slide.css')?>" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('css/w3.css')?>">
	<link href="<?= base_url('css/hamburgers.css')?>" rel="stylesheet">
	<script type="text/javascript">
		// function rateStar(element){
		// 	var id = element.id;
		// 	id = id.replace("star-","");
		// 	for(var i=1; i<=parseInt(id, 10);i++){
		// 		document.getElementById('star-'+i).style.color = "orange";
		// 	}
		// }
		// function leaveStar(element){
		// 	var id = element.id;
		// 	id = id.replace("star-","");
		// 	for(var i=1; i<=parseInt(id, 10);i++){
		// 		document.getElementById('star-'+i).style.color = "black";
		// 	}
		// }
		$(document).ready(function(){
			var user_id = $('#user_id').val();
			$.getJSON('http://localhost/batagor/transaksi/getPesanan/'+user_id, function (data) {
				for(var i = 0; i < data.length; i++){
					var namaGOR = data[i].nama_gor;
					var namaLapangan = data[i].nama_lapangan;
					var jenisLapangan = data[i].jenis;
					var status = data[i].status;
					$.getJSON('http://localhost/batagor/transaksi/getDetailCarts/'+data[i].carts_id, function (detil) {
						var isi = '<tr><td>'+detil.carts_id+'</td><td>GOR '+namaGOR+'</td><td>Lapangan '+namaLapangan+'( '+jenisLapangan+' )</td><td>'+detil.tanggal_main+'</td><td>'+detil.jam_main+'</td><td>'+status+'</td></tr>';
						$('#table_pesanan').append(isi);
					})
				}
			});
		});
	</script>
	<title>BATAGOR - Cahaya Mulya GOR</title>
</head>
<body class="booking">
	<input type="hidden" id="user_id" value="<?= $this->session->login ?>">
	<?php
		$this->load->view('chk_slide');	
		$this->load->view('header');	
		$this->load->view('login');	
		$this->load->view('register');
		$this->load->view('confirm-box');
		$this->load->view('pembayaranForm');		
	?>
	<div class="container-fluid">
		<div class="row h-100">
		<div class="col-md-12">
			<div class="row">
				<div class="mx-auto header-pesanan">
					<h3 class="search-title my-auto"> My Booking </h3>	
				</div>	
			</div>	
			<br>
			<div class="row">
				<div class="tabel-pesanan mx-auto">
					<table style="width:100%" id="table_pesanan">
					  <tr>
					    <th>No Pesanan</th>
					    <th>Nama GOR</th>
					    <th>Nama Lapangan</th>
					    <th>Tanggal Main</th>
					    <th>Durasi Waktu</th>
					    <th>Batas Pembayaran</th>
					  </tr>
					</table>	
				</div>

			</div>
		</div>
		</div>
		<br>
		<div class="paid" align=center>
			<button  type="button" class="btn btn-success" onclick="shPembayaran()">Lakukan Pembayaran</button>
		</div>
	</div>
</body>
</html>