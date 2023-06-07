<?php
	include '../../config/crud.php'; 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$judul = "Edit Data Tiket";
		$button = "Edit";
		$onclick = "p_edit_tiket($id)";
	}else{
		$id = "";
		$judul = "Tambah Data Tiket";
		$button = "Simpan";
		$onclick = "tmb_tiket()";
	}
	$qr = $proses->tampil("*","tiket","WHERE id_tiket = '$id'");
	$dt = $qr->fetch();
 ?>
<div class="bg-box">
	<div class="bar">
		<p onclick="thickbox('','exit')">&times;</p>
		<h2><?php echo $judul; ?></h2>
	</div>
	<div class="in-box">
		<p>Harga</p>
		<input type="number" id="harga" value="<?php echo $dt[1]; ?>">

		<p>Stok</p>
		<input type="number" id="stok" value="<?php echo $dt[2]; ?>">

		<p>ID Film</p>
		<input type="text" id="id_film" value="<?php echo $dt[3]; ?>">

		<button class="btn-simpan" onclick="<?php echo $onclick; ?>"><?php echo $button; ?></button>
		<button class="btn-batal" onclick="thickbox('','exit')">Batal</button>
	</div>
</div>
