<?php include "../config/crud.php"; ?>
<h1>Tampil Data Tiket</h1>
<button id="btn-tambah" onclick="thickbox('views/thickbox/input_tiket.php','show')">+Tambah</button>
<table id="table">
	<thead>
		<tr>
			<th>ID Tiket</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>ID Film</th>
			<th>Action</th>
		</tr>
	</thead>
	
	<tbody>
	<?php 
		$sql = $proses->tampil("*","tiket","");
		foreach ($sql as $data) {
	 ?>
		<tr>
			<td width="80"><?php echo $data[0]; ?></td>
			<td>Rp.<?php echo number_format($data[1],2,",","."); ?></td>
			<td><?php echo $data[2]; ?></td>
			<td><?php echo $data[3]; ?></td>
			<td width="130">
				<button id="btn-hapus" onclick="h_tiket('<?php echo $data[0]; ?>')">Hapus</button>
				<button id="btn-edit" onclick="edit_tiket('<?php echo $data[0]; ?>')">Edit</button>
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