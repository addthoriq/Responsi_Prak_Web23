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

    // Simpan data pesanan ke database
    $query = "INSERT INTO orders (name, email, address) VALUES ('$name', '$email', '$address')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Pesanan Anda telah diproses. Terima kasih!";
    } else {
        echo "Gagal memproses pesanan.";
    }
}

// Menutup koneksi
mysqli_close($conn);
?>
