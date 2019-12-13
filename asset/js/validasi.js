function validasi() {
	var judul		= document.forms["data"]["judul"].value;
	var text		= document.forms["data"]["isi"].value;
	var kategori 	= document.forms["data"]["aspek"].value;
	var cekFile 	= document.forms["data"]["lampiran"].value;
	var lampiran 	= document.getElementById('file');
	var pathFile 	= lampiran.value;
	var ekstensiOk 	= /(.doc|.docx|.xls|.xlsx|.ppt|.ptx|.pdf)$/i;

	//Hitung banyak kata
    var panjang=text.split(" ") 
    
	if (judul == "") {
		setTimeout(()=>{
			window.location = "http://localhost/IF3111-1920/home/form"	
		},0)
		alert("Masukkan judul laporan anda");
	} else if (text == "") {
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
	} else if (!cekFile  == "") {
    	if(!ekstensiOk.exec(pathFile)){
	        alert('Silakan upload file yang memiliki ekstensi\n\t     doc docx xls xlsx ppt ptx pdf');
	        return false;  
    	} else if (ekstensiOk.exec(pathFile)){
    		alert("Data Berhasil Disimpan"); 
    	} else {
    		alert("Kesalahan Upload File"); 
    	}
    } else {
    	alert("Data Berhasil Disimpan"); 	
    }
	
}