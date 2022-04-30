<?php
// file functions ini untuk memisahkan antar logika program dengan tampilan
// koneksi ke database
$koneksi=mysqli_connect("localhost","root","","panti_asuhan");

function query ($query){
	
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows =[];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;

	}
	return $rows;
}

function tambah($data){
	
	global $koneksi;
	// ambil data dari tiap elemen dalam form
	$nama=$data["nama"];
	$alamat=$data["alamat"];
	$j_bank=$data["j_bank"];
	$nominal=$data["nominal"];

	$query="INSERT INTO panti 
			VALUES
			('','$nama','$alamat','$j_bank','$nominal')
			";

			// memanggil insert data/memasukan data 
			mysqli_query($koneksi,$query);
			
			// mengembalikan angka berhasil atau tidaknya data masuk
			return mysqli_affected_rows($koneksi);
}
?>