<!-- View Untuk Form Inputan laporan baru -->
<div id="konten">
	<p>Buat laporan/komentar </p>
	<br><hr><br>
	<form action="" method="POST" enctype="multipart/form-data">
		<textarea placeholder="Ketik laporan/komentar anda..."  class="textarea" name="laporan"></textarea>
		<select name="aspek">
			<option value=NULL>Pilih aspek pelaporan/komentar</option>
			<option value="dosen">Dosen</option>
			<option value="staff">Staff</option>
			<option value="mahasiswa">Mahasiswa</option>
			<option value="infrastruktur">Infrastruktur</option>
			<option value="pengajaran">Pengajaran</option>
		</select>
		<br>
  		<input type="file" name="lampiran">
  		<div class="jarak">
  			<a class="button" href="<?= base_url();?>home/index">Kembali</a> 
  			<input type="submit" name="kirim" value="Buat LAPOR!">
  		</div>
  		<hr>
	</form>
</div>
