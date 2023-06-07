<?php
require("connection.php");

session_start();


// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION["id"])) {
    // Jika belum login, redirect ke halaman login atau tampilkan pesan bahwa pengguna harus login
    header("Location: login.php"); // Ganti dengan halaman login yang sesuai
    exit;
}

// Dapatkan ID pengguna dari sesi
$user_id = isset($_SESSION["id"]) ? $_SESSION["id"] : null;

$customer_name = "";

if ($user_id) {
    // Mengambil nama pengguna dari database berdasarkan ID pengguna
    $query = "SELECT username FROM user WHERE id = $user_id"; // Ganti dengan tabel dan kolom yang sesuai
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $customer_name = $row['username'];
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Order Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Order Form</h1>

        <?php
        // Tampilkan pesan jika ada error
        if (isset($_GET['error'])) {
            echo '<p class="text-danger">Error: ' . $_GET['error'] . '</p>';
        }
        ?>

        <form action="add-order.php" method="post">
            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <select id="product_name" name="product_name" class="form-control" required>
                    <option value="">Select a product</option>
                    <?php
                    $query = "SELECT id, nama_menu FROM menu";
                    $result = $connection->query($query);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $product_id = $row['id'];
                            $product_name = $row['nama_menu'];
                            echo "<option value='$product_id'>$product_name</option>";
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php
    // Memeriksa apakah ada data yang dikirimkan melalui metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require("connection.php");

        // Mengambil data dari form
        $product_name = $_POST["product_name"];
        $quantity = $_POST["quantity"];

        // Mengambil data harga berdasarkan nama produk
        $query = "SELECT harga FROM menu WHERE id = '$product_name'";
        $result = $connection->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $harga = $row['harga'];

            // Menghitung total
            $total = $harga * $quantity;

            // Menyimpan data order ke database
            $sql = "INSERT INTO orders (customer_name, product_name, quantity, total, order_date)
            VALUES ('$user_id', '$product_name', '$quantity', '$total', NOW())";
            if ($connection->query($sql) === TRUE) {
                echo "Order has been placed successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }
        } else {
            echo "Error: Product not found.";
        }

        // Menutup koneksi
        $connection->close();
    }
    ?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
