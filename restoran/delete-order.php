<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data Pesanan</title>
</head>
<body>
    <?php
    require 'connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET" && $_GET['id']) {
        $id = $_GET['id'];
        $sql = "DELETE FROM orders WHERE id = '$id'";
        $hasil = $connection->query($sql);
        if ($hasil) {
            echo "Data berhasil dihapus";
        } else {
            echo "Error: " . $sql . "<br>" . $conection->error;
        }
    }
    ?>
</body>