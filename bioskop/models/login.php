<?php
	mysql_connect("localhost","root","");
	mysql_select_db("db_bioskop");

	session_start();
	if (isset($_POST['login'])) {
		$pass = md5($_POST['pass']);
		$sql5 = mysql_query("SELECT * FROM member WHERE email = '$_POST[email]' AND password = '$pass' ");
		$row5 = mysql_num_rows($sql5);
		$dt5 = mysql_fetch_array($sql5);
		if ($row5 == 0) {
			echo "<script>alert('Gagal Login !!')</script>";
			echo "<script>document.location = '../index.php'</script>";
		}else{
			$_SESSION['id'] = $dt5['id_member'];
			echo "<script>alert('Anda Berhasil login')</script>";
			echo "<script>document.location = '../index.php'</script>";
		}
	}
 ?>