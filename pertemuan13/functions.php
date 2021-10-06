<?php 

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result) ) {
		$rows [] =  $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;
	//ambil data dari tiap elemen dalam form
	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	
	//Upload gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}

$query = "INSERT INTO mahasiswa
				 VALUES 
				 ( '', '$nama','$nim','$email','$jurusan','$gambar')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload() {
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek apakah tidak ada gmabar yang di upload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
				</script>";
				return false;
	}
			//cek apakah yang di upload adalah gambar
		$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
			echo "<script>
						alert('yang anda upload bukan gambar!');
						</script>";
						return false;
		}

				//cek ukuran gambar terlalu besar
		if($ukuranFile > 1000000){
			echo "<script>
						alert('Ukuran gambar Terlalu Besar!');
						</script>";
						return false;
		}

				//lolos pengecekan gambar siap upload
				move_uploaded_file($tmpName, 'img' . $namaFile);
				return $namaFile;
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;
	//ambil data dari tiap elemen dalam form
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

$query = "UPDATE mahasiswa SET 
				nama = '$nama',
				nim = '$nim',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'
				WHERE id = $id
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function cari($keyword) {
	$query = "SELECT * FROM mahasiswa 
				WHERE
				nama LIKE '%$keyword%'
				
				";
				return query($query);
}

 ?>
