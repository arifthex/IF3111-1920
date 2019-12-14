<!-- View Untuk Detail Laporan -->
<script type="text/javascript" src="<?= base_url()?>asset/js/konfirmasi.js"></script>
<div id="konten">
	<p>Detail Laporan/Komentar </p>
	<hr>
	<?php foreach ($detail as $value): ?>
		<?php $id = $value['ID']; ?>
		<div class="wrapper">
			<div class="gambar">
				<img height="50px" src="<?= base_url()?>asset/icon/user.png">
			</div>
			<b> 
			<?= $value['author']; ?> <br>
			<span> Kategori : <?= $value['kategori']; ?></span>
			</b>
		</div>
		<p> <?= $value['isi']; ?> </p>
		<br>
		Lampiran : 
		<br><br>
		<a href="<?= base_url();?>upload/file/<?= $value['lampiran']; ?>">
		<img style="height: 180px;" src="<?= base_url()?>asset/icon/lampiran.png">
		<br>
		<font style="font-size: 11pt"><?= $value['lampiran']; ?>	</font></a>
		<br><br><br><br>
		<div class="lampiran">
			Waktu : <?= $value['waktu']; ?> &nbsp &nbsp&nbsp
			Aspek : <?= $value['kategori']; ?>
		</div>
		<span>	
			<p>
				<?php echo "
				<a href='http://localhost/IF3111-1920/Home/ubah?ubah_id=$id'>Ubah Laporan/Komentar<img style='height: 12px;' src='http://localhost/IF3111-1920/asset/icon/ubah.png'></a>  &nbsp
				<a href=javascript:konfirmasi('http://localhost/IF3111-1920/CRUD/hapus?hapus_id=$id')>Hapus Laporan/komentar<img style='height: 15px;' src='http://localhost/IF3111-1920/asset/icon/silang.png'></a>
				";?>
			</p>
		</span>
		<hr>
	<?php endforeach; ?>
</div>
