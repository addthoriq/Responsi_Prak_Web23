<?php 
	include '../config/crud.php';
	$date = date("Y-m-d");
	$proses->simpan("pemesan","
								'$_POST[id_pemesan]',
								'$_POST[id_member]',
								'$_POST[jm_tiket]',
								'$_POST[t_harga]',
								'$date',
								'' ");
	echo "<script>window.open('views/p_sub_tiket.php?id='+$_POST[id_pemesan])</script>";
	echo "<script>document.location = '../index.php'</script>";

 ?>