<?php 
	include '../config/crud.php';
	$proses->simpan("ruang","
							'',
							'$_POST[nama]',
							'$_POST[kursi]' ");
	echo "1";
 ?>