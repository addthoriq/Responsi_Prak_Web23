<?php 
	include '../config/crud.php';
	$proses->edit("sesi","
						sesi = '$_POST[nama]',
						mulai = '$_POST[mulai]',
						selesai = '$_POST[selesai]' ","id_sesi = '$_POST[id]'");
	echo "1";
 ?>