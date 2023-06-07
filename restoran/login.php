<?php
session_start();

// Memeriksa apakah pengguna telah login sebelumnya
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    // Jika sudah login, redirect ke halaman dashboard atau halaman lain yang sesuai
    header("Location: index.php");
    exit;
}

require("connection.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah tindakan yang dilakukan adalah login atau sign up
    if (isset($_POST["login"])) {
        // Login process
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Melakukan validasi login
        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = $connection->query($query);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $stored_password = $row["password"];

            // Verifikasi password
            if (password_verify($password, $stored_password)) {
                // Jika login berhasil, simpan informasi login ke session
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
                $_SESSION["id"] = $row['id'];

                // Redirect ke halaman dashboard atau halaman lain yang sesuai
                header("Location: index.php");
                exit;
            } else {
                // Jika password salah, set pesan error
                $error = "Invalid username or password";
            }
        } else {
            // Jika username tidak ditemukan, set pesan error
            $error = "Invalid username or password";
        }
    } elseif (isset($_POST["signup"])) {
        // Sign up process
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        // Memeriksa apakah password dan konfirmasi password sesuai
        if ($password === $confirm_password) {
            // Melakukan validasi username
            $query = "SELECT * FROM user WHERE username = '$username'";
            $result = $connection->query($query);

            if ($result->num_rows == 0) {
                // Mengenkripsi password sebelum disimpan ke database
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Menyimpan data user baru ke database
                $sql = "INSERT INTO user (username, password) VALUES ('$username', '$hashed_password')";
                if ($connection->query($sql) === true) {
                    // Jika sign up berhasil, simpan informasi login ke session
                    $_SESSION["loggedin"] = true;
                    $_SESSION["username"] = $username;

                    // Redirect ke halaman dashboard atau halaman lain yang sesuai
                    header("Location: index.php");
                    exit;
                } else {
                    $error = "Sign up failed. Please try again.";
                }
            } else {
                $error = "Username is already taken.";
            }
        } else {
            $error = "Passwords do not match.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animated Form | Nothing4us</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/login-style.css">
</head>
<body>
<section class="forms-section">
    <h1 class="section-title">Animated Forms</h1>
    <div class="forms">
        <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
                <?php
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    echo 'Logout';
                } else {
                    echo 'Login';
                }
                ?>
                <span class="underline"></span>
            </button>
            <form class="form form-login" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <fieldset>
                    <legend>Please, enter your email and password for login.</legend>
                    <div class="input-block">
                        <label for="login-username">Username</label>
                        <input id="login-username" type="text" name="username" required>
                    </div>
                    <div class="input-block">
                        <label for="login-password">Password</label>
                        <input id="login-password" type="password" name="password" required>
                    </div>
                </fieldset>
                <button type="submit" class="btn-login" name="login">
                    <?php
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                        echo 'Logout';
                    } else {
                        echo 'Login';
                    }
                    ?>
                </button>
            </form>
        </div>
        <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
                Sign Up
                <span class="underline"></span>
            </button>
            <form class="form form-signup" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <fieldset>
                    <legend>Please, enter your username, password, and confirm password for sign up.</legend>
                    <div class="input-block">
                        <label for="signup-username">Username</label>
                        <input id="signup-username" type="text" name="username" required>
                    </div>
                    <div class="input-block">
                        <label for="signup-password">Password</label>
                        <input id="signup-password" type="password" name="password" required>
                    </div>
                    <div class="input-block">
                        <label for="confirm_password">Confirm Password</label>
                        <input id="confirm_password" type="password" name="confirm_password" required>
                    </div>
                </fieldset>
                <button type="submit" class="btn-signup" name="signup">Continue</button>
            </form>
        </div>
    </div>
    <?php
    if (!empty($error)) {
        echo '<p class="error-message">' . $error . '</p>';
    }
    ?>
</section>
<script src="assets/js/login.js"></script>
</body>
</html>
