<?php
// Koneksi ke database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ecom';

$conn = mysqli_connect($host, $user, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Proses form jika ada data yang dikirimkan
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Update data profil dalam database
    $query = "UPDATE users SET name='$name', email='$email', address='$address' WHERE id = 1"; // Ganti dengan id pengguna yang sesuai
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Mengalihkan pengguna ke halaman profil
        header("Location: profile.php");
        exit();
    } else {
        echo "Gagal mengupdate profil.";
    }
}

// Menutup koneksi
mysqli_close($conn);
?>
