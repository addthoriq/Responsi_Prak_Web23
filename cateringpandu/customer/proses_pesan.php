<?php
include "../koneksi.php";
	
	session_start();

	$user=$_SESSION['pelanggan'];
	$ayam = $_POST['porsiayam'];
	$soto = $_POST['porsisoto'];
	$nasgor = $_POST['porsinasgor'];
	$degan = $_POST['porsidegan'];
	$scampur = $_POST['porsicampur'];
	$dawet = $_POST['porsidawet'];
	$martabak = $_POST['porsimarta'];
	$onde = $_POST['porsionde'];
	$piscok = $_POST['porsipiscok'];
	$thn=$_POST['tahun'];
	$bln=$_POST['bulan'];
	$tgl=$_POST['tgl'];
	$almt=$_POST['almtkirim'];

	$tglkrm=$thn.'-'.$bln.'-'.$tgl;

	$total1=$_POST['total1'];
	$total2=$_POST['total2'];
	$total3=$_POST['total3'];
	$total4=$_POST['total4'];
	$total5=$_POST['total5'];
	$total6=$_POST['total6'];
	$total7=$_POST['total7'];
	$total8=$_POST['total8'];
	$total9=$_POST['total9'];

	$subtotal=$total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8+$total9;

	$terserah=mysqli_query($koneksi,"INSERT INTO pesanan VALUES ('','$tglkrm','$user','$almt','$ayam','$soto','$nasgor','$degan','$scampur','$dawet','$martabak','$onde','$piscok','$subtotal')") or die(mysqli_error());	

	if ($terserah) {
		echo '<script language="javascript">alert("anda berhasil memesan makanan" ); document.location="total.php";</script>';
	}else{}


?>