<!-- View Untuk Form Inputan laporan baru -->
<div id="konten">
	<p>Ubah laporan </p>
	<br><hr><br>

	<form action="<?= base_url();?>CRUD/update" method="POST" onSubmit="validasi()" 
	enctype="multipart/form-data" name="data">
	<?= "<font color='red'><i>$error </i><br></font>"; ?>
	<div class="textinput">
		<input type="text" name="author" placeholder="Masukkan nama author dan kosongkan jika ingin disamarkan..."> <br><br>
		<input type="text" name="judul" placeholder="Judul laporan anda..."> <br> <br>
	</div>
	<textarea placeholder="Ketik laporan/komentar anda..." class="textarea" name="isi"></textarea>
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
		<a class="button" href="<?= base_url();?>home/detail">Kembali</a> 
		<input type="submit" name="kirim" value="Update LAPOR!">
	</div>
	<hr>
</form>
</div>
<script src=" <?= base_url(); ?>asset/js/validasi.js"></script>
