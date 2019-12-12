<?php  

	require 'php/utility.php';
	session_start();

	var_dump($_POST);
	$url = 'http://localhost:8000/api/pesan'.$_GET['id_lap'];
	$data = [
		'total' => $_POST['durasi'] * 
	];
	// $res = json_decode(CallAPI("POST",$url, $data));