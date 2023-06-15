<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Anggota Member Warnet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Manajemen Anggota Member Warnet</h2>
    <form method="post" action="insert.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required><br><br>
        <input type="submit" value="Tambah">
    </form>

    <?php
        // Koneksi ke database
        $koneksi = mysqli_connect("localhost", "root", "", "dbwarnet");

        // Periksa koneksi
        if (mysqli_connect_error()) {
            echo "Koneksi database gagal: " . mysqli_connect_error();
        }

        // Query untuk mendapatkan data anggota member
        $query = "SELECT * FROM anggota_member";
        $result = mysqli_query($koneksi, $query);

        // Tampilkan data anggota member
        if (mysqli_num_rows($result) > 0) {
            echo "<h3>Daftar Anggota Member:</h3>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Aksi</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td><a href='update.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Hapus</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Belum ada anggota member.";
        }

        // Tutup koneksi database
        mysqli_close($koneksi);
    ?>

</body>
</html>
