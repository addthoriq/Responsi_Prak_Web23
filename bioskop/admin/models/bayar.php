<?php 
	include '../../config/crud.php';
	$proses->edit("pemesan","
							status = '1' ","id_pemesan = '$_POST[id]'");
	echo "1";
 ?>