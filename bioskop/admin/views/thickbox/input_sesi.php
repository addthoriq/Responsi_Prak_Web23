<?php 
	include '../../config/crud.php';
	$id = $_GET['id'];
	$qr = $proses->tampil("*","sesi","WHERE id_sesi = '$id'");
	$dt = $qr->fetch();
 ?>
<div class="bg-box">
	<div class="bar">
		<p onclick="thickbox('','exit')">&times;</p>
		<h2>Edit Data Sesi</h2>
	</div>
	<div class="in-box">
		<p>Nama Sesi</p>
		<input type="text" id="nama" value="<?php echo $dt[1]; ?>">

		<p>Jam Mulai</p>
		<input type="time" id="mulai" value="<?php echo $dt[2]; ?>" placeholder="HH:MM">

		<p>Jam Selesai</p>
		<input type="time" id="selesai" value="<?php echo $dt[3]; ?>" placeholder="HH:MM">

		<button class="btn-simpan" onclick="p_edit_sesi(<?php echo $dt[0]; ?>)">Edit</button>
		<button class="btn-batal" onclick="thickbox('','exit')">Batal</button>
	</div>
</div>