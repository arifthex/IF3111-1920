<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE LAPOR</title>
</head>
<body>
<h1>SIMPLE LAPOR!</h1>
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

</body>
</html>