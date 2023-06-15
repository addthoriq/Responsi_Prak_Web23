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
<?php
include('js.php');
include("../koneksi.php");
  ?>

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
				<li class="active"><a href="menu.php">Menu</a></li>
				<li><a href="about.php">Tentang Kami</a></li> 
				<li><a href="contact.php">Hubungi Kami</a></li> 
			</ul>

			<ul class="nav navbar-nav navbar-right">
        <li data-toggle="modal" data-target="#mydaftar"><a href="total.php"><span class=" glyphicon glyphicon-shopping-cart"></span>Pesanan</a></li>
        <li data-toggle="modal" data-target="#mydaftar"><a href="profil.php" title="Ingin melihat deskripsi ? Silahkan klik !"><span class="glyphicon glyphicon-user"></span>
          <?php session_start();$user=$_SESSION['pelanggan'];echo $user;

          ?>
        </a></li>
        <li data-toggle="modal" data-target="#mydaftar"><a href="../Logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
		</div>
	</nav>

	
 <!--==============================header=================================-->
 <!--==============================content=================================-->
<content id="content">
	<div class="container">
<div class="thumbnail">


<?php
      $id = $_GET['id_beli'];
      $cekers = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE id_beli='$id'");
      if(mysqli_num_rows($cekers) == 0){
        header("Location: total.php");
      }else{
        $row = mysqli_fetch_assoc($cekers);
      }
      if(isset($_POST['save'])){
        $ayam = $_POST['porsiayam'];
        $soto = $_POST['porsisoto'];
        $nasgor = $_POST['porsinasgor'];
        $degan = $_POST['porsidegan'];
        $scampur = $_POST['porsicampur'];
        $dawet = $_POST['porsidawet'];
        $martabak = $_POST['porsimarta'];
        $onde = $_POST['porsionde'];
        $piscok = $_POST['porsipiscok'];

        $almt=$_POST['almtkirim'];
        $subtotal=($ayam*15000)+($soto*10000)+($nasgor*12000)+($degan*6000)+($scampur*8000)+($dawet*5000)+($martabak*4000)+($onde*2000)+($piscok*2000);
        
        $update = mysqli_query($koneksi, "UPDATE pesanan SET almt_tujuan='$almt', sate_ayam='$ayam', soto_ayam='$soto', nasgor='$nasgor', degan='$degan', scampur='$scampur', dawet='$dawet', martabak='$martabak', onde='$onde', piscok='$piscok', subtotal='$subtotal' WHERE id_beli='$id'") or die(mysqli_error());
        if($update){
          echo '<script language="javascript">alert("Data pesanan anda berhasil disimpan !"); document.location="total.php";</script>';
        }else{
          echo '<div class="alert alert-danger">Data gagal disimpan, silahkan coba lagi.</div>';
        }
      }
      
      ?>

  <form action="" name="autoSumForm"
