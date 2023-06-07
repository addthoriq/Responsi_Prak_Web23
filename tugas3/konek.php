<?php

define('host', 'localhost');
define('user', 'root');
define('pass', '');
define('db', 'pemproweb');

$conn = mysqli_connect(host, user, pass, db);
$username='';
function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["logname"]));
	$password = mysqli_real_escape_string($conn, $data["logpass"]);
	$email = mysqli_real_escape_string($conn, $data["logemail"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user(username,email,password) VALUES('$username','$email', '$password')");

	return mysqli_affected_rows($conn);


}



function gantipass($data){
     global $conn;
     session_start();
     $password =  mysqli_real_escape_string($conn, $data["logpass"]);
     $newpassword = mysqli_real_escape_string($conn, $data["lognewpass"]);
     $newconfpassword = mysqli_real_escape_string($conn, $data["logconfnewpass"]);
     
     $id=$_SESSION["id"];
     //verify
     $result = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");
     $row = mysqli_fetch_assoc($result);
     if (!password_verify($password, $row["password"])) {
       echo "<script>
        alert('password yang lama tidak sesuai !');
      </script>";
      return false;
     }
     if( $newpassword !== $newconfpassword ) {
         echo "<script>
                 alert('konfirmasi password tidak sesuai!');
               </script>";
         return false;
     }
         
         //$id_session = mysqli_query($conn, "SELECT * FROM user WHERE password = '$password'");
         // cek username
         
         if (mysqli_num_rows($result) === 1) {
//                 // cek password
                 $row = mysqli_fetch_assoc($result);
                 if (password_verify($password, $row["password"])) {
                         // set session
                         $newpassword = password_hash($newpassword, PASSWORD_DEFAULT);
                         mysqli_query($conn, "UPDATE user SET password = '$newpassword'WHERE id='$id'");                   
                         //exit;
                         header("Location: homepage.php");
                 }
                
             }
             return mysqli_affected_rows($conn);
             
         }
         

?>