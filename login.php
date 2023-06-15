<?php 
session_start();
require 'preorder_form.php';

if( isset($_SESSION["login"]) ) {
	header("Location: home.php");
	exit;
}

if( isset($_POST["login"]) ) {

	$username = $_POST["logname"];
	$password = $_POST["logpass"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			// set session
			$_SESSION["login"] = true;
            $_SESSION["id"] = $row["id_user"];
        
			header("Location: home.php");
			exit;
		}
	}

	$error = true;

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css"> -->
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3">
                            <span>Log In </span>
                            <span>Sign Up</span>
                        </h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <form action="" method="POST">
                                                <div class="form-group">
                                                    <input type="text" name="logname" class="form-style"
                                                        placeholder="Your Username" id="logname" autocomplete="off">
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="logpass" class="form-style"
                                                        placeholder="Your Password" id="logpass" autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <input type="submit" name="login" value="login" class="btn mt-4">
                                            </form>
                                            <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your
                                                        password?</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Sign Up</h4>
                                            <form action="" method="POST">
                                                <div class="form-group">
                                                    <input type="text" name="logname" class="form-style"
                                                        placeholder="Your username" id="logname" autocomplete="off">
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="logpass" class="form-style"
                                                        placeholder="Your Password" id="logpass" autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="logpass2" class="form-style"
                                                        placeholder="Re-enter Your Password" id="logpass2"
                                                        autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <input type="submit" name="register" value="Submit" class="btn mt-4">
                                                <?php
                                                // require 'preorder_form.php';

                                                if (isset($_POST["register"])) {

                                                    if (registrasi($_POST) > 0) {
                                                        echo "<script> alert('user baru berhasil ditambahkan!'); </script>";
                                                    } else {
                                                        echo mysqli_error($conn);
                                                    }

                                                }

                                                ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>