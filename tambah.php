<?php 
// menyambungkan file tambah.php dengan functions.php
require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	
	
	// cek apakah data berhasil ditambahkan atau tidak
	// untuk alert ini merupakan fungsi dari java script untuk menmapilkan jendela dialog
	if( tambah($_POST) > 0){
		echo "<script>
				alert('Data berhasil ditambahkan!');
				document.location.href ='table.php';
				</script>";
	}else{
		echo "<script>
				alert('Data gagal ditambahkan, Mohon Periksa Kembali!');
			document.location.href ='tambah.php';
				</script>";
	}
	


	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>DONASI</title>
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
<div class="memphis" >
	<div class="artikel">
	<h2>DONASI KUY!!</h2>
	<table border="0" cellspacing="0" cellpadding="20" align="center">
		<form action="" method="post">
			<tr>
				<!-- kegunaa label ini untuk, jika ingin mengisi username cukup meng klik katanya saja -->
				<td><label for="nama">Nama :</label></td>
				<td colspan="3"><input type="text" name="nama" id="nama" required></td>
			</tr>
			<tr>
				<td><label for="alamat">Alamat :</label></td>
				<td colspan="3"><textarea name="alamat" id="alamat" required></textarea></td>
			</tr>
			<tr>
				<td><label for="j_bank">Nama Bank :</label></td>
				<td colspan="3"><select name="j_bank" id="j_bank" required>
					<option>Pilih Bank</option>
					<option>BCA</option>
					<option>BNI</option>
					<option>BRI</option>
					<option>MANDIRI</option>
					<option>CIMB NIAGA</option>
					<option>BJB</option>
			<tr>
				<td><label for="nominal">Nominal :</label></td>
				<td colspan="3"><input type="text" name="nominal" id="nominal" required></td>	</select></td>
			<tr>
				<td colspan="4" align="center"><button name="submit" type="submit">Submit</button></td>
			</tr>	

		</form>
	</table>
	</div>
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