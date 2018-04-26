<?php
include "koneksi.php";
$isbn = $_GET['isbn'];
$idpgr = $_POST['idpgr'];
$kodebk = $_POST['kodebk'];
$judul = $_POST['judul'];
$kota = $_POST['kota'];
$tahun = $_POST['tahun'];
$stokbk = $_POST['stokbk'];
$hargabk = $_POST['hargabk'];
$query = "SELECT * FROM buku WHERE isbn='".$isbn."'";
		$sql = mysqli_query($conn, $query);
		$data = mysqli_fetch_array($sql);
		$query = "UPDATE buku SET idpgr='".$idpgr."', kodebk='".$kodebk."', judul='".$judul."', kota='".$kota."', tahun='".$tahun."', stokbk='".$stokbk."', hargabk='".$hargabk."' WHERE isbn='".$isbn."'";
	$sql = mysqli_query($conn, $query);
		header("location: daftar_bk.php?pesan=berhasilubah");

		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='edit_bk.php'>Kembali Ke Form</a>";
?>