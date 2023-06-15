function edit_film(id) {
	var url = "views/thickbox/input_film.php?id="+id;
	thickbox(url,'show');
}

function tmb_tiket() {
	harga = $("#harga").val();
	stok = $("#stok").val();
	id_film = $("#id_film").val();
	if (harga == "") {
		alert("Harga Kosong");
		$("#harga").focus();
	}else if (stok == "") {
		alert("Stok Kosong");
		$("#stok").focus();
	}else if (id_film == "") {
		alert("ID Film Kosong");
		$("#id_film").focus();
	}else{
		$.ajax({
			url : "models/s_tiket.php",
			type : "POST",
			data : {
				harga : harga,
				stok :stok,
				id_film : id_film
			},
			success:function (msg) {
				if (msg == "berhasil") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load("views/tmp_tiket.php");
					$(".bg-thick").fadeOut(500);
				}else{
					swal("Gagal !!","Gagal Menyimpan Data ","error");
				}
			}
		})
	}
}
function edit_tiket(id) {
	var url = "views/thickbox/input_tiket.php?id="+id;
	thickbox(url,'show');
}
function p_edit_tiket(id) {
	harga = $("#harga").val();
	stok = $("#stok").val();
	id_film = $("#id_film").val();
	if (harga == "") {
		alert("Harga Kosong");
		$("#harga").focus();
	}else if (stok == "") {
		alert("Stok Kosong");
		$("#stok").focus();
	}else if (id_film == "") {
		alert("ID Film Kosong");
		$("#id_film").focus();
	}else{
		$.ajax({
			url : "models/e_tiket.php",
			type : "POST",
			data : {
				id : id,
				harga : harga,
				stok :stok,
				id_film : id_film
			},
			success:function (msg) {
				if (msg == "true") {
					swal("Berhasil !!","Berhasil Mengedit Data ","success");
					$(".content").load("views/tmp_tiket.php");
					$(".bg-thick").fadeOut(500);
				}
			}
		})
	}
}
function h_tiket(id) {
	swal({
		title: "Peringatan !",
		text: "Anda yakin ingin menghapus data ini!",
		type: "warning",
		confirmButtonText: "Ya",
		cancelButtonText: "Tidak",
		confirmButtonColor: "#DD6B55",
		showCancelButton: true,
		closeOnConfirm: false,
		closeOnCancel: false
		},
		function(confirm) {
			if (confirm) {
				$.ajax({
					url : "models/h_tiket.php",
					type : "POST",
					data:{
						id : id
					},
					success:function (msg) {
						if (msg == "true") {
							swal("Berhasil !!","Berhasil menghapus data","success");
							$(".content").load("views/tmp_tiket.php");
							$(".bg-thick").fadeOut(500);
						}
					}
				})
			}else{
				swal("Batal !!","Batal menghapus data","error");
			}
		})
}

