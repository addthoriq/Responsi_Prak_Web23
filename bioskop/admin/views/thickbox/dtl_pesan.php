<?php include '../../config/crud.php'; ?>
<div class="bg-box" style="width: 80%;">
	<div class="bar">
		<p onclick="thickbox('','exit')">&times;</p>
		<h2>Detail Beli</h2>
	</div>
	<div class="in-box">
		<table id="tb" border="1" cellspacing="0">
			<tr>
				<th>No.</th>
				<th>ID Detai Pemesan</th>
				<th>Kursi</th>
				<th>ID Tiket</th>
				<th>Harga</th>
				<th>Action</th>
			</tr>
			<?php 
				$no= "1";
				$sql = $proses->tampil("*","dtl_pemesan,tiket","WHERE id_pemesan = '$_GET[id]' AND tiket.id_tiket = dtl_pemesan.id_tiket");
				foreach ($sql as $data) {
			 ?>
			 <tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data[0]; ?></td>
				<td><?php echo $data['kursi']; ?></td>
				<td><?php echo $data['id_tiket']; ?></td>
				<td>Rp.<?php echo number_format($data['harga'],2,",","."); ?></td>
				<td width="100">
					<a href="views/p_tiket.php?id=<?php echo $data[0]; ?>" target="_blank"><button id="btn-cetak">Cetak</button></a>
				</td>
			</tr>
			<?php } ?>
		</table>
		<button style="padding: 8px 0px;width: 80px;background-color: #37846c;border:1px;cursor: pointer;color: #fff;
		margin-top: 20px;" onclick="bayar('<?php echo $data['id_pemesan']; ?>')">Bayar</button>
	</div>
</div>
<style type="text/css">
	#tb{
		width: 100%;
		text-align: center;
		color: #777777;
	}
	#tb th{
		height: 30px;
	}
	#btn-cetak{
		width: 80px;
		padding: 6px 0px;
		border:1px;
		background-color: #249cb5;
		margin:5px;
		color: #fff;
		cursor: pointer;
	}
</style>