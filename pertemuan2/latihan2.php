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
		"ukuran" => "XXL",
		"stock"	=> "30pcs",
		"gambar"=> "rakuatt.jpeg"

	],
	[

		"jenis_bahan" =>"Combed 34s",
		"warna_kaos" =>"Putih",
		
		
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

		<?php foreach($tokoku as $tko) : ?>
<ul> 
	<li>
			<img src="img/<?= $tko["gambar"]; ?>">
	</li>
	<li>Jenis Bahan : <?= $tko["jenis_bahan"]; ?></li>
	<li>Warna Kaos : <?= $tko["warna_kaos"]; ?> </li>
	<li>Ukuran : <?= $tko["ukuran"]; ?> </li>
	<li>Stock : <?= $tko["stock"]; ?></li>

</ul>
<?php endforeach; ?>







 </body>
 </html>