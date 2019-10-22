<?php  
	session_start();
?>
<div class="slide" id="slide">
		<a style="float:right" class="close-btn" onclick="shSlide()">X</a>
		<div style="margin-top: 42px"></div>
		<div class="row">
			<img src="assets/logo2.png" class="logo2">
		</div>

		<div class="row page-break mx-auto">
		</div>
		<br>
		<div class="row">
			<span class="mx-auto greetings">Halo, <?= $_SESSION['user']?>.</span>
		</div>
		<br>
		<div class="row">
			<a href="/Batagor" class="menu-item mx-auto">Home</a>
		</div>
		<div class="row">
			<a href="pesanan_saya.php" class="menu-item mx-auto item-active">Pesanan Saya</a>
		</div>
		<div class="row">
			<a href="pembayaran.php" class="menu-item mx-auto">Pembayaran</a>
		</div>
		<br>

</div>