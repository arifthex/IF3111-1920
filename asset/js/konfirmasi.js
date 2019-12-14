function konfirmasi (id) {
	str="Apakah anda yakin ingin menghapus laporan "+id+"?";
	if(confirm(str)){
		return true;
	}else{
		return false;
	}
}