<?php
include "koneksi.php";

$idpgr = $_POST['idpgr'];
$npgr = $_POST['npgr'];
$tlpgr = $_POST['tlpgr'];
$umur = $_POST['umur'];
$query = "INSERT INTO pgr VALUES('".$idpgr."', '".$npgr."', '".$tlpgr."', '".$umur."')";
	$sql = mysqli_query($conn, $query);
	if($sql){ 
		header("location: daftar_pgr.php?pesan=berhasiltambah");
	}else{
		echo '<center><strong>Mohon maaf, data yang anda masukkan telah digunakan</strong></center><br>'; 
		header("location: tambah_pgr.php?pesan=gagal");
	}
	?>
	