<?php 
	include '../config/crud.php';
	$proses->simpan("tiket","
							'',
							'$_POST[harga]',
							'$_POST[stok]', 
							'$_POST[id_film]' ");
	echo "berhasil";
 ?>