<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/function.js"></script>
	<link rel="stylesheet" href="css/style.css" crossorigin="anonymous">	
	<link rel="stylesheet" href="css/home.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/slide.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/w3.css">
	<link href="css/hamburgers.css" rel="stylesheet">
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
	<title>BATAGOR - Cahaya Mulya GOR</title>
</head>
<body class="booking">
	<?php
		include("chk_slide.php");
		include("header.php");
		include("login.php");
		include("register.php");
	?>
	<div class="container-fluid no-padding h-100">
		<div class="pembayaran-box">
			<div class="row">
				<h2 class="mx-auto" style="font-weight: 600">Upload Bukti Pembayaran</h2>
			</div>
			<div class="row">
				<span class="text-book"> No Pemesanan </span>
			</div>
			<div class="row">
				<input type="text" name="" class="place-input">
			</div>
			<br>
			<div class="row">
				<span class="text-book"> Unggah Bukti Pembyaran </span>
			</div>
			<div class="row">
				<input type="file" name="" class="place-input">
			</div>
			<br>
			<br>
			<br>
			<br>
			<div class="row">
				<button class="btn btn-success btn-cari mx-auto">Submit</button>
			</div>
		</div>
	</div>
</body>
</html>