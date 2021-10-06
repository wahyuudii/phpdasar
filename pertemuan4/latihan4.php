<?php 
//cek apakah tidak ada data di $_GET

if( !isset($_GET["jenis_bahan"]) ||
	!isset($_GET["warna_kaos"]) ||
	!isset($_GET["ukuran"]) ||
	!isset($_GET["stock"]) ||
	!isset($_GET["gambar"])) {
	//redirect
	header("Location: latihan3.php");
exit;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Barang</title>
</head>
<body>
<ul>
	<li><img src="img/<?= $_GET["gambar"]; ?>"></li>
	<li><?= $_GET["jenis_bahan"]; ?></li>
	<li><?= $_GET["warna_kaos"]; ?></li>
	<li><?= $_GET["ukuran"]; ?></li>
	<li><?= $_GET["stock"]; ?></li>
</ul>
<a href="latian3.php"> Kembali ke halaman awal</a>
</body>
</html>