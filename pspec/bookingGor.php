<?php

	// fungsi input data
	function input()
	{
		return trim(fgets(STDIN));
	}

	printf("Pilih Gor:\n");
	$datas = ["Gor Sukabirus","Gor Sukapura"];
	foreach ($datas as $key => $value) {
		printf(($key)." $value\n");
	}

	printf("pilih: ");
	$_ = input();
	if ($_ > count($datas) - 1) {
		printf("Index out of bounds\n");
	} else {
		printf("Nama Pemesan: Hajid\nGor: $datas[$_]\n");
	}