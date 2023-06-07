<?php 
	include '../config/crud.php';
	$proses->hapus("tiket","id_tiket = '$_POST[id]' ");
	echo "true";
 ?>