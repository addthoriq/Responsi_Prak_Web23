<?php
	include '../models/login.php';
	if (isset($_SESSION['id'])) {
		echo "<script>document.location = '../index.php'</script>";
	}else{

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/log.css">
</head>
<body>
	<div class="box">
			<h2>ADMINISTRATOR</h2>
		<form action="../models/login.php" method="POST">
			<input type="text" name="user" placeholder='Username' required maxlength='30'>
			<input type="password" name="pass" placeholder='Password' required maxlength='30'>
			<input type="submit" name="login" value="Masuk !!">
			
		</form>
		<br>
<center><h2>Repost by <a href="https://stokcoding.com/" title="StokCoding.com" target="_blank">StokCoding.com</a></h2></center>
	</div>
</body>
</html>