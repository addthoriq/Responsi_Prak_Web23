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

if ($user_id) {
    // Memeriksa apakah parameter ID order diberikan
    if (isset($_GET['id'])) {
        $order_id = $_GET['id'];

        // Mengambil data order berdasarkan ID
        $sql = "SELECT * FROM orders WHERE id = $order_id AND customer_name = $user_id";
        $result = $connection->query($sql);

        if ($result->num_rows == 1) {
            $order = $result->fetch_assoc();

            // Mendapatkan daftar menu
            $menu_query = "SELECT id, nama_menu FROM menu";
            $menu_result = $connection->query($menu_query);
        } else {
            echo '<p>No order found.</p>';
            exit;
        }
    } else {
        echo '<p>Invalid order ID.</p>';
        exit;
    }

    // Menghandle proses update pesanan
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $new_product_name = $_POST['product_name'];
        $new_quantity = $_POST['quantity'];

        // Validasi data
        if (empty($new_product_name) || empty($new_quantity)) {
            echo '<p class="text-danger">Please fill in all fields.</p>';
        } else {
            // Update pesanan dalam database
            $update_query = "UPDATE orders SET product_name = '$new_product_name', quantity = $new_quantity WHERE id = $order_id";
            if ($connection->query($update_query) === TRUE) {
                header("Location: order.php");
                exit;
            } else {
                echo '<p class="text-danger">Error updating order: ' . $connection->error . '</p>';
            }
        }
    }
} else {
    echo '<p>User ID is not set.</p>';
    exit;
}

// Menutup koneksi
$connection->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Order</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Edit Order</h1>

        <form action="edit-order.php?id=<?php echo $order_id; ?>" method="post">
            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <select id="product_name" name="product_name" class="form-control" required>
                    <option value="">Select a product</option>
                    <?php
                    if ($menu_result->num_rows > 0) {
                        while ($row = $menu_result->fetch_assoc()) {
                            $product_id = $row['id'];
                            $product_name = $row['nama_menu'];
                            $selected = ($product_id == $order['product_name']) ? 'selected' : '';
                            echo "<option value='$product_id' $selected>$product_name</option>";
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" class="form-control" value="<?php echo $order['quantity']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
