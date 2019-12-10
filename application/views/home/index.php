<!-- View pada Beranda Home Web  -->
<div id="badan">
	<form action="<?= base_url(); ?>Search" method="POST">
		<input type="text" placeholder="Masukkan laporan yang ingin anda cari..." 
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
	<br><hr>
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
		<h1><?= $value['judul']; ?></h1>
		<br>
		<p><?= $value['isi']; ?></p>
		<br>
		<?= $value['lampiran']; ?> (ini lampiran)
		<span>
			<p><?= $value['waktu']; ?> &nbsp <b>Lihat Selengkapnya ></b></p>
		</span>
		<hr>
	<?php endforeach; ?>
	<?php if ($laporan == null): ?>
		<br><center> Data tidak ditemukan </center>
	<?php endif; ?>
</div> 
