
<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
 //tombol cari di tekan
if ( isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);
}





 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah Data Mahasiswq</a>
<br><br>

<form action="" method="post">
	<input type="text" name="keyword"size="40" autofocus placeholder="Masukan keywod pencarian..."
	autocomplete="off">
	<button type="submit" name="cari"> Cari!</button>
</form>
<br>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>Nim</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach ($mahasiswa as $row) : ?>
	<tr>
		<td> <?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a> |
			<a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Yakin hapus data')">hapus</a>
		</td>
		<td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["nim"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>
</table>
</body>
</html>