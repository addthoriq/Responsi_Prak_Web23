<?php include "../config/crud.php"; ?>
<h1>Tampil Data Pemesan</h1>
<table id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>ID Pemesan</th>
			<th>Nama</th>
			<th>Jumlah Tiket</th>
			<th>Total Harga</th>
			<th>Action</th>
		</tr>
	</thead>
	
	<tbody>
	<?php
		$no = "1";
		$sql = $proses->tampil("*","pemesan,member","WHERE member.id_member = pemesan.id_member AND pemesan.status = '0'");
		foreach ($sql as $data) {
	 ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data[0]; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['jml_tiket_pesan']; ?></td>
			<td>Rp.<?php echo number_format($data['total_harga'],2,",","."); ?></td>
			<td width="130">
				<button id="btn-hapus" onclick="h_pemesan('<?php echo $data[0]; ?>')">Hapus</button>
				<button id="btn-edit" onclick="dtl_pesan('<?php echo $data[0]; ?>')">Detail</button>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	});
</script>
