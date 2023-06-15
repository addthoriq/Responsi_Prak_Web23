<?php 
	include '../config/crud.php';
	$proses->hapus("member","id_member = '$_POST[id]'");
	echo "1";
 ?>