<?php
include "koneksi.php";

$kdjb = $_POST['kdjb'];
$namajb = $_POST['namajb'];

$query = "INSERT INTO jenisbk VALUES('".$kdjb."', '".$namajb."')";
	$sql = mysqli_query($conn, $query);
	if($sql){ 
		header("location: daftar_jb.php?pesan=berhasiltambah");
	}else{
		echo '<center><strong>Mohon maaf, data yang anda masukkan telah digunakan</strong></center><br>'; 
		header("location: tambah_jb.php?pesan=gagal");
	}
	?>