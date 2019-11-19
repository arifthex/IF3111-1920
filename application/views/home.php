	<?php foreach ($laporan as $lapor): 
		echo $lapor['ID'];
		echo "<br>";
		echo $lapor['isi'];
		echo "<br>";
		echo $lapor['waktu'];
		echo "<br>";
		echo $lapor['lampiran'];
		echo "<br>";
	endforeach; ?>
