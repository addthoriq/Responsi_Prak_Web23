<?php
    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "dbwarnet");

    // Periksa koneksi
    if (mysqli_connect_error()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
    }

    // Ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    // Query untuk memasukkan data ke tabel anggota_member
    $query = "INSERT INTO anggota_member (nama, alamat) VALUES ('$nama', '$alamat')";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil
    if ($result) {
        echo "Data anggota member berhasil ditambahkan.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    // Tutup koneksi database
    mysqli_close($koneksi);
?>
