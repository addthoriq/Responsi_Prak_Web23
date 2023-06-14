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
				<li class="active"><a href="contact.php">Hubungi Kami</a></li> 
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li data-toggle="modal" data-target="#mydaftar"><a href="total.php"><span class="glyphicon glyphicon-shopping-cart"></span>Pesanan</a></li>
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

<div class="row">
  <div class="col-md-4">
  	<div class="thumbnail">
      <h1 align="center"><span class="glyphicon glyphicon-earphone"></span></h1><br>
      <h2 align="center"><b>HUBUNGI KAMI</b></h2>
    </div>
  </div>
  <div class="col-md-8">
    <div class="thumbnail">
    <h1 align="center"><span class="glyphicon glyphicon-earphone"> No.Telp : 087848779050 (WA)</span></h1>
    <h1 align="center"><span class="glyphicon glyphicon-envelope"> Email : wahyuajipandu.b@gmail.com</span></h1>
    </div>
  </div>
</div>

<div class="row">
<div class="col-md-12">
	<div class="thumbnail">
		<h4 align="center"><b>Hubungi kami untuk mengajukan pertanyaan atau memberikan kritik dan saran pada CS kami</b></h4>
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