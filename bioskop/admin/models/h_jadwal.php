<?php 
	include '../config/crud.php';
	$proses->hapus("jadwal","id_jadwal = '$_POST[id]'");
	echo "1";
 ?>