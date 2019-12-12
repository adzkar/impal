	<header class="container-fluid">
		<div class="row header-nav">
		  <div class="col-md-2">
			<div class="hamburger hamburger--collapse" type="button" onclick="shSlide()">
			  <div class="hamburger-box">
			    <div class="hamburger-inner"></div>
			  </div>
			</div>
		  	<a href="<?= base_url() ?>"><img src="<?= base_url('assets/logo.png') ?>" class="logo-gor"></a>
		  </div>
		  <div class="col-md-8"></div>
		  <div class="col-md-2">
		  	<div class="row">
		  		<?php
		  			if($this->session->login == ''){
		  				echo '	<div class="col-md-5"> <button class="btn btn-outline-warning btn-sign" onclick="shLoginCustomer()">Sign In</button></div>
		  						<div class="col-md-5"><button class="btn btn-outline-warning btn-sign" onclick="shRegisterCustomer()" >Sign Up</button></div>';
		  			}else{
		  				echo '<div class="col-md-5"></div>';
		  				echo '<div class="col-md-5"> <button class="btn btn-outline-warning btn-sign" "><a href="'.base_url('home/logout').'">Sign Out</a></button></div>';
		  			}
		  		?>

		  	</div>
		  </div>
		</div>
	</header>