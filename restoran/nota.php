<!-- nota.php -->
<?php
include 'connection.php';

// Mengambil data terakhir dari tabel orders
$query = "SELECT * FROM orders ORDER BY id DESC LIMIT 1";
$result = $connection->query($query);
$data = $result->fetch_assoc();

if($data) {
    $customerName = $data['customer_name'];
    $productName = $data['product_name'];
    $quantity = $data['quantity'];
    $orderDate = $data['order_date'];
} else {
    $customerName = '';
    $productName = '';
    $quantity = '';
    $orderDate = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Struk Nota</title>
    <style>
        .nota {
            border: 1px solid black;
            padding: 10px;
            width: 300px;
        }
        .header {
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .data {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="nota">
        <div class="header">
            <h2>Struk Pembelian</h2>
        </div>
        <div class="data">
            <span>Nama Pelanggan:</span>
            <span><?php echo $customerName; ?></span>
        </div>
        <div class="data">
            <span>Nama Produk:</span>
            <span><?php echo $productName; ?></span>
        </div>
        <div class="data">
            <span>Jumlah:</span>
            <span><?php echo $quantity; ?></span>
        </div>
        <div class="data">
            <span>Waktu Pesanan:</span>
            <span><?php echo $orderDate; ?></span>
        </div>
    </div>
</body>
</html>
