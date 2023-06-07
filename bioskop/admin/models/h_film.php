<?php 
	include '../config/crud.php';
	$proses->hapus("film","id_film = '$_POST[id]'");
	echo "1";
 ?>