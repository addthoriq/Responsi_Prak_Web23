<?php
session_start();

// Cek apakah pengguna sudah login, jika ya, redirect ke halaman index
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

// Cek apakah form login telah disubmit
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi login di sini, misalnya dengan query ke database

    // Cek login berhasil, simpan data pengguna ke session
    if ($username === 'riogonzales' && $password === 'terserah') {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    } else {
        $error_message = "Username or password is incorrect.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>E-commerce - Login</title>
    <style>
        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        
        /* Container styling */
        .container {
            width: 400px;
            margin: 100px auto;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 20px;
            box-shadow:  -10px -10px 20px #e0e0e0,
                         10px 10px 20px #ffffff;
        }
        
        /* Heading styling */
        h1 {
            text-align: center;
            color: #333;
        }
        
        /* Form styling */
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            background-color: #f5f5f5;
            box-shadow: inset -5px -5px 10px #e0e0e0,
                        inset 5px 5px 10px #ffffff;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        
        /* Form toggle styling */
        .form-toggle {
            text-align: center;
            margin-top: 10px;
        }
        
        .form-toggle a {
            color: #007bff;
            text-decoration: none;
        }
        
        .form-toggle a:hover {
            text-decoration: underline;
        }
        
        /* Media Query for Responsive Design */
        @media (max-width: 480px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php
        // Tampilkan pemberitahuan error jika ada
        if (isset($error_message)) {
            echo '<div class="form-group error">' . $error_message . '</div>';
        }
        ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Login">
            </div>
            <div class="form-toggle">
                Don't have an account? <a href="register.php">Register</a>
            </div>
        </form>
    </div>
</body>
</html>

