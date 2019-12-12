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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css" crossorigin="anonymous">	
	<link rel="stylesheet" href="css/home.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/slide.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/search.css" crossorigin="anonymous">
	<link href="css/hamburgers.css" rel="stylesheet">
	<script type="text/javascript">
		function ambilLap(id){
			$.getJSON('<?= base_url(); ?>gor/getLapGor/'+id, function (data) {
				$('#idLap').html('');
				for (var i = 0; i < data.length; i++) {
					var text = '<option value="'+data[i].lapangan_id+'">'+data[i].nama_lapangan+'</option>';
					$('#idLap').append(text);
				}
			});
		}
		function jadwal(){
			var idGor = $('#idGor').children("option:selected").val();
			var idLapangan = $('#idLap').children("option:selected").val();
			var tanggal = $('#tglMain').val();
			$.getJSON('<?= base_url(); ?>pemilik/getJadwal/'+idGor+'/'+idLapangan+'/'+tanggal, function (data) {
				$('#jadwalGor').html('');
				for (var i = 0; i < data.length; i++) {
					var text = '<tr class="bg-light"><th scope="row">'+i+'</th><td>'+tanggal+'</td><td>'+data[i].jam_main+'</td><td>'+data[i].status+'</td><td>'+data[i].customer+'</td></tr>';
					$('#jadwalGor').append(text);
				}
			});
		}
		$(document).ready(function(){
			tglmain();
			$.getJSON('<?= base_url(); ?>gor/getGorOwner/', function (data) {
				ambilLap(data[0].gor_id);
				for (var i = 0; i < data.length; i++) {
					var text = '<option value="'+data[i].gor_id+'">'+data[i].nama_gor+'</option>'
					$('#idGor').append(text);
				}
			});
			$('#idGor').change(function(){
				var idGor = $('#idGor').children("option:selected").val();
				ambilLap(idGor);
				jadwal();
			});
			$('#idLap').change(function(){
				jadwal();
			});
			$('#tglMain').change(function(){
				jadwal();
			});
			jadwal();
		});
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
	<div class="header">
		<div class="header-content mx-auto">
			<div class="row">
				<div class="col-md-9 my-auto">
					<h1>Jadwal Lapangan GOR anda</h1>
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
<!-- 		<table style="border: none">
			<tr style="border:0">
				<td> -->
					<div class="row">
						<div class="col-2">
							<div class="dropdown">
						      <select class="form-control" id="idGor">
						        
						      </select>
							</div>
						</div>
						<div class="col-2">
							<div class="dropdown">
						      <select class="form-control" id="idLap">
						        
						      </select>
							</div>
						</div>
						<div class="col-2">
							<div class="dropdown">
								<input id="tglMain" type="date" name="tgl" style="border:none; width:100%">
							</div>
						</div>
					</div>
	<!-- 				</td>
					<td> -->
<!-- 				</td>
			</tr>
		</table> -->
		<br>
		<table class="table table-striped">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Tanggal Main</th>
		      <th scope="col">Jam Main</th>
		      <th scope="col">Status</th>
		      <th scope="col">Customer</th>
		    </tr>
		  </thead>
		  <tbody id="jadwalGor">
		  </tbody>
		</table>
	</div>
	
</body>
</html>