<?php 
	include "../config/crud.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cetak Tiket</title>
 </head>
 <body>
 	<div class="box-tiket">
 		<div class="kepala-tiket">
 			<h1>Movie Place Cinema</h1>
 		</div>
 		<div class="isi">
 			<p>Silahkan datang ke loket Bioskop untuk mengambil & membayar tiket. Di bawah ini adalah ID Pemesanan anda, jangan sampai anda melupakannya </p>
 			<h2 style="text-align: center;"><?php echo $_GET['id']; ?></h2>
 			<p>Jika anda tidak segera mengambilnya dalam kurun waktu 3 (Tiga) hari, maka seluruh tiket yang anda pesan akan hangus.</p>
 		</div>
 	<button class="btn-print" onclick="b_print()">Print</button>
 	</div>
 </body>
 </html>
 <style type="text/css">
 	.box-tiket{
 		position: absolute;
 		width: 400px;
 		height: 380px;
 		color: #4c4447;
 		border:1px dashed #999999;
 		font-family: lucida console;
 		background-color: #ebf3f4;
 	}
 	.kepala-tiket{
 		width: 100%;
 		height: 100px;
 		text-align: center;
 		font-size: 18px;
 		border-bottom: 3px solid #4c4447;
 	}
 	.kepala-tiket h1{
 		padding: 15px;
 	}
 	.isi{
 		padding: 20px;
 		float: left;
 	}
 	.sesi{
 		float: left;
 		padding: 0px;
 		margin:0px;
 	}
 	.sesi h1{
 		font-size: 130px;
 	}
 	#font{
 		font-size: 25px;
 		font-weight: bold;
 	}
 	.btn-print{
 		width: 100px;
 		padding: 8px 0px;
 		border:1px;
 		float: right;
 		cursor: pointer;
 		background-color: #429cb5;
 		color: white;
 	}
 </style>
 <script type="text/javascript">
	function b_print(){
		window.print();
	};
 </script>