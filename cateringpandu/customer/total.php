
<!DOCTYPE html>
<html>
<head>
  <title>Catering Pandu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>  

</head>
<body>

 <!--==============================header=================================-->
<header id="header">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <img src="../img/beranda/logo.png" width="100%" >
    </div>
  </div>
</div>
</header>
<nav class="navbar navbar-default">
    <div class="container-fluid">

      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="about.php">Tentang Kami</a></li> 
        <li><a href="contact.php">Hubungi Kami</a></li> 
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li data-toggle="modal" data-target="#mydaftar" class="active"><a href="total.php"><span class="  glyphicon glyphicon-shopping-cart"></span>Pesanan</a></li>
        <li data-toggle="modal" data-target="#mydaftar"><a href="profil.php" title="Ingin melihat deskripsi ? Silahkan klik !"><span class="glyphicon glyphicon-user"></span>
          <?php session_start();$user=$_SESSION['pelanggan'];echo $user;?>
        </a></li>
        <li data-toggle="modal" data-target="#mydaftar"><a href="../Logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </nav>
  
 <!--==============================header=================================-->
 <!--==============================content=================================-->
<content id="content">
  <div class="container">
  
        <?php
            include("../koneksi.php");
      if(isset($_GET['aksi']) == 'delete'){
        $id = $_GET['id_beli'];
        $ngecek = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE id_beli='$id'");
        if(mysqli_num_rows($ngecek) == 0){
          echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
        }else{
          $delete = mysqli_query($koneksi, "DELETE FROM pesanan WHERE id_beli='$id'");
          if($delete){
            echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
          }else{
            echo '<div class="alert alert-info">Data gagal dihapus.</div>';
          }
        }
      }
      ?>
      
<div class="table-responsive">
  <table class="table table-striped table-hover">
        <tr>
          <th>ID PESAN</th>
          <th>TANGGAL PENGIRIMAN</th>
          <th>USERNAME</th>
          <th>ALAMAT TUJUAN</th>
          <th>SATE AYAM</th>
          <th>SOTO AYAM</th>
          <th>NASI GORENG</th>
          <th>ES KELAPA MUDA</th>
          <th>ES CAMPUR</th>
          <th>ES DAWET</th>
          <th>MATABAK MINI</th>
          <th>ONDE ONDE</th>   
          <th>PISANG COKLAT</th> 
          <th>SUBTOTAL</th> 
          <th>KET</th> 
        </tr>
          <?php
    include("../koneksi.php");
    $user=$_SESSION['pelanggan'];
      
      $ngecek = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE username='$user' ORDER BY id_beli DESC");
      $baris=mysqli_num_rows($ngecek);
      if($baris == 0){
        echo '<tr><td colspan="8">Tidak ada belanjaan.</td></tr>';
      }else{

         while ($bag=mysqli_fetch_assoc($ngecek)) {
        echo '
          <tr>
          <td>'.$bag['id_beli'].'</td>
          <td>'.$bag['tgl_psn'].'</td>
          <td>'.$bag['username'].'</td>
          <td>'.$bag['almt_tujuan'].'</td>
          <td>'.$bag['sate_ayam'].' <br>Porsi</td>
          <td>'.$bag['soto_ayam'].' <br>Porsi</td>
          <td>'.$bag['nasgor'].' <br>Porsi</td>
          <td>'.$bag['degan'].' <br>Porsi</td>
          <td>'.$bag['scampur'].' <br>Porsi</td>
          <td>'.$bag['dawet'].' <br>Porsi</td>
          <td>'.$bag['martabak'].' <br>Porsi</td>
          <td>'.$bag['onde'].' <br>Porsi</td>
          <td>'.$bag['piscok'].' <br>Porsi</td>
          <td>Rp.'.$bag['subtotal'].'</td>
          <td>
            <a href="edit.php?id_beli='.$bag['id_beli'].'" title="Edit pesanan anda"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
            <a href="total.php?aksi=delete&id_beli='.$bag['id_beli'].'" title="Hapus pesanan anda" onclick="return confirm(\' Apakah anda yakin ingin membatalkan pesanan anda?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
          </td>
          <td>';
                    }
      }  
      ?>
  </table>
</div>
</div>
</content>
<!--==============================content=================================-->
<!--==============================footer=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p align="center">Copyright &copy; Catering Pandu 2023</p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
<!--==============================footer=================================-->