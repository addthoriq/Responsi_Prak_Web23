<?php 
	include "../config/crud.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="header">
	<h1>Laporan Pembeli Tiket</h1>
	<h2>Movie Place Cinema</h2> 	
</div>

 <table class="tb_isi" cellspacing="0" border="1" width="100%">
 	<tr>
 		<th>No.</th>
 		<th>Nama</th>
 		<th>Tanggal Pemesanan</th>
 		<th>ID Pemesanan</th>
 		<th>Harga</th>
 	</tr>
 	<?php
 		$sql = $proses->tampil("*","dtl_pemesan,pemesan,tiket,member","WHERE pemesan.tgl_pesan BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]' AND dtl_pemesan.id_pemesan = pemesan.id_pemesan AND tiket.id_tiket = dtl_pemesan.id_tiket AND member.id_member = pemesan.id_member AND pemesan.status = '1'");
 		$no = 1;
		foreach ($sql as $data) {
 	 ?>
 	<tr>
 		<td><?php echo $no++."."; ?></td>
 	 	<td><?php echo $data['nama']; ?></td>
 	 	<td><?php echo date('d F Y', strtotime($data['tgl_pesan'])); ?></td>
 	 	<td><?php echo $data['id_pemesan']; ?></td>
 	 	<td>Rp. <?php echo number_format($data['harga'],2,",","."); ?></td>
 	</tr>
 <?php } ?>
 </table>
 <?php 
 	$sql1 = $proses->tampil("SUM(tiket.harga)","tiket,dtl_pemesan,pemesan","WHERE pemesan.tgl_pesan BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]' AND dtl_pemesan.id_pemesan = pemesan.id_pemesan AND tiket.id_tiket = dtl_pemesan.id_tiket AND pemesan.status = '1' ");
 	$dt1 = $sql1->fetch();
  ?>
 <table class="tb_isi" cellspacing="0" border="1">
 	<tr>
 		<td width="78%">Total Pendapatan</td>
 		<td>Rp.<?php echo number_format($dt1[0],2,",","."); ?></td>
 	</tr>
 </table>
 <p class="info">Periode <?php echo date('d F Y', strtotime($_GET['tgl1'])); ?> - <?php echo date('d F Y', strtotime($_GET['tgl2'])); ?></p>

</body>
</html>
<style type="text/css">
	*{
 		font-family: segoe UI;
	}
 	.tb_isi{
 		width: 98%;
 		text-align: center;
 		margin: 0px auto;
 	}
 	.tb_isi th{
 		height: 45px;
 	}
 	.tb_isi td{
 		height: 35px;
 	}
 	.header h1{
 		text-align: center;
 		font-weight: 100;
 		font-size: 40px;
 		margin: 0px;

 	}
 	.header h2{
 		text-align: center;
 		margin:0px;
 		font-weight: 100;
 		margin: 0px 0px 20px 0px;
 	}
 	.info{
 		color:#d64242;
 		font-size: 13px;
 		margin: 10px 0px 0px 10px;
 		font-style:italic;
 	}
</style>
 <script type="text/javascript">
 	window.load=cetak();
 	function cetak() {
 		window.print();
 	}
 </script>