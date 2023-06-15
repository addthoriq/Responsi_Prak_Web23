<?php 
	include '../config/crud.php';
		$pass = md5($_POST['pass']);
		$foto = $_FILES['gambar']['name'];
		$alamat = $_FILES['gambar']['tmp_name'];

		move_uploaded_file($alamat, '../assets/img/member/'.$foto);
		$proses->simpan("member","
								'',
								'$_POST[nama]',
								'$_POST[email]',
								'$pass',
								'$_POST[jk]',
								'$_POST[tgl_lahir]',
								'$foto'");
		echo "true";
 ?>