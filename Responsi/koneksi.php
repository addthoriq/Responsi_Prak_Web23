<?php
// Konfigurasi database
$host = 'localhost';  // Ganti sesuai dengan host database Anda
$db   = 'nama_database';  // Ganti dengan nama database yang digunakan
$user = 'username';  // Ganti dengan username database Anda
$pass = 'password';  // Ganti dengan password database Anda

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Contoh query
$sql = "SELECT * FROM nama_tabel";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop melalui setiap baris hasil query
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . ", Nama: " . $row["nama"] . "<br>";
    }
} else {
    echo "Tidak ada data yang ditemukan.";
}

// Menutup koneksi
$conn->close();
?>
