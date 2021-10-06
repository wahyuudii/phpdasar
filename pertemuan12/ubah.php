<?php 

require 'functions.php';


//ambil data di URL
	$id = $_GET["id"];

//Query data mahsiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


//cek apakah tombol submit sudah di tekan atau belom 
if( isset($_POST["submit"]) ) {


//cek apakah datanyaberhasil diubah atau belum
	if( ubah($_POST) > 0 ) { // ke functions
		echo "
			<script>
			alert('data berhasil diubah!');
			document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('data gagal diubah!');
			document.location.href = 'index.php';
			</script>
		";
	}


}
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Ubah data mahasiswa</title>
</head>
<body>
	<h1>Ubah data mahasiswa</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">

		<ul>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
			</li>
			<li>
				<label for="nim">Nim :</label>
				<input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah data!</button>
			</li>
		
		</ul>



	 </form>
</html>