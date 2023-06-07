<?php
session_start();
require 'preorder_form.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'edit') {
    $id_beli = $_GET['id'];
    $sql1 = "SELECT * FROM preorder_form where id = '$id_beli'";
    $q1 = mysqli_query($conn, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $nama = $r1['nama'];
    $email = $r1['email'];
    $phone = $r1['phone'];
    $quantity = $r1['jumlah'];
    $id_item = $r1['item'];
    // $sql2 = "SELECT * FROM merch_item where id_item = '$id_item'";
    // $q2 = mysqli_query($conn, $sql2);
    // $r2 = mysqli_fetch_array($q2);
    // $item_selected = $r2['nama_item'];
}


if (isset($_POST['send'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $hp = mysqli_real_escape_string($conn, $_POST['phone']);
    $id_item = mysqli_real_escape_string($conn, $_POST['choosedItem']);
    $jumlah = mysqli_real_escape_string($conn, $_POST['quantity']);
    $id_user = mysqli_real_escape_string($conn, $_SESSION['id']);

    if ($nama && $email && $hp && $id_item && $jumlah) {
        if ($op == 'edit') {
            $sql1 = "UPDATE preorder_form SET nama = '$nama', email = '$email', phone = '$phone',  item = '$id_item', jumlah = '$jumlah' WHERE id = '$id_beli'";
            $q1 = mysqli_query($conn, $sql1);
            if ($q1) {
                $sukses = "Data berhasil di Update";
            } else {
                $error = "Data gagal diupdate";
            }
        } else{
        $sqli = "INSERT INTO preorder_form(nama, email, phone, item, jumlah, id_user) VALUES('$nama','$email','$hp', '$id_item', '$jumlah', '$id_user')";
        $q1 = mysqli_query($conn, $sqli);
        if ($q1) {
            ?>
            <script>
                alert('Pre-order Success!');
            </script>
            <?php
        } else {
            ?>
            <script>
                alert('Pre-order failed!');
            </script>
            <?php
        }
    }
 } else {
        ?>
        <script>
            alert('Please input all the data!');
        </script>
        <?php
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

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
    <div class="heading hero-preorder">
        <h1>Pre-order now!</h1>
        <div class="glass"></div>
    </div>

    <!-- <div class="heading" style="background:url(images/merch1.jpg) no-repeat">
        <h1>Pre-order now!</h1>
    </div> -->

    <!-- preorder section starts -->
    <section class="preorder">
        <h1 class="heading-title">pre-order form</h1>

        <form action="" method="post" class="preorder_form">

            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" name="nama" value="<?php echo $nama ?>">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="text" name="email" value="<?php echo $email ?>">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" name="phone" value="<?php echo $phone ?>">
                </div>
                <div class="inputBox">
                    <span>item :</span>
                    <select name="choosedItem" id="choosedItem">
                        <option value="">- pilih item -</option>
                        <option value="1" <?php if ($id_item == "1") echo "selected" ?>>Keychain Pavolia Reine</option>
                        <option value="2" <?php if ($id_item == "2") echo "selected" ?>>Keychain Airani Iofifteen (New Outfit)</option>
                        <option value="3" <?php if ($id_item == "3") echo "selected" ?>>Keychain Ayunda Risu (New Outfit)</option>
                        <option value="4" <?php if ($id_item == "4") echo "selected" ?>>Keychain Airani Iofifteen</option>
                        <option value="5" <?php if ($id_item == "5") echo "selected" ?>>Keychain Kobo Kanaeru</option>
                        <option value="6" <?php if ($id_item == "6") echo "selected" ?>>Keychain Moona Hoshinova (New Outfit)</option>
                        <option value="7" <?php if ($id_item == "7") echo "selected" ?>>Keychain Vestia Zeta</option>
                        <option value="8" <?php if ($id_item == "8") echo "selected" ?>>Keychain Kureiji Ollie</option>
                        <option value="9" <?php if ($id_item == "9") echo "selected" ?>>Keychain Kureiji Ollie (New Outfit)</option>
                        <option value="10" <?php if ($id_item == "10") echo "selected" ?>>Keychain Anya Melfissa</option>
                        <option value="11" <?php if ($id_item == "11") echo "selected" ?>>Keychain Kaela Kovalskia</option>
                        <option value="12" <?php if ($id_item == "12") echo "selected" ?>>Keychain Moona Hoshinova (New Outfit)</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>Quantity :</span>
                    <input type="number" name="quantity" value="<?php echo $quantity ?>">
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>
    </section>
    <!-- preorder section end -->


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