function validasi() {
	var text=document.forms["data"]["laporan"].value
	var kategori = document.forms["data"]["aspek"].value
	var lampiran = document.forms["data"]["lampiran"].value

	//Hitung banyak kata
    var panjang=text.split(" ") 

	if (text == "") {
		alert("Isi laporan tidak boleh kosong")
		return(false)
	} else if (panjang.length < 20) {
		alert("Isi laporan Minimal 20 kata")
		return(false)
	}
	if (kategori == "NULL") {
		alert("Pilih aspek laporan anda")
		return(false)
	}
}