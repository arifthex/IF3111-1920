function validasi() {
	var text = document.forms["data"]["laporan"].value
	var kategori = document.forms["data"]["aspek"].value
	var lampiran = document.forms["data"]["lampiran"].value
	
	if (text == "") {
		alert("Isi laporan tidak boleh kosong")
		return(false)
	}
	if (kategori == "NULL") {
		alert("Pilih aspek laporan anda")
		return(false)
	}
}