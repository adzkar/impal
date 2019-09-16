<?php  
	// fungsi input data
	function input()
	{
		return trim(fgets(STDIN));
	}
	
	echo "Username: ";
	$username = input();
	echo "Password: ";
	$password = input();

	$data = function($status, $msg) {
		return "{
			'status': $status,
			'data': $msg
		}";
	};

	if ($username === 'admin' and $password === 'admin') {
		echo json_encode($data(200, base64_encode("Berhasil Login")));
	} else {
		echo json_encode($data(403, "Failed to Login"));
	}