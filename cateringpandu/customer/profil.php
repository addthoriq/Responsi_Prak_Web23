
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
        <li data-toggle="modal" data-target="#mydaftar"><a href="total.php"><span class=" glyphicon glyphicon-shopping-cart"></span>Pesanan</a></li>
        <li data-toggle="modal" data-target="#mydaftar" class="active"><a href="#" title="Ingin melihat deskripsi ? Silahkan klik !"><span class="glyphicon glyphicon-user"></span>
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
    $user=$_SESSION['pelanggan'];
      
      $sql = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE username='$user'");
      if(mysqli_num_rows($sql) == 0){
        header("Location: index.php");
      }else{
        $row = mysqli_fetch_assoc($sql);
      }
      
      ?>

  <table class="table table-striped">

        <tr>
          <th>USERNAME</th>
          <td><?php echo $row['username']; ?></td>
        </tr>
        <tr>
          <th>NAMA LENGKAP</th>
          <td><?php echo $row['nama_lengkap']; ?></td>
        </tr>
        <tr>
          <th>NIK</th>
          <td><?php echo $row['NIK']; ?></td>
        </tr>
         <tr>
          <th>JENIS KELAMIN</th>
          <td><?php echo $row['jk']; ?></td>
        </tr>
        <tr>
          <th>NOMOR HP</th>
          <td><?php echo $row['no_hp']; ?></td>
        </tr>
        <tr>
          <th>EMAIL</th>
          <td><?php echo $row['email']; ?></td>
        </tr>
        <tr>
          <th>ALAMAT</th>
          <td><?php echo $row['alamat']; ?></td>
        </tr>

      </table>
      <a href="edit_profil.php?username=<?php echo $row['username']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data</a>
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