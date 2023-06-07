<?php include "../config/crud.php"; ?>
<h1>Tampil Data sesi</h1>
<table id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>ID sesi</th>
			<th>Nama sesi</th>
			<th>Jam Mulai</th>
			<th>Jam Selesai</th>
			<th>Action</th>
		</tr>
	</thead>
	
	<tbody>
	<?php
		$no = "1";
		$sql = $proses->tampil("*","sesi","");
		foreach ($sql as $data) {
	 ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data[0]; ?></td>
			<td><?php echo $data[1]; ?></td>
			<td><?php echo $data[2]; ?></td>
			<td><?php echo $data[3]; ?></td>
			<td width="80">
				<button id="btn-edit" onclick="edit_sesi('<?php echo $data[0]; ?>')">Edit</button>
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