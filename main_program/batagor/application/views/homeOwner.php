<?php
	if(!($this->session->login_pemilik)){
		redirect(base_url('pemilik/login'));
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/function.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css" crossorigin="anonymous">	
	<link rel="stylesheet" href="css/home.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/slide.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/cssowner.css" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
	<link href="css/hamburgers.css" rel="stylesheet">
	<script type="text/javascript">
		function showOption(id){
			$('#inputId').val(id);
			showNotification('Konfirmasi','Apakah anda ingin meng-konfirmasi pesanan ini?','Ya','Tidak');
		}
		$(document).ready(function(){
			$('#pesananTable').html('');
			$.getJSON('<?= base_url('pesanan/getPesananOwner')?>', function (data) {
				for (var i = 0; i < data.length; i++) {
					var text = '<tr class="bg-light"><th scope="row">'+(i+1)+'</th><td>'+data[i].name+'</td><td>'+data[i].nama_gor+'</td><td>'+data[i].nama_lapangan+'( '+data[i].jenis+' )</td><td>'+data[i].tanggal_main+'</td><td>'+data[i].jam_main+'</td><td>'+data[i].durasi+' jam</td><td>'+data[i].total+'</td><td>'+data[i].status+'</td><td><button type="button" class="btn btn-outline-dark">KLIK DISINI</button></td><td><button type="button" class="btn btn-outline-dark" onclick="showOption('+data[i].carts_id+')">KLIK DISINI</button></td></tr>'
					$('#pesananTable').append(text);
				}

			});
			$('#no-confirm').click(function(){
				var id = $('#inputId').val();
				$.getJSON('<?= base_url('pesanan/rubahStatus/')?>'+id+'/tidak', function (data) {
				});
				hideNotification();
				location.reload();
			});
			$('#yes-confirm').click(function(){
				var id = $('#inputId').val();
				$.getJSON('<?= base_url('pesanan/rubahStatus/')?>'+id+'/ya', function (data) {
				});
				hideNotification();
				location.reload();
			});
		})
	</script>
	<title>BATAGOR - Layanan Pemesanan GOR</title>
</head>
<body>
	<?php
		$this->load->view('chk_slide');	
		$this->load->view('header');	
		$this->load->view('login');	
		$this->load->view('register');	
		$this->load->view('confirm-box');
	?>
	<input type="hidden" name="" id="inputId">
	<div class="header">
		<div class="header-content mx-auto">
			<div class="row">
				<div class="col-md-9 my-auto">
					<h1>Selamat Datang, <?php echo $this->session->nama; ?> </h1>
					<p> BATAGOR menyediakan tempat untuk kalian memesan tempat berolahraga di manapun  dan kapan saja.</p>
				</div>
				<div class="col-md-3">
					<img src="assets/vectors/football.png" class="cartoon-play"></img>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="container">
		<form class="example" action="action_page.php">
		  <input type="text" placeholder="Search.." name="search">
		  <button type="submit"><i class="fa fa-search"></i></button>
		</form>
		<br>
		<table class="table table-striped">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nama Pemesanan</th>
		      <th scope="col">Nama GOR</th>
		      <th scope="col">Nama Lapangan</th>
		      <th scope="col">Tanggal Main</th>
		      <th scope="col">Jam Main</th>
		      <th scope="col">Durasi</th>
		      <th scope="col">Biaya</th>
		      <th scope="col">Status</th>
		      <th scope="col">Bukti Pembayaran</th>
		      <th scope="col">Eksekusi</th>
		    </tr>
		  </thead>
		  <tbody id="pesananTable">
		    <tr class="bg-light">
		      <th scope="row">2</th>
		      <td>Joni</td>
		      <td>Qui</td>
		      <td>Mawar</td>
		      <td>13-06-2019</td>
		      <td>10.00</td>
		      <td>3 jam</td>
		      <td>120000</td>
		      <td>BELUM LUNAS</td>
		      <td><button type="button" class="btn btn-outline-dark">KLIK DISINI</button></td>
		      <td><button type="button" class="btn btn-outline-dark">KLIK DISINI</button></td>
		    </tr>
		    <tr class="bg-light">
		      <th scope="row">3</th>
		      <td>Jonu</td>
		      <td>Qui</td>
		      <td>Kembang</td>
		      <td>7-02-2019</td>
		      <td>19.00</td>
		      <td>2 jam</td>
		      <td>80000</td>
		      <td>BELUM LUNAS</td>
		      <td><button type="button" class="btn btn-outline-dark">KLIK DISINI</button></td>
		      <td><button type="button" class="btn btn-outline-dark">KLIK DISINI</button></td>
		    </tr>
		  </tbody>
		</table>
	</div>
	
</body>
</html>