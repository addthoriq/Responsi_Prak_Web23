<?php
session_start();
//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
if(!isset($_SESSION['pelanggan'])){
	//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../index.php";</script>';
}
?>