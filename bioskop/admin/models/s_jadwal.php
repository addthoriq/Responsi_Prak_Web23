<?php 
	include '../config/crud.php';
	$proses->simpan("jadwal","
							'',
							'$_POST[mulai]',
							'$_POST[selesai]',
							'$_POST[sesi]',
							'$_POST[ruang]' ");
	echo "1";
 ?>