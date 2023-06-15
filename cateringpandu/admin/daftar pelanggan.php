
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
        <li class="active"><a href="daftar pelanggan.php">Daftar pelanggan</a></li>
        <li ><a href="daftar pesanan.php" >Daftar pesanan</a></li> 
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li data-toggle="modal" data-target="#mydaftar"><a href="profil.php" title="Ingin melihat deskripsi ? Silahkan klik !"><span class="glyphicon glyphicon-user"></span>
          <?php session_start();$user=$_SESSION['admin'];echo $user;?>
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
        $id = $_GET['username'];
        $ngecek = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE username='$id'");
        if(mysqli_num_rows($ngecek) == 0){
          echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
        }else{
          $delete = mysqli_query($koneksi, "DELETE FROM pelanggan WHERE username='$id'");
          if($delete){
            echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
          }else{
            echo '<div class="alert alert-info">Data gagal dihapus.</div>';
          }
        }
      }
      ?>
<div class="table-responsive">
  <table class="table table-striped">
        <tr>
          <th>USERNAME</th>
           <th>NAMA LENGKAP</th>
            <th>NIK</th>
            <th>JENIS KELAMIN</th>
            <th>NOMOR HP</th>
           <th>EMAIL</th>
             <th>ALAMAT</th>
             <th>KET</th>
        </tr>

          <?php
    include("../koneksi.php");
    $user=$_SESSION['admin'];
      
      $ngecek = mysqli_query($koneksi, "SELECT * FROM pelanggan");
      $baris=mysqli_num_rows($ngecek);
      if($baris == 0){
        echo '<tr><td colspan="8">Tidak ada pelanggan.</td></tr>';
      }else{

         while ($bag=mysqli_fetch_assoc($ngecek)) {
        echo '
          <tr>
          <td>'.$bag['username'].'</td>
          <td>'.$bag['nama_lengkap'].'</td>
          <td>'.$bag['NIK'].'</td>
          <td>'.$bag['jk'].'</td>
          <td>'.$bag['no_hp'].'</td>
          <td>'.$bag['email'].'</td>
          <td>'.$bag['alamat'].'</td>
          <td>
            <a href="daftar pelanggan.php?aksi=delete&username='.$bag['username'].'" title="Hapus pelanggan" onclick="return confirm(\' Apakah anda yakin ingin menghapus pelanggan ini?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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