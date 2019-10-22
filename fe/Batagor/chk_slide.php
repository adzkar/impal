<?php
	session_start();
	$logged = $_SESSION['login'];
	if(!$logged){
		include('slide.php');
	}else{
		include('slide_logged.php');
	}
?>