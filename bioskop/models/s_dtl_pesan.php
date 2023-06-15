<?php 
	include '../config/crud.php';
	$sql1 = $proses->tampil("kursi","dtl_pemesan,tiket","WHERE tiket.id_tiket = '$_POST[tiket]' AND dtl_pemesan.kursi = '$_POST[kursi]' AND tiket.id_tiket = dtl_pemesan.id_tiket ");
	$row1 = $sql1->rowcount();
	if ($row1 == 1) {
		echo "<script>alert('Kursi Sudah Di Pesan')</script>";
		echo "<script>document.location = '../index.php'</script>";
	}else{
		$proses->simpan("dtl_pemesan","
										'',
										'$_POST[kursi]',
										'$_POST[tiket]',
										'$_POST[pemesan]' ");
		echo "<script>alert('Berhasi Menambahkan')</script>";
		echo "<script>document.location = '../index.php'</script>";
	}
 ?>