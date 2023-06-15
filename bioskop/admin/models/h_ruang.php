<?php 
	include '../config/crud.php';
	$proses->hapus("ruang","id_ruang = '$_POST[id]'");
	echo "1";
?>