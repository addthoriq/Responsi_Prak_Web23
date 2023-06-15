<?php 
	include '../config/crud.php';
	$proses->edit("ruang","
							nama='$_POST[nama]',
							jm_kursi = '$_POST[kursi]'","id_ruang='$_POST[id]'");
	echo "1";
 ?>