<?php 
//variable scope/ingkup variabe

// $x = 10;
//  function tampilx() {
//  	global $x;
//  	echo $x;
//  }
//  tampilx();



$tokoku =[

	[
		"jenis_bahan" =>"Combed 30s",
		"warna_kaos" =>"hitam",
		"ukuran" => "XL",
		"stock"	=> "13pcs",
		"gambar"=> "rakuatt.jpeg"

	],
	[

		"jenis_bahan" =>"Combed 20s",
		"warna_kaos" =>"Putih",
		"ukuran" => "4L",
		"stock"	=> "155pcs",
		"gambar"=> "nasii.jpg"
	]

];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data Barang</title>
 </head>
 <body>

 <h1>Data Penjualan</h1>
<ul> 
		<?php foreach($tokoku as $tko) : ?>

<li>
	<a href="Latihan4.php?jenis_bahan= <?=$tko ["jenis_bahan"];?>&warna_kaos= <?= $tko["warna_kaos"]; ?>&ukuran=<?= $tko["ukuran"]; ?>&stock=<?=$tko["stock"]; ?>&gambar=<?= $tko["gambar"] ?> "><?= $tko["jenis_bahan"] ?></a>
		
	</li>

<?php endforeach; ?>
</ul>






 </body>
 </html>