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
			<b> 
			<?= $value['author']; ?> <br>
			<span> Kategori : <?= $value['kategori']; ?></span>
			</b>
		</div>
		<p>
		<?php 
			$more = $value['isi'];
			$string = substr($more,0,350);
			$hitung = strlen($string);
			if ($hitung < 300 ) {
				echo "$more";
			} else {
				echo "$string <b>  . . .[Read more]</b>";	
			}
			
			
		?>
		</p>
		<br><br><br>
		<div class="lampiran">
			Lampiran : 
			<b><a href="<?= base_url();?>upload/file/<?= $value['lampiran']; ?>"><?= $value['lampiran']; ?></a></b>
		</div>
		<?php $id = $value['ID']; ?>
		<span>	
			<p>Waktu : <?= $value['waktu']; ?>&nbsp<b> 
			<?php echo "<a href='http://localhost/IF3111-1920/home/detail?detail=$id'>Lihat selengkapnya ></a>";?>
			</b></p>
		</span>
		<hr>
		
	<?php endforeach; ?>
	<?php if ($laporan == null): ?>
		<br><center><br><br> Tidak Ada Data <br><br></center>
	<?php endif; ?>
</div> 