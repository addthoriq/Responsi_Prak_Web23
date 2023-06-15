<?php include "../config/crud.php"; ?>
<h1>Tampil Data Member</h1>
<button id="btn-tambah" onclick="thickbox('views/thickbox/input_member.php','show')">+Tambah</button>
<table id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>ID Member</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Foto</th>
			<th>Action</th>
		</tr>
	</thead>
	
	<tbody>
	<?php
		$no = "1";
		$sql = $proses->tampil("*","member","");
		foreach ($sql as $data) {
	 ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data[0]; ?></td>
			<td><?php echo $data[1]; ?></td>
			<td><?php echo $data[2]; ?></td>
			<td><?php echo $data[4]; ?></td>
			<td><?php echo date("d F Y", strtotime($data[5])); ?></td>
			<td><img src="assets/img/member/<?php echo $data['foto']; ?>" width="80" height="90"></td>
			<td width="130">
				<button id="btn-hapus" onclick="h_member('<?php echo $data[0]; ?>')">Hapus</button>
				<button id="btn-edit" onclick="edit_member('<?php echo $data[0]; ?>')">Edit</button>
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
