<!-- View Untuk Detail Laporan -->
<div id="konten">
	<p>Detail Laporan/Komentar </p>
	<br><hr><br>
	<?php foreach ($laporan as $value): ?>
		<h1><?= $value['judul']; ?></h1>
		<br>
		<p style="text-align: justify;">
		<?= $value['isi']; ?>
		</p>
		<br>
		<span>Lampiran : <?= $value['lampiran']; ?></span>
		<br>
		<p> Waktu: <?= $value['waktu']; ?> Aspek: <?= $value['kategori']; ?> 
		<a href="<?= base_url();?>home/detail">Hapus Laporan/komentar<img height="20px" src="<?= base_url()?>asset/icon/silang.png"></a></p>
		<br><hr>
	<?php endforeach; ?>
</div>
