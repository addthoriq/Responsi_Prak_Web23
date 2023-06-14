<?php
include('koneksi.php');
if(isset($_POST['login'])){
	$user = mysqli_real_escape_string($koneksi,htmlentities($_POST['InputUser']));
	$pass = mysqli_real_escape_string($koneksi,htmlentities(md5($_POST['InputPassword'])));
 
	$sql = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE username='$user' AND password='$pass'") or die(mysqli_error());	
	if(mysqli_num_rows($sql) == 0){
		echo '<script language="javascript">alert("User tidak ditemukan! silahkan Login kembali" ); document.location="index.php";</script>';
	}else{
		$row = mysqli_fetch_assoc($sql);
		if($row['level'] == 1){
			session_start();
			$_SESSION['admin']=$user;		
			echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="admin/index.php";</script>';
			}		
		else if ($row['level'] == 2){
		session_start();
		$_SESSION['pelanggan']=$user;
			echo '<script language="javascript">alert("Anda berhasil Login Pelanggan!"); document.location="customer/index.php";</script>';

		}
	
	}

}
?>