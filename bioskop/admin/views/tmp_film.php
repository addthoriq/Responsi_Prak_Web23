<?php include '../config/crud.php'; ?>
<h1>Daftar Film</h1>
<button id="btn-tambah" onclick="thickbox('views/thickbox/input_film.php','show')">+Tambah</button>
<table id="table">
	<thead>
		<tr>
			<th>ID Film</th>
			<th>Judul</th>
			<th>Genre</th>
			<th>Rating</th>
			<th>Durasi</th>
			<th>ID Jadwal</th>
			<th>ID Tiket</th>
			<th>Rilis</th>
			<th>Score</th>
			<th>Sinopsis</th>
			<th>Gambar</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$sql = $proses->tampil("*","film","");
		foreach($sql as $data) {
	?>
		<tr>
			<td width="70"><?php echo $data[0]; ?></td>
			<td><?php echo $data[1]; ?></td>
			<td><?php echo substr($data[2],0,10);?>...</td>
			<td><?php echo $data[3]; ?></td>
			<td><?php echo substr($data[4], 0,5); ?></td>
			<td><?php echo $data[5]; ?></td>
			<td><?php echo $data[7]; ?></td>
			<td><?php echo $data['rilis']; ?></td>
			<td><?php echo $data['score']; ?></td>
			<td width="150"><?php echo substr($data[6],0,40);?>...</td>
			<td><img src="assets/img/film/<?php echo $data['gambar']; ?>" width="80" height="90"></td>
			<td width="130">
				<button id="btn-hapus" onclick="h_film(<?php echo $data[0]; ?>)">Hapus</button>
				<button id="btn-edit" onclick="edit_film('<?php echo $data[0]; ?>')">Edit</button>
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