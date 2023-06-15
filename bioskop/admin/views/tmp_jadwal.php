<?php include "../config/crud.php"; ?>
<h1>Tampil Data Jadwal</h1>
<button id="btn-tambah" onclick="thickbox('views/thickbox/input_jadwal.php','show')">+Tambah</button>
<table id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>ID Jadwal</th>
			<th>Tgl Tayang</th>
			<th>Tgl Berhenti</th>
			<th>ID sesi</th>
			<th>ID Ruang</th>
			<th>Action</th>
		</tr>
	</thead>
	
	<tbody>
	<?php
		$no= "1";
		$sql = $proses->tampil("*","jadwal","");
		foreach ($sql as $data) {
	 ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td ><?php echo $data[0]; ?></td>
			<td><?php echo date('d F Y',strtotime($data[1])); ?></td>
			<td><?php echo date('d F Y',strtotime($data[2])); ?></td>
			<td><?php echo $data[3]; ?></td>
			<td><?php echo $data[4]; ?></td>
			<td width="130">
				<button id="btn-hapus" onclick="h_jadwal('<?php echo $data[0]; ?>')">Hapus</button>
				<button id="btn-edit" onclick="edit_jadwal('<?php echo $data[0]; ?>')">Edit</button>
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