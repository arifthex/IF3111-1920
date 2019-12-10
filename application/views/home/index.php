<!-- View pada Beranda Home Web  -->
	<div id="badan">
		<form action="" method="POST">
			<input type="text" name="kata" style="height:2em; width: 70%" placeholder="Masukkan laporan yang ingin anda cari...">
			<input type="submit" name="cari" value="Cari" style="height:3.15em; width:8%">
		</form>
		<a href="<?= base_url();?>home/form">Buat Laporan/komentar <img height="20px" src="<?= base_url()?>asset/icon/tambah.png"></a>
	</div>
	<div id="konten">
		<br><br>
		<p>Laporan/Komentar Terakhir </p>
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

			<!-- <?php $id=$value['id']; ?> -->
			<h1> <a href="<?= base_url()?>home/detail?id=$id"><?= $value['judul']; ?></a> </h1>
			<br>
			<p style="text-align: justify;">
			<?= $value['isi']; ?>
			</p>
			<br>
			<?= $value['lampiran']; ?> (ini lampiran)
			<span>
			<p><?= $value['waktu']; ?> &nbsp <b>Lihat Selengkapnya ></b></p>
			</span>
			<hr>
		<?php endforeach; ?>
	</div> 
