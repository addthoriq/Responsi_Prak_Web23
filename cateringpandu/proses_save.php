<?php
include "koneksi.php";

	$level=2;
	$user = $_POST['InputUser'];
	$password = md5($_POST['InputPassword']);
	$nama = $_POST['InputNama'];
	$nik = $_POST['InputNIK'];
	$jk = $_POST['InputJk'];
	$no_hp = $_POST['InputNomorhp'];
	$email = $_POST['InputEmail'];
	$alamat = $_POST['InputAlamat'];
	
$cek = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE username='$user'");
if(mysqli_num_rows($cek) == 0){

	$query=mysqli_query($koneksi,"INSERT INTO pelanggan VALUES ('$user','$password','$nama','$nik','$jk','$no_hp','$email','$alamat','$level')") or die(mysqli_error());	

	if ($query) {
		echo '<script language="javascript">alert("Username Anda berhasil terdaftar" ); document.location="index.php";</script>';
	}else{}
}else{
	echo '<script language="javascript">alert("Username telah ada! coba lagi.." ); document.location="index.php";</script>';
}
?>