<?php
include "koneksi.php";
$idatk = $_POST['idatk'];
$jatk = $_POST['jatk'];
$matk = $_POST['matk'];
$stokatk = $_POST['stokatk'];
$hargaatk = $_POST['hargaatk'];
$query = "INSERT INTO atk VALUES('".$idatk."', '".$jatk."', '".$matk."', '".$stokatk."', '".$hargaatk."')";
	$sql = mysqli_query($conn, $query);
	if($sql){
		header("location: daftar_atk.php?pesan=berhasiltambah");
	}else{
		echo '<center><strong>Mohon maaf, data yang anda masukkan telah digunakan</strong></center><br>'; 
		header("location: tambah_atk.php?pesan=gagal");
	}
	?>
	