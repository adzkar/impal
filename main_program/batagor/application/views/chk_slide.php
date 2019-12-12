<?php
	if($this->session->login == ''){
		include('slide.php');
	}else{
		include('slide_logged.php');
	}
?>