function tmb_jadwal() {
	mulai = $("#mulai").val();
	selesai = $("#selesai").val();
	sesi = $("#sesi").val();
	ruang = $("#ruang").val();
	if (mulai == "") {
		alert("Tanggal Tayang Kosong");
		$("#mulai").focus();
	}else if (selesai == "") {
		alert("Tanggal Berakhir Tayang Kosong");
		$("#selesai").focus();
	}else if (sesi == "") {
		alert("ID Sesi Kosong");
		$("#sesi").focus();
	}else if (ruang == "") {
		alert("ID Ruang Kosong");
		$("#ruang").focus();
	}else{
		$.ajax({
			url : "models/s_jadwal.php",
			type : "POST",
			data : {
				mulai :mulai,
				selesai:selesai,
				sesi:sesi,
				ruang:ruang
			},
			success:function (msg) {
				if (msg == "1") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load("views/tmp_jadwal.php");
					$(".bg-thick").fadeOut(500);
				}
			}
		})
	}
}
function h_jadwal(id) {
	swal({
		title: "Peringatan !",
		text: "Anda yakin ingin menghapus data ini!",
		type: "warning",
		confirmButtonText: "Ya",
		cancelButtonText: "Tidak",
		confirmButtonColor: "#DD6B55",
		showCancelButton: true,
		closeOnConfirm: false,
		closeOnCancel: false
		},
		function(confirm) {
			if (confirm) {
				$.ajax({
					url : "models/h_jadwal.php",
					type : "POST",
					data:{
						id : id
					},
					success:function (msg) {
						if (msg == "1") {
							swal("Berhasil !!","Berhasil menghapus data","success");
							$(".content").load("views/tmp_jadwal.php");
							$(".bg-thick").fadeOut(500);
						}
					}
				})
			}else{
				swal("Batal !!","Batal menghapus data","error");
			}
		})
}
function edit_jadwal(id) {
	var url = "views/thickbox/input_jadwal.php?id="+id;
	thickbox(url,'show');
}
function p_edit_jadwal(id) {
	mulai = $("#mulai").val();
	selesai = $("#selesai").val();
	sesi = $("#sesi").val();
	ruang = $("#ruang").val();
	if (mulai == "") {
		alert("Tanggal Tayang Kosong");
		$("#mulai").focus();
	}else if (selesai == "") {
		alert("Tanggal Berakhir Tayang Kosong");
		$("#selesai").focus();
	}else if (sesi == "") {
		alert("ID Sesi Kosong");
		$("#sesi").focus();
	}else if (ruang == "") {
		alert("ID Ruang Kosong");
		$("#ruang").focus();
	}else{
		$.ajax({
			url : "models/e_jadwal.php",
			type : "POST",
			data : {
				id:id,
				mulai :mulai,
				selesai:selesai,
				sesi:sesi,
				ruang:ruang
			},
			success:function (msg) {
				if (msg == "1") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load("views/tmp_jadwal.php");
					$(".bg-thick").fadeOut(500);
				}
			}
		})
	}
}
function tmb_ruang() {
	nama = $("#nama").val();
	kursi = $("#kursi").val();
	if (nama == "") {
		alert("Nama Ruang  Kosong");
		$("#nama").focus();
	}else if (kursi == "") {
		alert("Jumlah Kursi Kosong");
		$("#kursi").focus();
	}else{
		$.ajax({
			url : "models/s_ruang.php",
			type : "POST",
			data : {
				nama :nama,
				kursi:kursi
			},
			success:function (msg) {
				if (msg == "1") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load("views/tmp_ruang.php");
					$(".bg-thick").fadeOut(500);
				}
			}
		})
	}
}
function h_ruang(id) {
	swal({
		title: "Peringatan !",
		text: "Anda yakin ingin menghapus data ini!",
		type: "warning",
		confirmButtonText: "Ya",
		cancelButtonText: "Tidak",
		confirmButtonColor: "#DD6B55",
		showCancelButton: true,
		closeOnConfirm: false,
		closeOnCancel: false
		},
		function(confirm) {
			if (confirm) {
				$.ajax({
					url : "models/h_ruang.php",
					type : "POST",
					data:{
						id : id
					},
					success:function (msg) {
						if (msg == "1") {
							swal("Berhasil !!","Berhasil menghapus data","success");
							$(".content").load("views/tmp_ruang.php");
							$(".bg-thick").fadeOut(500);
						}
					}
				})
			}else{
				swal("Batal !!","Batal menghapus data","error");
			}
		})
}
function edit_ruang(id) {
	var url = "views/thickbox/input_ruang.php?id="+id;
	thickbox(url,'show');
}
function p_edit_ruang(id) {
	nama = $("#nama").val();
	kursi = $("#kursi").val();
	if (nama == "") {
		alert("Nama Ruang  Kosong");
		$("#nama").focus();
	}else if (kursi == "") {
		alert("Jumlah Kursi Kosong");
		$("#kursi").focus();
	}else{
		$.ajax({
			url : "models/e_ruang.php",
			type : "POST",
			data : {
				id:id,
				nama :nama,
				kursi:kursi
			},
			success:function (msg) {
				if (msg == "1") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load("views/tmp_ruang.php");
					$(".bg-thick").fadeOut(500);
				}
			}
		})
	}
}

