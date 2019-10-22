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
				<div class="col-md-12">
					<div class="row">
						<div class="mx-auto header-pesanan">
							<h3 class="search-title my-auto"> My Booking </h3>	
						</div>	
					</div>	
					<br>
					<div class="row">
						<div class="tabel-pesanan mx-auto">
							<table style="width:100%">
							  <tr>
							    <th>No Pesanan</th>
							    <th>Nama GOR</th>
							    <th>Tanggal Main</th>
							    <th>Durasi Waktu</th>
							    <th>Status</th>
							  </tr>
							  <tr>
							    <td>19230124</td>
							    <td>GOR AnjayMabar</td>
							    <td>17 Agustus 1945</td>
							    <td>14.00 - 14.01</td>
							    <td>Belum di Bayar</td>
							  </tr>
							  <tr>
							    <td>213312</td>
							    <td>GOR AnjayMabar</td>
							    <td>18 Agustus 1945</td>
							    <td>14.00 - 14.01</td>
							    <td>Pending</td>
							  </tr>
							</table>	
						</div>

					</div>
				</div>
		</div>
	</div>

</body>
</html>