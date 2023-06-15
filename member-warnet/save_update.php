<?php
    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "dbwarnet");

    // Periksa koneksi
    if (mysqli_connect_error()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
    }

    // Ambil data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    // Query untuk mengupdate data anggota member
    $query = "UPDATE anggota_member SET nama = '$nama', alamat = '$alamat' WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil
    if ($result) {
        echo "Data anggota member berhasil diupdate.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    // Tutup koneksi database
    mysqli_close($koneksi);
?>