enctype="multipart/form-data" method="POST">
<?php $user=$_SESSION['pelanggan'];
 ?>

  <div class="table-responsive">
      <table class="table table-striped table-hover">
    <caption><h4><b> Form Pembelian </b></h4></caption>
    <thead>
      <tr>
        <td align="center"><b>No</b></td>
        <td align="center" class="col-md-3" ><b>Nama makanan / Minuman</b></td>
        <td align="center" class="col-md-4"><b>Harga</b></td>
        <td align="center" class="col-md-2"><b>Porsi</b></td>
        <td align="center" class="col-md-5"><b>Total harga</b></td>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td align="center"><b>1</b></td>
        <th>Sate Ayam</th>
        <th>
              Rp.<input readonly type=text class="form-control" value='15000' name="hargaayam"  readonly>
        </th>
        <th>
             <br> <input type="text" class="form-control" value="<?php echo $row['sate_ayam']; ?>" name="porsiayam" onFocus="startCalc();" onBlur="stopCalc();" required/></input>
        </th>
        <th>
            Rp.<input readonly type="text" class="form-control" value="0" name="total1" readonly>
        </th>
      </tr>

      <tr>
        <td align="center"><b>2</b></td>
        <th>Soto Ayam</th>
         <th>
              Rp.<input readonly type=text class="form-control" value='10000' name="hargasoto"  readonly>
        </th>
        <th>
             <br> <input type="text" class="form-control" value="<?php echo $row['soto_ayam']; ?>" name="porsisoto" onFocus="startCalc1();" onBlur="stopCalc();" required/></input>
        </th>
        <th>
            Rp.<input readonly type="text" class="form-control" value="0" name="total2" readonly>
        </th>
      </tr>

      <tr>
       <td align="center"><b>3</b></td>
        <th>Nasi goreng</th>
         <th>
              Rp.<input readonly type=text class="form-control" value='12000' name="harganasgor"  readonly>
        </th>
        <th>
             <br> <input type="text" class="form-control" value="<?php echo $row['nasgor']; ?>" name="porsinasgor" onFocus="startCalc2();" onBlur="stopCalc();" required/></input>
        </th>
        <th>
            Rp.<input readonly type="text" class="form-control" value="0" name="total3" readonly>
        </th>
      </tr>

      <tr>
        <td align="center"><b>4</b></td>
        <th>Es Kelapa Muda</th>
         <th>
              Rp.<input readonly type=text class="form-control" value='6000' name="hargadegan"  readonly>
        </th>
        <th>
             <br> <input type="text" class="form-control" value="<?php echo $row['degan']; ?>" name="porsidegan" onFocus="startCalc3();" onBlur="stopCalc();" required/></input>
        </th>
        <th>
            Rp.<input readonly type="text" class="form-control" value="0" name="total4" readonly>
        </th>
      </tr>

      <tr>
         <td align="center"><b>5</b></td>
        <th>Es Campur</th>
         <th>
              Rp.<input readonly type=text class="form-control" value='8000' name="hargacampur"  readonly>
        </th>
        <th>
             <br> <input type="text" class="form-control" value="<?php echo $row['scampur']; ?>" name="porsicampur" onFocus="startCalc4();" onBlur="stopCalc();" required/></input>
        </th>
        <th>
            Rp.<input readonly type="text" class="form-control" value="0" name="total5" readonly>
        </th>
      </tr>

      <tr>
         <td align="center"><b>6</b></td>
        <th>Es Dawet</th>
         <th>
              Rp.<input readonly type=text class="form-control" value='5000' name="hargadawet"  readonly>
        </th>
        <th>
             <br> <input type="text" class="form-control" value="<?php echo $row['dawet']; ?>" name="porsidawet" onFocus="startCalc5();" onBlur="stopCalc();" required/></input>
        </th>
        <th>
            Rp.<input readonly type="text" class="form-control" value="0" name="total6" readonly>
        </th>
      </tr>

      <tr>
         <td align="center"><b>7</b></td>
        <th>Martabak Mini</th>
         <th>
              Rp.<input readonly type=text class="form-control" value='4000' name="hargamarta"  readonly>
        </th>
        <th>
             <br> <input type="text" class="form-control" value="<?php echo $row['martabak']; ?>" name="porsimarta" onFocus="startCalc6();" onBlur="stopCalc();" required/></input>
        </th>
        <th>
            Rp.<input readonly type="text" class="form-control" value="0" name="total7" readonly>
        </th>
      </tr>

      <tr>
        <td align="center"><b>8</b></td>
        <th>Onde onde Coklat</th>
        <th>
              Rp.<input readonly type=text class="form-control" value='2000' name="hargaonde"  readonly>
        </th>
        <th>
             <br> <input type="text" class="form-control" value="<?php echo $row['onde']; ?>" name="porsionde" onFocus="startCalc7();" onBlur="stopCalc();" required/></input>
        </th>
        <th>
            Rp.<input readonly type="text" class="form-control" value="0" name="total8" readonly>
        </th>
      </tr>

      <tr>
        <td align="center"><b>9</b></td>
        <th>Pisang Coklat</th>
         <th>
              Rp.<input readonly type=text class="form-control" value='2000' name="hargapiscok"  readonly>
        </th>
        <th>
             <br> <input type="text" class="form-control" value="<?php echo $row['piscok']; ?>" name="porsipiscok" onFocus="startCalc8();" onBlur="stopCalc();" required/></input>
        </th>
        <th>
            Rp.<input readonly type="text" class="form-control" value="0" name="total9" readonly>
        </th>
      </tr>

      <!-- <tr>
        <th></th>
        <th>Tanggal pengiriman pesanan : </th>
           <?php
            include 'tanggal.php';
             ?>
        <th></th>
        <th></th>
      </tr>
      <tr> -->
        <th></th>
        <th>Alamat Tujuan dikirim : </th>
         <th>   <input type="textarea" class="form-control"  rows="3"  name="almtkirim" placeholder="Alamat tujuan" value="<?php echo $row['almt_tujuan']; ?>" required/></textarea>
        </th>
        <th></th>
        <th></th>
      </tr>

        </tbody>
        </table>
      </div>

      <div class="modal-footer">
       <button type="submit" name="save" value="SIMPAN" class="btn btn-success">Rubah pesanan</button>
      </div>
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