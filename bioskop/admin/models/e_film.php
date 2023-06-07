<?php 
	include '../config/crud.php';
	$foto = $_FILES['gambar']['name'];
	$alamat = $_FILES['gambar']['tmp_name'];

	if (empty($foto)) {
		$proses->edit("film","	judul = '$_POST[judul]',
							genre = '$_POST[genre]',
							rating = '$_POST[rating]',
							durasi = '$_POST[durasi]',
							id_jadwal = '$_POST[jadwal]',
							sinopsis = '$_POST[sinopsis]',
							score = '$_POST[score]',
							rilis = '$_POST[rilis]'","id_film = '$_POST[id]' ");
		echo "true";
	}else{
		move_uploaded_file($alamat, '../assets/img/film/'.$foto);
		$proses->edit("film","	judul = '$_POST[judul]',
								genre = '$_POST[genre]',
								rating = '$_POST[rating]',
								durasi = '$_POST[durasi]',
								id_jadwal = '$_POST[jadwal]',
								sinopsis = '$_POST[sinopsis]',
								score = '$_POST[score]',
								rilis = '$_POST[rilis]',
								gambar = '$foto'","id_film = '$_POST[id]' ");
		echo "true";
	}
 ?>