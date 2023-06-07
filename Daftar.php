<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Klinik Gigi</title>
</head>
<body>

<?php
// Inisialisasi variabel dengan nilai default
$nama = $email = $telepon = $tanggal = $pesan = "";
$error_nama = $error_email = $error_telepon = $error_tanggal = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi nama
    if (empty($_POST["nama"])) {
        $error_nama = "Nama harus diisi";
    } else {
        $nama = test_input($_POST["nama"]);
        // Cek apakah nama hanya mengandung huruf dan spasi
        if (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
            $error_nama = "Hanya huruf dan spasi yang diperbolehkan";
        }
    }

    // Validasi email
    if (empty($_POST["email"])) {
        $error_email = "Email harus diisi";
    } else {
        $email = test_input($_POST["email"]);
        // Cek apakah format email valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_email = "Format email salah";
        }
    }

    // Validasi nomor telepon
    if (empty($_POST["telepon"])) {
        $error_telepon = "Nomor telepon harus diisi";
    } else {
        $telepon = test_input($_POST["telepon"]);
        // Cek apakah format nomor telepon valid
        if (!preg_match("/^[0-9]{10,12}$/", $telepon)) {
            $error_telepon = "Format nomor telepon salah";
        }
    }

    // Validasi tanggal
    if (empty($_POST["tanggal"])) {
        $error_tanggal = "Tanggal harus diisi";
    } else {
        $tanggal = test_input($_POST["tanggal"]);
        // Cek apakah format tanggal valid
        if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $tanggal)) {
            $error_tanggal = "Format tanggal salah";
        }
    }

    // Validasi pesan
    if (empty($_POST["pesan"])) {
        $pesan = "";
    } else {
        $pesan = test_input($_POST["pesan"]);
    }
}

// Fungsi untuk membersihkan dan memvalidasi input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Pendaftaran Klinik Gigi</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label>Nama:</label>
    <input type="text" name="nama" value="<?php echo $nama;?>">
    <span class="error">* <?php echo $error_nama;?></span>
    <br><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $error_email;?></span>
    <br><br>

    <label>Nomor Telepon:</label>
    <input type="text" name="telepon" value="<?php echo $telepon;?>">
    <span class="error">* <?php echo $error_telepon;?></span>
    <br><br>

    <label>Tanggal:</label>
    <input type="date" name="tanggal" value="<?php echo $tanggal;?>">
    <span class="error">* <?php echo $error_tanggal;?></span>
    <br><br>

    <label>Pesan:</label>
    <textarea name="pesan" rows="5" cols="40"><?php echo $pesan;?></textarea>
    <br><br>

    <input type="submit" name="submit" value="Daftar">
</form>

<?php
// Menampilkan data yang diinputkan setelah submit
if ($_SERVER["REQUEST_METHOD"] == "POST" && $error_nama == "" && $error_email == "" && $error_telepon == "" && $error_tanggal == "") {
    echo "<h2>Data yang Anda inputkan:</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Nomor Telepon: " . $telepon . "<br>";
    echo "Tanggal: " . $tanggal . "<br>";
    echo "Pesan: " . $pesan . "<br>";
}
?>

</body>
</html>