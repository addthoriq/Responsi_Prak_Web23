<?php
require("connection.php");

// session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION["id"])) {
    // Jika belum login, redirect ke halaman login atau tampilkan pesan bahwa pengguna harus login
    header("Location: login.php"); // Ganti dengan halaman login yang sesuai
    exit;
}

// Dapatkan ID pengguna dari sesi
$user_id = isset($_SESSION["id"]) ? $_SESSION["id"] : null;

if ($user_id) {
    // Mengambil semua order dari database yang terkait dengan pengguna yang sedang login
    $sql = "SELECT orders.id, user.username, menu.nama_menu, orders.quantity, orders.order_date, (menu.harga * orders.quantity) AS total FROM orders INNER JOIN user ON orders.customer_name = user.id INNER JOIN menu ON orders.product_name = menu.id WHERE customer_name = $user_id"; // Ganti dengan tabel dan kolom yang sesuai
    $result = $connection->query($sql);

    // Halaman yang menampilkan data pesanan
    if ($result->num_rows > 0) {
        echo '<table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Customer Name</th>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Order Date</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>';
        $counter = 1;
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                <td>' . $counter++ . '</td>
                <td>' . $row['username'] . '</td>
                <td>' . $row['nama_menu'] . '</td>
                <td>' . $row['quantity'] . '</td>
                <td>' . $row['total'] . '</td>
                <td>' . $row['order_date'] . '</td>
                <td>
                  <div class="action-btns">
                    <a href="edit-order.php?id=' . $row['id'] . '" class="btn btn-primary">Edit</a>
                  </div>
                  <div class="action-btns">
                    <button class="btn btn-danger" onclick="showConfirmation(' . $row['id'] . ')">Delete</button>
                  </div>
                  <div class="action-btns">
                    <a href="nota.php?id=' . $row['id'] . '" class="btn btn-success">Print Receipt</a>
                  </div>
                </td>
              </tr>';
        }
        echo '</tbody>
            </table>';
    } else {
        echo '<p>No orders found.</p>';
    }
} else {
    echo '<p>User ID is not set.</p>';
}

// Menutup koneksi
$connection->close();
?>
<script>
    function showConfirmation(orderId) {
        if (confirm("Are you sure you want to delete this order?")) {
            window.location.href = "delete-order.php?id=" + orderId;
        }
    }
</script>
