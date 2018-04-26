<?php
include "koneksi.php";

$idmatk = $_POST['idmatk'];
$matk = $_POST['matk'];
$query = "INSERT INTO merkatk VALUES('".$idmatk."', '".$matk."')";
	$sql = mysqli_query($conn, $query);
	if($sql){ 
		header("location: daftar_merk.php?pesan=berhasiltambah");
	}else{
		echo '<center><strong>Mohon maaf, data yang anda masukkan telah digunakan</strong></center><br>'; 
		header("location: tambah_merk.php?pesan=gagal");
	}
	?>