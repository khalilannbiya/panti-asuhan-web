<?php 
// memanggil file functions.php
require 'functions.php';

$panti=query("SELECT * FROM panti");


?>
<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN DONASI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- Baris yang paling atas menampilkan logo dan informasi kontak  -->
<div class="wrap row1">
	<header id="header" class="hoc clear">
		<div id="logo" class="fl_left">
			<a href="index.html"><img src="logo.png"></a>
		</div>
		<div id="quickinfo" class="fl_right ">
			<ul class="nospace inline">
				<li><strong>No Telp:</strong><br>
				0899-9161-805</li>
				<li><strong>Rekening BNI:</strong><br>
				0000-9999-8888-7777</li>
			</ul>
		</div>
	</header>
</div>
<!-- baris yang menapilkan navigasi -->
<div class="wrap row2">
	<nav id="mainav" class="hoc clear">
		<ul class="clear">
			<li><a href="index.html">Home</a></li>
			<li><a href="sejarah.html">Sejarah</a></li>
			<li><a href="visi.html">Visi & MiSi</a></li>
			<li class="active" ><a href="tambah.php">Donasi</a></li>
			<li><a href="tentang.html">Tentang Tugas</a></li>    
		</ul>
	</nav>
</div>
<div class="memphis">
	<div class="artikel">
	<h2>Table Donasi</h2>
	<p>Terimakasih anda telah berdonasi, seberapapun anda berdonasi, itu sangat berharga untuk kami.</p>

<table border="1" cellpadding="20" cellspacing="0" align="center">

	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Nominal</th>
	</tr>



	


	<?php $no=1; ?>
	<?php foreach($panti as $row) : ?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["alamat"]; ?></td>
		<td><?php echo $row["nominal"]; ?></td>
	</tr>
	<?php $no++; ?>
	<?php endforeach; ?>
</table>
</div>
<!-- buat baris footer -->
<div class="wrap row4">
	<footer id="footer" class="hoc clear">
		<div>
			<h6 class="heading">Kontak Kami</h6>
			<ul class= "nospace footer">
				<li class="list">
					<address>
						Jl Karang Pawitan blok l no 12
					</address>
				</li>
				<li class="list">
					(+62) 8999 161 805
				</li>
				<li class="list">
					pantiamananah@gmail.com
				</li>
			</ul>
		</div>
	</footer>
</div>
<div class="wrap row5">
	<div id="copyright" class="hoc clear">
		<p class="fl_left">
			Copyright &copy 2020
		</p>
	</div>
</div>
</body>
</html>