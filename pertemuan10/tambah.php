<?php 
$conn = mysqli_connect("localhost","root","","phpdasar");

require 'functions.php';
//cek apakah tombol submit sudah di tekan atau belom 

if( isset($_POST["submit"]) ){


if( tambah($_POST) > 0 ) {
	echo "
		<script>
		alert('data berhsail ditambahkan!');
		document.location.href = 'index.php';
		</script>
	";
}else {
	echo "
		<script>
		alert('data gagal ditambahkan!');
		document.location.href = 'index.php';
		</script>
	";
}


}
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Tambah data mahasiswa</title>
</head>
<body>
	<h1>Tambah data mahasiswa</h1>
	<form action="" method="post">

		<ul>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="nim">Nim :</label>
				<input type="text" name="nim" id="nim" required>
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" required>
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan" required>
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah data!</button>
			</li>
		
		</ul>



	 </form>
</html>