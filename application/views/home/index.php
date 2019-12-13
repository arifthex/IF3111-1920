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
			<b>
				<?= $value['author']; ?> <br>
				<span>Kategori : <?= $value['kategori']; ?></span>
			</b>
		</div>
		<h2><?= $value['judul']; ?></h2>
		<br>
		<p> <div id="readmore">
			<?php 
				$string 	= $value['isi'];
				$karakter 	= strlen($string);
				readmore($string,$karakter);
			?>	
			</div>
			<div id="expand">
				<?php expand($string); ?>
			</div>
		</p>
		<br>
		<div class="lampiran">
			<a href="<?= base_url();?>upload/file/<?= $value['lampiran']; ?>"><?= $value['lampiran']; ?></a>	
		</div>
		<span>
			<p><?= $value['waktu']; ?> &nbsp <b>Lihat Selengkapnya ></b></p>
		</span>
		<hr>
	<?php endforeach; ?>
	<?php if ($laporan == null): ?>
		<br><center> Data tidak ditemukan </center>
	<?php endif; ?>
</div> 
