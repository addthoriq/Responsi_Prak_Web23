
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
        <li data-toggle="modal" data-target="#mydaftar"><a href="total.php"><span class=" glyphicon glyphicon-shopping-cart"></span>Pesanan</a></li>
        <li data-toggle="modal" data-target="#mydaftar" class="active"><a href="#" title="Ingin melihat deskripsi ? Silahkan klik !"><span class="glyphicon glyphicon-user"></span>
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
    $user=$_SESSION['admin'];
      
      $sql = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE username='$user'");
      if(mysqli_num_rows($sql) == 0){
        header("Location: index.php");
      }else{
        $row = mysqli_fetch_assoc($sql);
      }
      
      if(isset($_POST['save'])){
        $nama = $_POST['nama'];
        $nik = $_POST['NIK'];
        $jk = $_POST['jk'];
        $no_hp = $_POST['nohp'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        /*$thn=$_POST['tahun'];
        $bln=$_POST['bulan'];
        $tgl=$_POST['tgl'];
        $tglkrm=$thn.'-'.$bln.'-'.$tgl;
        */
        
        $update = mysqli_query($koneksi, "UPDATE pelanggan SET nama_lengkap='$nama', NIK='$nik', jk='$jk', no_hp='$no_hp', email='$email', alamat='$alamat' WHERE username='$user'") or die(mysqli_error());
        if($update){
          echo '<script language="javascript">alert("Data profil anda berhasil disimpan !"); document.location="profil.php";</script>';
        }else{
          echo '<div class="alert alert-danger">Data gagal disimpan, silahkan coba lagi.</div>';
        }
      }
      
      if(isset($_GET['pesan']) == 'sukses'){
        echo '<div class="alert alert-success">Data berhasil disimpan.</div>';
      }

      ?>

      <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>

<form class="form-horizontal" action="" method="post">
  <table class="table table-striped">

          <th>NAMA LENGKAP</th>
          <td>
            <div class="col-sm-4">
            <input type="text" name="nama" class="form-control" value="<?php echo $row['nama_lengkap']; ?>" placeholder="NAMA LENGKAP" required>
          </div>
          </td>
        </tr>
        <tr>
          <th>NIK</th>
          <td>
            <div class="col-sm-4">
            <input type="text" name="NIK" onkeypress="return hanyaAngka(event)" class="form-control" value="<?php echo $row['NIK']; ?>" placeholder="NIK" required>
          </div>
          </td>
        </tr>
         <tr>
          <th>JENIS KELAMIN</th>
          <td>
            <div class="col-sm-4">
            <input type="text" name="jk" class="form-control" value="<?php echo $row['jk']; ?>" placeholder="JENIS KELAMIN" required>
          </div>
          </td>
        </tr>
        <tr>
          <th>NOMOR HP</th>
          <td>
            <div class="col-sm-4">
            <input type="text" name="nohp" class="form-control" value="<?php echo $row['no_hp']; ?>" placeholder="NOMOR HP" required>
          </div>
          </td>
        </tr>
        <tr>
          <th>EMAIL</th>
          <td>
            <div class="col-sm-4">
            <input type="text" name="email" onkeypress="return hanyaAngka(event)" class="form-control" value="<?php echo $row['email']; ?>" placeholder="EMAIL" required>
          </div>
          </td>
        </tr>
        <tr>
          <th>ALAMAT</th>
          <td>
            <div class="col-sm-4">
            <input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']; ?>" placeholder="ALAMAT" required>
          </div>
          </td>
        </tr>

      </table>
      <div class="modal-footer">
       <button type="submit" name="save" value="SIMPAN" class="btn btn-success">ubah profil</button>
      </div>
</form>
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