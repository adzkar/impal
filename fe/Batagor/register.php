	<div id="register-container" style="display: none;opacity: 0">
		<div class="blurry-background-register" onclick="shRegisterCustomer()">
			
		</div>
		<section class="register-box" id="register-box-customer">
			<a style="float:right" class="close-btn" onclick="shRegisterCustomer()">X</a>
		  <div class="container-fluid h-100">
			<div class="row h-100">
			  <div class="col-md-6 col-center">
				<img id="img-1" src="assets/bola.jpg" class="img-login">
			  </div>
			  <div class="col-md-6">
				<div class="row">
					<p class="title-form">Register Customer</p>
				</div>
				<div class="row">
                	<form class="mx-auto" method="post" action="registAPI.php">
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