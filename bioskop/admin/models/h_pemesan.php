<?php 
	include '../config/crud.php';
	$proses->hapus("pemesan","id_pemesan = '$_POST[id]'");
	$proses->hapus("dtl_pemesan","id_pemesan = '$_POST[id]'");
	echo "1";
 ?>