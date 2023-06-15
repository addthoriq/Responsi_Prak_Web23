<?php 
	include '../config/crud.php';
	$proses->hapus("dtl_pemesan","id_dtl_pemesan = '$_GET[id]'");
	header("location:../index.php");
 ?>