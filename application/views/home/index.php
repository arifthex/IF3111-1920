<!-- View pada Beranda Home Web  -->
<div id="badan">
	<form action="<?= base_url(); ?>Search" method="POST">
		<input type="text" placeholder="Search..." 
		name="keyword" id="keyword" autocomplete="off">
		<input type="submit" name="cari" value="Cari" id="cari-data">
	</form>
	<a href="<?= base_url();?>home/form">Buat Laporan/komentar <img height="20px" src="<?= base_url()?>asset/icon/tambah.png"></a>
</div>
<div id="konten">
	<br><br>
	<p>
		<?php if (isset($name)) {
			echo "$name";
		} else {
			echo "Laporan/Komentar Terakhir ";
		}
		?>
	</p>
	<hr>
	<?php foreach ($laporan as $value): ?>
		<div class="wrapper">
			<div class="gambar">
				<img height="50px" src="<?= base_url()?>asset/icon/user.png">
			</div>
			<!-- <?php $id=$value['id']; ?> -->
			<h1> <a href="<?= base_url()?>home/detail?id=$id"><?= $value['judul']; ?></a> </h1>
			<br>
			<p style="text-align: justify;">
			<?= $value['isi']; ?>
			</p>
			<br>
			<?= $value['lampiran']; ?> (ini lampiran)
			<span>
			<b>
				<?= $value['author']; ?> <br>
				<span>Kategori : <?= $value['kategori']; ?></span>
			</b>
		</div>
		<p> <?= $value['isi']; ?> </p> 
		<br><br><br>
		<div class="lampiran">
			Lampiran : 
			<a href="<?= base_url();?>upload/file/<?= $value['lampiran']; ?>"><?= $value['lampiran']; ?></a>
		</div>
		<span>
			<p>Waktu : <?= $value['waktu']; ?>&nbsp<b><a href="">Lihat selengkapnya ></a></b></p>
		</span>
		<hr>
		
	<?php endforeach; ?>
	<?php if ($laporan == null): ?>
		<br><center> Data tidak ditemukan </center>
	<?php endif; ?>
</div> 
<script src=" <?= base_url(); ?>asset/js/function.js"></script>