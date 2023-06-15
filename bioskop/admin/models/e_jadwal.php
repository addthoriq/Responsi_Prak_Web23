<?php 
	include '../config/crud.php';
	$proses->edit("jadwal","
							tgl_mulai='$_POST[mulai]',
							tgl_berhenti='$_POST[selesai]',
							id_sesi='$_POST[sesi]',
							id_ruang='$_POST[ruang]'","id_jadwal='$_POST[id]'");
	echo "1";
 ?>