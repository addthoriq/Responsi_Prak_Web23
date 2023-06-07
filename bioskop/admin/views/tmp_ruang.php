<?php include "../config/crud.php"; ?>
<h1>Tampil Data Ruang</h1>
<button id="btn-tambah" onclick="thickbox('views/thickbox/input_ruang.php','show')">+Tambah</button>
<table id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>ID Ruang</th>
			<th>Nama Ruang</th>
			<th>Jumlah Kursi</th>
			<th>Action</th>
		</tr>
	</thead>
	
	<tbody>
	<?php
		$no = "1";
		$sql = $proses->tampil("*","ruang","");
		foreach ($sql as $data) {
	 ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data[0]; ?></td>
			<td><?php echo $data[1]; ?></td>
			<td><?php echo $data[2]; ?></td>
			<td width="130">
				<button id="btn-hapus" onclick="h_ruang('<?php echo $data[0]; ?>')">Hapus</button>
				<button id="btn-edit" onclick="edit_ruang('<?php echo $data[0]; ?>')">Edit</button>
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