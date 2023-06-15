<?php
    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "dbwarnet");

    // Periksa koneksi
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
    }

    // Ambil ID anggota member dari parameter URL
    $id = $_GET['id'];

    // Query untuk mendapatkan data anggota member dengan ID tertentu
    $query = "SELECT * FROM anggota_member WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    // Periksa apakah query berhasil
    if ($row) {
        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <title>Update Anggota Member</title>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <h2>Update Anggota Member</h2>
            <form method="post" action="save_update.php">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required><br><br>
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required><br><br>
                <input type="submit" value="Simpan">
            </form>
        </body>
        </html>

        <?php
    } else {
        echo "Anggota member tidak ditemukan.";
    }

    // Tutup koneksi database
    mysqli_close($koneksi);
?>
