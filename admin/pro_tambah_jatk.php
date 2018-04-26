<?php
include "koneksi.php";

$idjatk = $_POST['idjatk'];
$jatk = $_POST['jatk'];
$stokjatk = $_POST['stokjatk'];

$query = "INSERT INTO jenisatk VALUES('".$idjatk."', '".$jatk."', '".$stokjatk."')";
	$sql = mysqli_query($conn, $query);
	if($sql){ 
		header("location: daftar_jatk.php?pesan=berhasiltambah");
	}else{
		echo '<center><strong>Mohon maaf, data yang anda masukkan telah digunakan</strong></center><br>'; 
		header("location: tambah_jatk.php?pesan=gagal");
	}
	?>