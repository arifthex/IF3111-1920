function validasi() {
	var text		= document.forms["data"]["isi"].value;
	var kategori 	= document.forms["data"]["aspek"].value;
	var lampiran 	= document.getElementById('file');
	var pathFile 	= lampiran.value;
	var ekstensiOk 	= /(.doc|.docx|.xls|.xlsx|.ppt|.ptx|.pdf)$/i;

	//Hitung banyak kata
	var panjang=text.split(" ") 

 	if (text == "") {
		setTimeout(()=>{
			window.location = "http://localhost/IF3111-1920/home/form"	
		},0)
		alert("Isi laporan tidak boleh kosong");
	} else if (panjang.length < 20) { //Isi laporan minimal 20 kata
		setTimeout(()=>{
			window.location = "http://localhost/IF3111-1920/home/form"	
		},0)
		alert("Isi laporan Minimal 20 kata");
	} else if (kategori == "NULL") {
		setTimeout(()=>{
			window.location = "http://localhost/IF3111-1920/home/form"	
		},0)
		alert("Pilih aspek laporan anda");
	} else if(!ekstensiOk.exec(pathFile)){
		setTimeout(()=>{
			window.location = "http://localhost/IF3111-1920/home/form"	
		},0)
		alert('Silakan upload file yang memiliki ekstensi\n\t     doc docx xls xlsx ppt ptx pdf');
		return false;  
	} else {
		alert("Data Berhasil Disimpan"); 	
	}

}