<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/function.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
	<link rel="stylesheet" href="<?= base_url('css/style.css')?>" crossorigin="anonymous">	
	<link rel="stylesheet" href="<?= base_url('css/home.css')?>" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('css/slide.css')?> crossorigin="anonymous">
	<link href="css/hamburgers.css" rel="stylesheet">
	<script>
		$(document).ready(function(){
			tglmain();
		});
	</script>
	<title>BATAGOR - Layanan Pemesanan GOR</title>
</head>
<body>
	<div id="register-container"
		<div class="blurry-background-register" onclick="shRegisterCustomer()">
			
		</div>
		<section class="register-box" id="register-box-customer">
			<a style="float:right" class="close-btn" onclick="shRegisterCustomer()">X</a>
		  <div class="container-fluid h-100">
			<div class="row h-100">
			  <div class="col-md-6 col-center">
				<img id="img-1" src="<?= base_url('assets/bola.jpg')?>" class="img-login">
			  </div>
			  <div class="col-md-6">
				<div class="row">
					<p class="title-form">Register Pemilik GOR</p>
				</div>
				<div class="row">
                	<form class="mx-auto" method="post" action="<?php echo base_url('pemilik/cek_user_register'); ?>">
                		<div class="form-group">
						    <label class="empass" style="font-weight: bolder">Nama</label>
						    <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
					  	</div>
					  	<div class="form-group">
						    <label class="empass" style="font-weight: bolder">Email</label>
						    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
						    <small class="comment-login" class="comment-login"id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  	</div>
					  	<div class="form-group">
						    <label class="empass" style="font-weight: bolder">Password</label>
						    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
					  	</div>
					  	<div class="form-group">
						    <label class="empass" style="font-weight: bolder">Re-password</label>
						    <input name="re-password" type="password" class="form-control" id="re-password" placeholder="Password">
					  	</div>
					  	<div class="form-group">
						    <label class="empass" style="font-weight: bolder">Nomor Telepon</label>
						    <input name="notelp" type="text" class="form-control" id="notelp" placeholder="No Telepon">
					  	</div>
					  	<center>
							<button href="" class="btn btn-act-sign" style="margin:auto;">Sign Up</button>
					  	</center>
					</form>     
				</div>
			  </div>
			</div>
		  </div>
		</section>
	</div>
	
</body>
</html>