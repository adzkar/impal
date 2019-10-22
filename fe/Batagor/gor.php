<?php  
	session_start();
	$url = "http://localhost:8000/api/GetGor/".$_GET['id_gor'];
	$res = json_decode(file_get_contents($url))->data;
?>

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
		<div class="row h-100">
			<div class="col-md-2 no-padding">
					<div class="search-box">
						<div class="row">
							<img class="field-icon mx-auto" src="assets/vectors/football-field.png">
						</div>
						<div class="row">
							<span class="mx-auto" style="font-weight: 600"> <?= $res->nama ?> </span>
						</div>
						<br>
						<div class="row">
							<div class="row page-break mx-auto"></div>
						</div>
						<br>
						<div class="row">
							<span class="text-book">Rating</span>
						</div>
						<div class="row ml-2">
							<span class="fa fa-star star star-checked"></span>
							<span class="fa fa-star star star-checked"></span>
							<span class="fa fa-star star star-checked"></span>
							<span class="fa fa-star star star-checked"></span>
							<span class="fa fa-star star"></span>
						</div>
						<br>
						<br>
						<div class="row">
							<span class="text-book">Lokasi</span>
						</div>
						<div class="row">
							<p class="gor-street-2"><?= $res->alamat ?></p>
						</div>
						<div class="maps" id="maps"></div>
					</div>			
			</div>
			<div class="col-md-10">
				<div class="search-result">
					<div class="row" style="height: 500px;">
						<div class="col-md-3">
							<div class="w3-content w3-display-container">
								<?php  
									foreach ($res->lapangans as $value) {
								?>
									<div class="mySlides">
										<img src="assets/voli.jpg" style="width:100%;max-height: 300px;">
										<div class="desc-lap">
											<span class="name-lap"></span>
											<p class="desc-lap-text"><?= $value->detail?></p>
										</div>
									</div>
								<?php
									}
								?>
							  <button class="w3-button w3-white w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
							  <button class="w3-button w3-white w3-display-right" onclick="plusDivs(1)">&#10095;</button>
							</div>
						</div>
						<div class="col-md-9">
							<div class="book-box">
								<form action="pesanan_saya.php" method="post">
									<div class="row">
										<span class="name-lap">Pemesanan Lapangan</span>
									</div>
									<br>
									<div class="row">
										<span>Pilih Lapangan</span>
									</div>
									<div class="row">
								      <select class="form-control">
								        <option value="92183">Lapangan Futsal</option>
								        <option value="21390">Lapangan Basket</option>
								        <option value="29310">Lapangan Badminton</option>
								        <option value="900210">Lapangan Volley</option>
								      </select>
									</div>
									<br>
									<div class="row">
										<span>Pilih Tanggal</span>
									</div>
									<div class="row">
										<input type="date" name="tgl" style="border:none; width:100%">
									</div>
									<br>
									<div class="row">
										<span>Pilih Jam Main</span>
									</div>
									<div class="row">
								      <select class="form-control">
								        <option value="1">07:00</option>
								        <option value="2">08:00</option>
								        <option value="3">12:00</option>
								        <option value="4">18:00</option>
								      </select>
									</div>
									<br>
									<div class="row">
										<span>Durasi</span>
									</div>
									<div class="row">
										<div class="col-md-6">
											<input name="durasi" style="border: none" >&nbsp; jam
										</div>
										<div class="col-md-4">
											<span class="total-harga">Harga: Rp <?= number_format($res->lapangans[0]->harga, 0, ",",".") ?></span> / Jam
										</div>
										<div class="col-md-2">
											<button class="btn btn-success btn-cari" type="submit">Pesan</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="row page-break mx-auto"></div>
					</div>
					<br>
					<br>
					<div class="row">
						<div class="col-md-6">
							<div class="review" style="width:95%">
								<span class="name-lap">Review</span>
								<div class="review-box">
									<?php  
										if (count($res->ratings) == 0) {
											echo "<center> Be The First Comment";
											echo "</center>";
										} else {
											foreach ($res->ratings as $val) {
									?>
										<div class="rev" id="rev-1">
											<span>Anonymous</span> <br>
											<?php  
												for ($i=0; $i <= $val->rate; $i++) { 
											?>
												<span class="fa fa-star star-checked"></span>
											<?php
												}
											?>
											<p class="review-desc"><i><?= $val->komentar ?></i></p>
										</div>
									<?php
											}
										}
									?>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="review" style=" width:97%">
								<span class="name-lap">&nbsp;</span>
								<div class="review-box">
									<div class="row">
										<span>Berikan Rating dan Review untuk GOR ini</span>
									</div>
									<br>
									<div class="row">
										<span>Rating</span>
									</div>
									<div class="starsss">
										<span id="star-1" onmouseover="rateStar(this);" onmouseleave="leaveStar(this)" class="fa fa-star"></span>
										<span id="star-2" onmouseover="rateStar(this);" onmouseleave="leaveStar(this)"  class="fa fa-star"></span>
										<span id="star-3" onmouseover="rateStar(this);" onmouseleave="leaveStar(this)"  class="fa fa-star"></span>
										<span id="star-4" onmouseover="rateStar(this);" onmouseleave="leaveStar(this)"  class="fa fa-star"></span>
										<span id="star-5" onmouseover="rateStar(this);" onmouseleave="leaveStar(this)" class="fa fa-star"></span>
									</div>
									<br>
									<div class="row">
										<span>Review</span>
									</div>
									<div class="row">
										<textarea class="review-ta"></textarea>	
									</div>
									<br>
									<div class="row">
										<div class="col-md-10"></div>
										<div class="col-md-2"> <button class="btn btn-success btn-cari">Submit</button></div>
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>			
			</div>
		</div>
	</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</body>
</html>