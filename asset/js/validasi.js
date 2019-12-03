function validasi() {
	var judul		= document.forms["data"]["judul"].value;
	var text		= document.forms["data"]["isi"].value;
	var kategori 	= document.forms["data"]["aspek"].value;
	var lampiran 	= document.forms["data"]["lampiran"].value;
	//Hitung banyak kata
    var panjang=text.split(" ") 

	// if (judul == "") {
	// 	alert("Masukkan judul laporan anda");
	// 	return false;
	// } else if (text == "") {
	// 	alert("Isi laporan tidak boleh kosong");
	// 	return false;
	// } else if (panjang.length < 2) {
	// 	alert("Isi laporan Minimal 20 kata");
	// 	return false;
	// } else if (kategori == "NULL") {
	// 	alert("Pilih aspek laporan anda");
	// 	return false;
	// } 
	if (true) {
		alert("DATA BERHASIL DI SIMPAN");
	}
	return(location.href ="http://localhost/IF3111-1920/home");
	
}