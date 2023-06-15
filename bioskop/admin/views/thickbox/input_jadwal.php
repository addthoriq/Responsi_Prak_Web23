<?php
	include '../../config/crud.php'; 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$judul = "Edit Data Jadwal";
		$button = "Edit";
		$onclick = "p_edit_jadwal($id)";
	}else{
		$id = "";
		$judul = "Tambah Data Jadwal";
		$button = "Simpan";
		$onclick = "tmb_jadwal()";
	}
	$qr = $proses->tampil("*","jadwal","WHERE id_jadwal = '$id'");
	$dt = $qr->fetch();
 ?>
<div class="bg-box">
	<div class="bar">
		<p onclick="thickbox('','exit')">&times;</p>
		<h2><?php echo $judul; ?></h2>
	</div>
	<div class="in-box">
		<p>Tanggal Mulai</p>
		<input type="text" id="mulai" value="<?php echo $dt[1]; ?>" placeholder="YY/MM/DD">

		<p>Tanggal Selesai</p>
		<input type="text" id="selesai" value="<?php echo $dt[2]; ?>" placeholder="YY/MM/DD">

		<p>ID Sesi</p>
		<input type="text" id="sesi" value="<?php echo $dt[3]; ?>">

		<p>ID Ruang</p>
		<input type="text" id="ruang" value="<?php echo $dt[4]; ?>">

		<button class="btn-simpan" onclick="<?php echo $onclick; ?>"><?php echo $button; ?></button>
		<button class="btn-batal" onclick="thickbox('','exit')">Batal</button>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		$("#mulai").datepicker({dateFormat:"yy/mm/dd"});
		$("#selesai").datepicker({dateFormat:"yy/mm/dd"}); 
	})
</script>