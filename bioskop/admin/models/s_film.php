<?php 
	include '../config/crud.php';
		$foto = $_FILES['gambar']['name'];
		$alamat = $_FILES['gambar']['tmp_name'];

		move_uploaded_file($alamat, '../assets/img/film/'.$foto);
		$proses->simpan("film","
								'',
								'$_POST[judul]',
								'$_POST[genre]',
								'$_POST[rating]',
								'$_POST[durasi]',
								'$_POST[jadwal]',
								'$_POST[sinopsis]',
								'$_POST[score]',
								'$_POST[rilis]',
								'$foto'");
		echo "true";
 ?>