<div class="slide" id="slide">
		<a style="float:right" class="close-btn" onclick="shSlide()">X</a>
		<div style="margin-top: 42px"></div>
		<div class="row">
			<img src="<?= base_url('assets/logo2.png')?>" class="logo2">
		</div>

		<div class="row page-break mx-auto">
		</div>
		<br>
		<div class="row">
			<span class="mx-auto greetings">Halo, <?php echo $this->session->nama ?>.</span>
		</div>
		<br>
		<?php
			if(!($this->session->login_pemilik)){
		?>
		<div class="row">
			<a href="/batagor" class="menu-item mx-auto item-active">Home</a>
		</div>
		<div class="row">
			<a href="/batagor/user/editProfile" class="menu-item mx-auto">Edit Profile</a>
		</div>
		<div class="row">
			<a href="/batagor/pesanan" class="menu-item mx-auto">Pesanan Saya</a>
		</div>
		<div class="row">
			<a href="/batagor/transaksi/pembayaran" class="menu-item mx-auto">Pembayaran</a>
		</div>
		<br>
		<?php
		}else{


		?>
		<div class="row">
			<a href="<?= base_url('homeOwners')?>" class="menu-item mx-auto item-active">Pesanan Saya</a>
		</div>
		<div class="row">
			<a href="<?= base_url('pemilik/editProfile')?>" class="menu-item mx-auto">Edit Profile</a>
		</div>
		<div class="row">
			<a href="<?= base_url('pemilik/gor_pemilik')?>" class="menu-item mx-auto">GOR Saya</a>
		</div>
		<div class="row">
			<a href="<?= base_url('JadwalGor')?>" class="menu-item mx-auto">Jadwal</a>
		</div>
		<br>
		<?php
			}
		?>
</div>