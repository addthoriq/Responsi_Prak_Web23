<?php
session_start();
require 'preorder_form.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
$id = $_SESSION["id"];
$result = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
$row = mysqli_fetch_assoc($result);

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if($op == 'delete'){
    $id_beli = $_GET['id'];
    $sql1 = "DELETE FROM preorder_form where id = '$id_beli'";
    $q1 = mysqli_query($conn, $sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error = "Gagal melakukan delete data";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>

    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- css style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header section start -->
    <section class="header">
        <nav class="navbar">
            <a href="home.php" class="logo title">
                <img src="images/logo.png" alt="" width="40" height="40">
            </a>
            <div class="nav-item">
                <a href="home.php">home</a>
                <a href="about.php">about</a>
                <a href="item.php">item</a>
                <a href="preorder.php">preorder</a>
            </div>
            <div class="actions-avatar">
                <div id="menu-btn" class="fas fa-bars hamburger"></div>
                <a href="myAccount.php" class="avatar"><img src="images/person2.jpg" alt="" width="30" height="30"></a>
            </div>
        </nav>
    </section>
    <!-- header section end -->

    <div class="myAccount">
        <div class="container d-flex justify-content-center align-items-center">

            <div class="card border border-dark">

                <div class="upper">

                    <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid">

                </div>

                <div class="user text-center">

                    <div class="profile">

                        <img src="https://i.imgur.com/JgYD2nQ.jpg" class="rounded-circle" width="80">

                    </div>

                </div>


                <div class="mt-5 text-center">

                    <h4 class="mb-0 mt-5">
                        <?php echo $row["username"] ?>
                    </h4>
                    <span class="text-muted d-block mb-2">Los Angles</span>
                    <a href="logout.php">
                    <button class="btn">Log Out</button>
                    </a>

                </div>

            </div>

        </div>


        <!-- table section start -->
        <!-- untuk menampilkan data -->
        <div class="card" style="margin: auto; width: 80%;">
            <div class="card-header text-white bg-secondary" style="font-size: 15px;">
                Your Pre-order item list
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table" style="font-size: 15px; text-align: center;">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Item</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    <tbody>
                        <?php
                        $sql2 = "SELECT preorder_form.id, merch_item.nama_item, preorder_form.jumlah, merch_item.harga, (merch_item.harga * preorder_form.jumlah) AS total FROM preorder_form JOIN merch_item ON preorder_form.item = merch_item.id_item WHERE preorder_form.id_user = '$id' ORDER BY id ASC";
                        $q2 = mysqli_query($conn, $sql2);
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id_transaksi = $r2['id'];
                            $nama_item = $r2['nama_item'];
                            $quantity = $r2['jumlah'];
                            $harga = $r2['harga'];
                            $jumlah = $r2['total'];
                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $id_transaksi ?>
                                </th>
                                <td scope="row">
                                    <?php echo $nama_item ?>
                                </td>
                                <td scope="row">
                                    <?php echo $quantity ?>
                                </td>
                                <td scope="row">
                                    <?php echo $harga ?>
                                </td>
                                <td scope="row">
                                    <?php echo $jumlah ?>
                                </td>
                                <td scope="row">
                                    <a href="preorder.php?op=edit&id=<?php echo $id_transaksi ?>">
                                        <button type="button" class="btn btn-warning"
                                            style="padding: 6px 12px; font-size: 10px; width: 10vh; margin-top: 0;">Edit</button>
                                    </a>
                                    <a href="myAccount.php?op=delete&id=<?php echo $id_transaksi ?>"
                                        onclick="return confirm('Apakah anda yakin untuk menghapus item ini?')">
                                        <button type="button" class="btn btn-danger"
                                            style="padding: 6px 12px; font-size: 10px; width: 10vh; margin-top: 0;">Delete</button>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                    </thead>
                </table>
                </div>
            </div>
        </div>
    <!-- table section End -->
    <div class="separator" style="height: 5vh;"></div>
    </div>
    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
                <a href="item.php"> <i class="fas fa-angle-right"></i>item</a>
                <a href="preorder.php"> <i class="fas fa-angle-right"></i>preorder</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask question</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +62-888-888</a>
                <a href="#"> <i class="fas fa-phone"></i> +62-888-888</a>
                <a href="#"> <i class="fas fa-envelope"></i> bobi@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i> Kampus 1 AKPRIND</a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-github"></i>github</a>
            </div>
        </div>

        <div class="credit">created by <span>Fx. Guntur Putra Susanto</span></div>

    </section>
    <!-- footer section end -->

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- js link -->
    <script src="js/script.js"></script>
</body>

</html>