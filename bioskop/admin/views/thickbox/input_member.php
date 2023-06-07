<?php
	include '../../config/crud.php'; 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$judul = "Edit Data Member";
		$button = "Edit";
		$hid = "hidden";
		$onclick = "p_edit_member($id)";
	}else{
		$id = "";
		$judul = "Tambah Data Member";
		$button = "Simpan";
		$hid = "";
		$onclick = "tmb_member()";
	}
	$qr = $proses->tampil("*","member","WHERE id_member = '$id'");
	$dt = $qr->fetch();
 ?>
<div class="bg-box">
	<div class="bar">
		<p onclick="thickbox('','exit')">&times;</p>
		<h2><?php echo $judul; ?></h2>
	</div>
	<div class="in-box">
		<form id="<?php echo $button; ?>">
			<input type="hidden" name="id" value="<?php echo $dt[0]; ?>">
			<p>Nama *</p>
			<input type="text" name="nama" value="<?php echo $dt[1]; ?>" required>

			<p>Email *</p>
			<input type="email" name="email" value="<?php echo $dt[2]; ?>" >

			<p <?php echo $hid; ?>>Password</p>
			<input type="password" name="pass"  value="<?php echo $dt[3]; ?>" <?php echo $hid; ?>>

			<p>Jenis Kelamin</p>
			<?php 
				if ($dt[4] == "Laki-laki" ) {
					$l = "checked";
					$p = "";
				}elseif ($dt[4] == "Perempuan") {
					$p = "checked";
					$l = "";
				}else{
					$p = "";
					$l = "";
				}
			 ?>
			<input type="radio" name="jk" value="Laki-laki" <?php echo $l; ?> >Laki-laki
			<input type="radio" name="jk" value="Perempuan" <?php echo $p; ?> >Perempuan

			<p>Tanggal Lahir *</p>
			<input type="text" name="tgl_lahir" id="tgl_lahir" value="<?php echo $dt[5]; ?>" placeholder="YY/MM/DD" >

			<p>Foto</p>
			<input type="file" name="gambar">

			<input type="submit" value="<?php echo $button; ?>" class="btn-simpan">
			<input type="reset" value="Batal" class="btn-batal">
		</form>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		$("#tgl_lahir").datepicker({dateFormat:"yy/mm/dd",changeYear:true,changeMonth:true,yearRange:"-50:"}); 
	});
	$("#Simpan").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
			url:"models/s_member.php",
			type:"POST",
			data:new FormData(this),
			processData:false,
			contentType:false,
			cache:false,
			success:function(msg){
				if (msg == "true") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load('views/tmp_member.php');
					$(".bg-thick").fadeOut(500);
				}
			}
		})
	}));
	$("#Edit").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
			url:"models/e_member.php",
			type:"POST",
			data:new FormData(this),
			processData:false,
			contentType:false,
			cache:false,
			success:function(msg){
				if (msg == "true") {
					swal("Berhasil !!","Berhasil Mengedit Data ","success");
					$(".content").load('views/tmp_member.php');
					$(".bg-thick").fadeOut(500);
				}
			}
		})
	}));
</script>