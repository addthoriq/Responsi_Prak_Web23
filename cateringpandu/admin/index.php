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
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="daftar pelanggan.php">Daftar pelanggan</a></li>
				<li><a href="daftar pesanan.php">Daftar pesanan</a></li> 
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li data-toggle="modal" data-target="#mydaftar"><a href="profil.php" title="Ingin melihat deskripsi anda? Silahkan klik !"><span class="glyphicon glyphicon-user"></span>
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
		<div id="slideshow" class="carousel slide" data-ride="carousel">
  <!-- Indicators, Ini adalah Tombol BULET BULET dibawah. item ini dapat dihapus jika tidak diperlukan -->
  <ol class="carousel-indicators">
    <li data-target="#slideshow" data-slide-to="0" class="active"></li>
    <li data-target="#slideshow" data-slide-to="1"></li>
    <li data-target="#slideshow" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides, Ini adalah Tempat Gambar-->
  <div class="carousel-inner">
    <div class="item active">
      <img src="../img/beranda/sate.jpg" alt="slideshow"> <!-- Gambar -->
      <div class="carousel-caption"> <!-- Penjelasan -->
        <h3>Sate Ayam</h3>
		<p>dilengkapi dengan lontong serta disuguhkan dengan sangat berkualitas</p>
      </div>
    </div>
	<div class="item">
      <img src="../img/beranda/gorengan.jpg" alt="slideshow"> 
      <div class="carousel-caption"> 
        <h3>Gorengan isi</h3>
		<p>dengan berbagai macam jenis dan kelezatannya</p>
      </div>
    </div>
	<div class="item">
      <img src="../img/beranda/minuman.jpg" alt="slideshow"> 
      <div class="carousel-caption"> 
        <h3>Minuman</h3>
		<p>menjadikan sebagai pelepas dahaga yang menyejukkan </p>
      </div>
    </div>	
   
  </div>

  <!-- Controls, Ini adalah Panah Kanan dan Kiri. -->
  <a class="left carousel-control" href="#slideshow" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#slideshow" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<hr>
<!-- thumbnail-->
<div class="row">
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<img src="../img/beranda/makanan_pembuka.jpg" class="thumbnail" width="300px" height="200px">
		
			<div class="caption"> 
				<h3 align="center"><b>Makanan Pembuka</b></h3>
      		</div>
			hidangan makanan pembuka kami suguhkan untuk memiliki cita rasa yang khas dengan ini dapat membangkitkan selera makanan anda sebelum memakan hidangan utama
		</div>
	</div>

	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<img src="../img/beranda/makanan_utama.jpg" class="thumbnail" width="300px" height="200px">

			<div class="caption"> 
				<h3 align="center"><b>Makanan Utama</b></h3>
      		</div>
			makanan hidangan utama cukup bervariasi bukan hanya makanan indonesia yang identik dengan nasi akan tetapi juga olahan kentang dan pasta sesuai selera anda
		</div>
	</div>

	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<img src="../img/beranda/makanan_penutup.jpg" class="thumbnail" width="300px" height="200px">

			<div class="caption"> 
				<h3 align="center"><b>Makanan Penutup</b></h3>
      		</div>
			makanan penutup kami sangatlah beragam bukan hanya hidangan tradisional akan tetapi tradisional
		</div>
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