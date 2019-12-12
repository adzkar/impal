<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css" crossorigin="anonymous">	
	<script type="text/javascript">
	function showGambar(idGambar) {
	  var element = document.getElementById(idGambar);
	  element.classList.remove("img-hide");
	  window.setTimeout(function(){element.setAttribute('style', 'opacity:1');},300);
	  
	}
	function hideGambar(idGambar) {
	  var element = document.getElementById(idGambar);
	  element.setAttribute('style', 'opacity:0');
	  window.setTimeout(function(){element.classList.add("img-hide");},300);
	  
	  
	}
	var i = 1;
	setInterval(function(){
		if(i > 3){
			i-=3;
		}
		var gambar1 = i+1;
		var gambar2 = i+2;
		if(gambar1 > 3){
			gambar1 -= 3;
		}
		if(gambar2 > 3){
			gambar2 -= 3;
		}
		var idGambar1 = "img-"+i;
		var idGambar2 = "img-"+gambar1;
		var idGambar3 = "img-"+gambar2;
		showGambar(idGambar2);
		hideGambar(idGambar1);
		hideGambar(idGambar3);
		i++;
	}, 5000);
	</script>
	<title>Halaman Masuk</title>
</head>
<body>
	<header class="container-fluid">
		<div class="row header-nav">
		  <div class="col-md-2">
		  	<img src="assets/logo_temp.png" class="logo-gor">
		  </div>
		  <div class="col-md-8"></div>
		  <div class="col-md-2">
		  	<div class="row">
		  		<div class="col-md-5"><button class="btn btn-outline-warning btn-sign">Login</button></div>
		  		<div class="col-md-5"><button class="btn btn-outline-warning btn-sign">Sign Up</button></div>
		  	</div>
		  </div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<img id="img-1" src="assets/bola.jpg" class="img-login">
				</div>
				<div class="row">
					<img id="img-2" src="assets/bultang.jpg" class="img-login img-hide" style="opacity: 0">
				</div>
				<div class="row">
					<img id="img-3" src="assets/voli.jpg" class="img-login img-hide" style="opacity: 0">
				</div>
			</div>
			<div class="col-md-4 form-login">
				<div class="row">
                	<form method="post" action="">
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
							<button class="btn btn-act-sign" style="margin:auto;" type="submit" name="btnRegister">Sign Up</button>		  		
					  	</center>
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer></footer>
</body>
</html>