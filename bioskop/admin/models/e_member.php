<?php 
	include '../config/crud.php';
	$foto = $_FILES['gambar']['name'];
	$alamat = $_FILES['gambar']['tmp_name'];

	if (empty($foto)) {
		$proses->edit("member","	nama = '$_POST[nama]',
									email = '$_POST[email]',
									password = '$_POST[pass]',
									jk = '$_POST[jk]',
									tgl_lahir = '$_POST[tgl_lahir]'","id_member = '$_POST[id]'");
		echo "true";
	}else{
		move_uploaded_file($alamat, '../assets/img/member/'.$foto);
		$proses->edit("member","	nama = '$_POST[nama]',
									email = '$_POST[email]',
									password = '$_POST[pass]',
									jk = '$_POST[jk]',
									tgl_lahir = '$_POST[tgl_lahir]',
									foto = '$foto'","id_member = '$_POST[id]'");
		echo "true";
	}
 ?>