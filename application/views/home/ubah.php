<!-- View Untuk Form Inputan laporan baru -->
<div id="konten">
	<p>Ubah laporan </p>
	<br><hr><br>

	<form action="<?= base_url();?>CRUD/update" method="POST" onSubmit="validasi()" 
	enctype="multipart/form-data" name="data">
	<?php foreach ($ubah as $value )  :?>
	<div class="textinput">
		<input type="hidden" name="ID" value="<?= $value['ID']; ?>">
		<input type="text" name="author" value="<?= $value['author']; ?>"> <br><br>
	</div>
	<textarea class="textarea" name="isi"><?= $value['isi'];?>	</textarea>
	<select name="aspek">
		<option value=NULL selected="<?= $value['kategori']; ?>">Pilih aspek pelaporan/komentar</option>
		<option value="dosen">Dosen</option>
		<option value="staff">Staff</option>
		<option value="mahasiswa">Mahasiswa</option>
		<option value="infrastruktur">Infrastruktur</option>
		<option value="pengajaran">Pengajaran</option>
	</select>
	<br>
	<input type="file" name="lampiran">
	<div class="jarak">
		<input type="submit" name="kirim" value="Update LAPOR!">
	</div>
	<?php endforeach; ?>
	<hr>
</form>
</div>
<script src=" <?= base_url(); ?>asset/js/validasi.js"></script>
