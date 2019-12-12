<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/function.js"></script>
	<link rel="stylesheet" href="css/style.css" crossorigin="anonymous">	
	<link rel="stylesheet" href="css/home.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/slide.css" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="css/hamburgers.css" rel="stylesheet">
	<title>Halaman Booking</title>
	<script type="text/javascript">
		$(document).ready(function(){
			var user_id = $('#user_id').val();
			$.getJSON('http://localhost/batagor/pesanan/getPesanan/'+user_id, function (data) {
				for(var i = 0; i < data.length; i++){
					var isi = '<tr><td>'+data[i].carts_id+'</td><td>GOR '+data[i].nama_gor+'</td><td>Lapangan '+data[i].nama_lapangan+'( '+data[i].jenis+' )</td><td>'+data[i].tanggal_main+'</td><td>'+data[i].jam_main+'</td><td>'+data[i].status+'</td></tr>';
					$('#table_pesanan').append(isi);
				}
			});
		});
	</script>
</head>
<body class="booking">
	<?php
		include("chk_slide.php");
		include("header.php");
		include("login.php");
		include("register.php");
	?>
	<div class="container-fluid no-padding h-100">
	<input type="hidden"id="user_id" value="<?= $this->session->login ?>"></input>
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
							    <th>Status</th>
							  </tr>
							</table>	
						</div>

					</div>
				</div>
		</div>
	</div>

</body>
</html>