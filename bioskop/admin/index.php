<?php
	include 'models/login.php';
	if (isset($_SESSION['id'])) {
		if ($_SESSION['level'] == "admin") {
			$admin = "";
		}else{
			$admin = "hidden";
		}
	}else{
		echo "<script>document.location = 'views/login.php'</script>";
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/back-end.css">
	<link rel="stylesheet" type="text/css" href="assets/css/thickbox.css">
	<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="assets/dist/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="assets/datatables/media/css/jquery.dataTables.css">
</head>
<body>
	<div class="bg-thick" hidden>
		
	</div>
	<div class="bar-top">
		
	</div>
	<div class="side-menu">
		<div class="bar-top-menu">

		</div>
		<div class="avatar">
			<img src="assets/img/user.svg">
			<p><?php echo $_SESSION['level']; ?></p>
		</div>
		<div class="main-menu">
			<p>main navigation</p>
		</div>

		<ul>
			<a href="?p=beranda"><li>Beranda</li></a>
			<div <?php echo $admin ?>>
				
			<a href="?p=tmp_member"><li>Member</li></a>
			<a href="?p=tmp_film"><li>Film</li></a>
			<a href="?p=tmp_tiket"><li>Tiket</li></a>
			<a href="?p=tmp_jadwal"><li>Jadwal</li></a>
			<a href="?p=tmp_ruang"><li>Ruang</li></a>
			<a href="?p=tmp_sesi"><li>Sesi</li></a>
			<a href="?p=tmp_pemesan"><li>Pemesan</li></a>

			</div>
			<a href="#" id="laporan"><li>Laporan</li></a>
			<div class="main" hidden style="margin-left:20px;">
				<a href="?p=lap_pembelian_tiket" style="color: #fff;">Laporan Pemesan Tiket</a>
			</div>
			<a href="models/logout.php"><li>Logout</li></a>
		</ul>
	</div>
	<div class="content" >
		<?php 
			if (isset($_GET['p'])) {
				include "views/".$_GET['p'].".php";
			}else{
				include "views/beranda.php";
			}
		 ?>
	</div>
</body>
</html>
<script type="text/javascript" src="models/js/proses.js"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="assets/js/function.js"></script>
<script type="text/javascript" src="assets/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="assets/datatables/media/js/jquery.dataTables.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	});
	$("#laporan").click(function() {
		$(".main").toggle(400);
	})
</script>