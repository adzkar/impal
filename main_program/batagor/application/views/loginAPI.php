<?php
session_start();
require 'php/utility.php';
require 'php/config.php';

$url = 'http://localhost:8000/api/login';
$data = [
	'email' => $_POST['email'],
	'password' => $_POST['password'],
];
$res = json_decode(CallAPI("POST", $url, $data));
if ($res->success) {
	$_SESSION['token'] = $res->data->token;
	$_SESSION['user']  = $res->user->name;
	$_SESSION['login'] = true;
}
else {
	$_SESSION['error_login'] = true;
}
redirect($baseURL);