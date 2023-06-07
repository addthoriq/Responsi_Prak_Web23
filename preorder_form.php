<?php

define('host', 'localhost');
define('user', 'root');
define('pass', '');
define('db', 'preorder_db');

$conn = mysqli_connect(host, user, pass, db);

$nama = "";
$email = "";
$phone = "";
$quantity = "";
$id_item = "";

function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["logname"]));
	$password = mysqli_real_escape_string($conn, $data["logpass"]);
	$password2 = mysqli_real_escape_string($conn, $data["logpass2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}


	// cek konfirmasi password
	if( $password !== $password2 ) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user(username, password) VALUES('$username', '$password')");

	return mysqli_affected_rows($conn);

}


?>