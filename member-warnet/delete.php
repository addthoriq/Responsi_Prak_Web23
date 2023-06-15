<?php
    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "dbwarnet");

    // Periksa koneksi
    if (mysqli_connect_error()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
    }

    // Ambil ID anggota member dari parameter URL
    $id = $_GET['id'];

    // Query untuk menghapus data anggota member dengan ID tertentu
    $query = "DELETE FROM anggota_member WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil
    if ($result) {
        echo "Data anggota member berhasil dihapus.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    // Tutup koneksi database
    mysqli_close($koneksi);
?>