function edit_sesi(id) {
	var url = "views/thickbox/input_sesi.php?id="+id;
	thickbox(url,'show');
}
function p_edit_sesi(id) {
	nama = $("#nama").val();
	mulai = $("#mulai").val();
	selesai = $("#selesai").val();
	if (nama == "") {
		alert("Nama Sesi  Kosong");
		$("#nama").focus();
	}else if (mulai == "") {
		alert("Jam Mulai Kosong");
		$("#mulai").focus();
	}else if (selesai == "") {
		alert("Jam Selesai Kosong");
		$("#selesai").focus();
	}else{
		$.ajax({
			url : "models/e_sesi.php",
			type : "POST",
			data : {
				id:id,
				nama :nama,
				mulai:mulai,
				selesai:selesai
			},
			success:function (msg) {
				if (msg == "1") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load("views/tmp_sesi.php");
					$(".bg-thick").fadeOut(500);
				}
			}
		})
	}
}

function edit_member(id) {
	var url = "views/thickbox/input_member.php?id="+id;
	thickbox(url,'show');
}

function h_film(id) {
	swal({
		title: "Peringatan !",
		text: "Anda yakin ingin menghapus data ini!",
		type: "warning",
		confirmButtonText: "Ya",
		cancelButtonText: "Tidak",
		confirmButtonColor: "#DD6B55",
		showCancelButton: true,
		closeOnConfirm: false,
		closeOnCancel: false
		},
		function(confirm) {
			if (confirm) {
				$.ajax({
					url : "models/h_film.php",
					type : "POST",
					data:{
						id : id
					},
					success:function (msg) {
						if (msg == "1") {
							swal("Berhasil !!","Berhasil menghapus data","success");
							$(".content").load("views/tmp_film.php");
							$(".bg-thick").fadeOut(500);
						}
					}
				})
			}else{
				swal("Batal !!","Batal menghapus data","error");
			}
		})
}
function h_member(id) {
	swal({
		title: "Peringatan !",
		text: "Anda yakin ingin menghapus data ini!",
		type: "warning",
		confirmButtonText: "Ya",
		cancelButtonText: "Tidak",
		confirmButtonColor: "#DD6B55",
		showCancelButton: true,
		closeOnConfirm: false,
		closeOnCancel: false
		},
		function(confirm) {
			if (confirm) {
				$.ajax({
					url : "models/h_member.php",
					type : "POST",
					data:{
						id : id
					},
					success:function (msg) {
						if (msg == "1") {
							swal("Berhasil !!","Berhasil menghapus data","success");
							$(".content").load("views/tmp_member.php");
							$(".bg-thick").fadeOut(500);
						}
					}
				})
			}else{
				swal("Batal !!","Batal menghapus data","error");
			}
		})
}

function dtl_pesan(id) {
	var url = "views/thickbox/dtl_pesan.php?id="+id;
	thickbox(url,'show');
}

function bayar(id) {
	$.ajax({
		url : "models/bayar.php",
		type : "POST",
		data : {
			id :id
		},
		success:function (msg) {
			if (msg == "1") {
				swal("Berhasil !!","Berhasil Membayar ","success");
				$(".content").load("views/tmp_pemesan.php");
				$(".bg-thick").fadeOut(500);
			}
		}
	})
}

function h_pemesan(id) {
	swal({
		title: "Peringatan !",
		text: "Anda yakin ingin menghapus data ini!",
		type: "warning",
		confirmButtonText: "Ya",
		cancelButtonText: "Tidak",
		confirmButtonColor: "#DD6B55",
		showCancelButton: true,
		closeOnConfirm: false,
		closeOnCancel: false
		},
		function(confirm) {
			if (confirm) {
				$.ajax({
					url : "models/h_pemesan.php",
					type : "POST",
					data:{
						id : id
					},
					success:function (msg) {
						if (msg == "1") {
							swal("Berhasil !!","Berhasil menghapus data","success");
							$(".content").load("views/tmp_pemesan.php");
						}
					}
				})
			}else{
				swal("Batal !!","Batal menghapus data","error");
			}
		})
}
