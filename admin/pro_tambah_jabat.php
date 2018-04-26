<?php
include "koneksi.php";

$idjabat = $_POST['idjabat'];
$njabat = $_POST['njabat'];
$gaji = $_POST['gaji'];

$query = "INSERT INTO jabat VALUES('".$idjabat."', '".$njabat."', '".$gaji."')";
	$sql = mysqli_query($conn, $query);
	if($sql){ 
		header("location: daftar_jabat.php?pesan=berhasiltambah");
	}else{
		echo '<center><strong>Mohon maaf, data yang anda masukkan telah digunakan</strong></center><br>'; 
		header("location: tambah_jabat.php?pesan=gagal");
	}
	?>