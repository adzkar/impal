<?php
session_start();
require 'php/utility.php';
require 'php/config.php';
$url = 'http://localhost:8000/api/register';
$data = [
	'name' => $_POST['name'],
	'email' => $_POST['email'],
	'password' => $_POST['password'],
	'c_password' => $_POST['re-password'],
	'phone_number' => 1234
];
$res = json_decode(CallAPI("POST", $url, $data));
$_SESSION['token'] = $res->success->token;
$_SESSION['user']  = $res->success->name;
$_SESSION['login'] = true;
// header("Location: http://localhost/Batagor/");
redirect($baseURL);