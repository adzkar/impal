	
	<div id="login-container" style="display: none;opacity: 0">
		<div class="blurry-background" onclick="shLoginCustomer()">
			
		</div>
		<section class="login-box" id="login-box-customer">
			<a style="float:right" class="close-btn" onclick="shLoginCustomer()">X</a>
		  <div class="container-fluid h-100">
			<div class="row h-100">
			  <div class="col-md-6 col-center">
				<img id="img-1" src="assets/bola.jpg" class="img-login">
			  </div>
			  <div class="col-md-6">
				<div class="row">
					<p class="title-form">Login Customer</p>
				</div>
				<div class="row">
					<form class="mx-auto" method="post" action="loginAPI.php">
					  <div class="form-group">
						<label class="empass" style="font-weight: bolder">Email</label>
						<input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
						<small class="comment-login" class="comment-login"id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  </div>
					  <div class="form-group">
						<label class="empass" style="font-weight: bolder">Password</label>
						<input name="password" type="password" class="form-control" id="password" placeholder="Password">
						<small class="comment-login" class="comment-login"id="emailHelp" class="form-text text-muted">Lupa password?</small><a href="" style="font-size: 80%;">Klik di sini.</a>
					  </div>
					  <center>
						  <button type="submit" class="btn btn-act-sign" name="btnlogin">Sign In</button>
					  </center>
					</form>       
				</div>
			  </div>
			</div>
		  </div>
		</section>
	</div>